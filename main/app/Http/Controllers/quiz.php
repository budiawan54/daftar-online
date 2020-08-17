<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Datatables;
use Session;
class quiz extends Controller
{
    //
    function sesi(){
        $sesi = DB::table('schedule')->get();
        return view('pengumuman-pendaftaran',compact('sesi'));
    }
    function schedule(Request $request){
        $sesi = $request->sessi;
        $cek_sesi = DB::table('schedule')->where('id_schedule',$sesi)->get();
        if ($cek_sesi->where('id_schedule',$sesi)->first()) {
            if ($cek_sesi->where('id_schedule',$sesi)->first()->id_schedule == $sesi){
                DB::table('schedule')->where('id_schedule',$sesi)->update([
                    'id_schedule' =>$request->sessi,
                    'schedule' => $request->ujian
                ]);
            }
        } else {
            DB::table('schedule')->insert([
                'id_schedule' =>$request->sessi,
                'schedule' => $request->ujian
            ]);
            return response($cek_sesi);
        }
        
        return back()->with('alert-success','Jadwal Ujian berhasil disimpan');
    }
    function update(Request $request){
        $id = $request->id;
        if($request->hasFile('image')){
            $foto = $request->file('image');
            $nama_foto = $foto->getClientOriginalName();
            $folder = "gambar";
            $foto->move($folder,$nama_foto);
            DB::table('quiz')->where('id',$id)->update([
                'soal' => $request->question,
                'option_a'=>$request->option_a,
                'option_b'=>$request->option_b,
                'option_c'=>$request->option_c,
                'option_d'=>$request->option_d,
                'option_e'=>$request->option_e,
                't_option'=>$request->answer,
                'sesi' => $request->sesi,
                'img' => $nama_foto,
                'status' => $request->status
            ]);
            } else {
                DB::table('quiz')->where('id',$id)->update([
                    'soal' => $request->question,
                    'option_a'=>$request->option_a,
                    'option_b'=>$request->option_b,
                    'option_c'=>$request->option_c,
                    'option_d'=>$request->option_d,
                    'option_e'=>$request->option_e,
                    't_option'=>$request->answer,
                    'sesi' => $request->sesi,
                    'status' => $request->status
                ]);
            }
        
        return back()->with('alert-success','Soal berhasil diperbarui');
    }
    function save(Request $request){
        if($request->hasFile('image')){
            $foto = $request->file('image');
            $nama_foto = $foto->getClientOriginalName();
            $folder = "gambar";
            $foto->move($folder,$nama_foto);
            DB::table('quiz')->insert([
                'soal' => $request->question,
                'option_a'=>$request->option_a,
                'option_b'=>$request->option_b,
                'option_c'=>$request->option_c,
                'option_d'=>$request->option_d,
                'option_e'=>$request->option_e,
                't_option'=>$request->answer,
                'sesi' => $request->sesi,
                'img' => $nama_foto,
                'status' => $request->status
            ]);
        } else {
            DB::table('quiz')->insert([
                'soal' => $request->question,
                'option_a'=>$request->option_a,
                'option_b'=>$request->option_b,
                'option_c'=>$request->option_c,
                'option_d'=>$request->option_d,
                'option_e'=>$request->option_e,
                't_option'=>$request->answer,
                'sesi' => $request->sesi,
                'status' => $request->status
            ]);
        }
    }
    function dtquiz(){
        $quiz = DB::table('quiz')->select('*')->get();
        return Datatables()->of($quiz)
        ->addIndexColumn()
        ->addcolumn('link','<button class="btn btn-primary">submit</button>')
        ->addColumn('action',function($quiz){
			$button = '<button name="edit" id="'.$quiz->id.'"  class="btn bg-gradient-warning"><i class="fa fa-edit"></i></button>';
			$button .='&nbsp';
			$button .= '<button name="del" id="'.$quiz->id.'" class="btn bg-gradient-danger"><i class="fa fa-trash"></i></button>';
			return $button;
		})
        ->make(true);
    }
    function json(Request $request){
        $id = $request->input('id');
        $quiz = DB::table('quiz')->where('id',$id)->first();
        echo json_encode($quiz);
    }
    function delete(Request $request){
        DB::table('quiz')->where('id',$request->input('id'))->delete();
    }
    function answer(Request $request){
        $id_pendaftar = Session::get('id');
        $soal = DB::table('quiz')->where('status',1)->get();
        $jumlah = count($soal);
        $pilihan = $request->pilihan;
        $id_soal = $request->id;
        $score = 0;
        $benar = 0;
        $salah = 0;
        $kosong = 0;
        
        for ($i=0; $i<$jumlah; $i++){
            $nomor = $id_soal[$i];
            if(empty($pilihan[$nomor])){
                $kosong++;
            } else {
                $jawaban = $pilihan[$nomor];
                $query= DB::table('quiz')->where('id',$nomor)->where('t_option',$jawaban)->get();
                $cek = count($query);
                if ($cek){
                    $benar++;
                } else {
                    $salah++;
                }
            }
            $score = 100/$jumlah*$benar;
            $hasil = number_format($score);
            DB::table('pendaftar')->where('id_pendaftar',$id_pendaftar)->update([
                'nilai' => $hasil
            ]);
        }
        return back()->with('alert-success','Selamat kamu telah berhasil menyelesaikan ujian');
    }
}
