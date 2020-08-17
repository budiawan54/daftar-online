<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Datatables;
use Hash;
use Session;
use Carbon\Carbon;
class pendaftaran extends Controller
{
    //
    function index(){
        if(!Session::has('loginadmin')){
        Session::put('type',0);
        return view('index');
        } else {
        $ujian = DB::table('schedule')->get();
        return view('index',compact('ujian'));
        }
    }
    function validasidata(Request $request){
        DB::table('pendaftar')->insert([
            'nama' => $request->nama,
            'sex' => $request->sex,
            'lahir' => $request->birth,
            'school_addr' => $request->school_addr,
            'telp' => $request->phone,
            'depart' => $request->depart,
            'email' => $request->email,
            'std_addr' => $request->std_addr,
            'fath' => $request->fath,
            'moth' => $request->moth
        ]);
        $last_id = DB::getPDO()->lastInsertId();
        $sesi = DB::table('schedule')->where('id_schedule',1)->get();
        $hari_ini = strtotime(Carbon::now());
        $sesi_1 = strtotime($sesi->where('id_schedule',1)->first()->schedule);
        if ($hari_ini < $sesi_1){
            DB::table('pendaftar')->where('id_pendaftar',$last_id)->update([
                'sesi' => 1
            ]);
        } else {
            DB::table('pendaftar')->where('id_pendaftar',$last_id)->update([
                'sesi' => 2
            ]);
        }
        DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->birth),
            'type' => 2,
            'id_pendaftar' => $last_id
        ]);
    }

    function dtpendaftaran(){
        $pendaftaran = DB::table('pendaftar')->select('*')
        ->join('sex','pendaftar.sex','=','sex.id')
        ->join('depart','pendaftar.depart','=','depart.id')
        ->get();
        return datatables()->of($pendaftaran)
        ->addIndexColumn()
        ->make(true);
    }
    function dtkelulusan(){
        $pendaftaran = DB::table('pendaftar')->select('*')
        ->join('sex','pendaftar.sex','=','sex.id')
        ->join('depart','pendaftar.depart','=','depart.id')
        ->where('nilai','>=', 75)
        ->get();
        return datatables()->of($pendaftaran)
        ->addIndexColumn()
        ->make(true);
    }

    function proseslogin(Request $request){
        $uname = $request->uname;
        $pwd = $request->pwd;
        $cek_uname = DB::table('users')->where('email',$uname)->get();
        if($uname == "admin@smkti.com" && $pwd == "@dm!n"){
            Session::put('login',TRUE);
            Session::put('email',"admin@smkti.com");
            Session::put('loginadmin',TRUE);
            Session::put('nama','admin');
            Session::put('type',1);
            return redirect ('/');
        } elseif ($cek_uname->where('email',$uname)->first()){
                if($cek_uname->where('email',$uname)->first()->email){
                    if(Hash::check($pwd,$cek_uname->where('email',$uname)->first()->password)){
                        if($cek_uname->where('email',$uname)->first()->type == 2){
                            Session::put('login',TRUE);
                            Session::put('email',$cek_uname->where('email',$uname)->first()->email);
                            Session::put('loginpendaftar',TRUE);
                            Session::put('nama',$cek_uname->where('email',$uname)->first()->name);
                            Session::put('type',$cek_uname->where('email',$uname)->first()->type);
                            Session::put('id',$cek_uname->where('email',$uname)->first()->id_pendaftar);
                            return redirect('test');
                        } else {
                            return redirect('/');
                        }
                        
                    } else {
                        return back()->with('alert-error','Password salah');
                    }
                }
            } else {
                return back()->with('alert-error','Email kamu tidak terdaftar di sistem');
            }
    }

    function sessiontest(){
        if(!Session::has('loginpendaftar')){
            return redirect('login')->with('alert','Maaf kamu haru login terlebih dahulu');
        } else {
            $nilai_pendaftar = DB::table('pendaftar')->where('id_pendaftar',Session::get('id'))->first()->nilai;
            if($nilai_pendaftar == 0 || $nilai_pendaftar = NULL){
                $quiz = DB::table('quiz')->where('status',1)->get();
                $nilai = 0;
                return view('test',compact('quiz','nilai'));
            } else {
                $quiz = null;
                $nilai = DB::table('pendaftar')->select('nilai')->where('id_pendaftar',Session::get('id'))->first()->nilai;
                return view('test',compact('quiz','nilai'));
            }    
        }
    }

    function logout(){
        Session::flush();
        return back();
    }
}
