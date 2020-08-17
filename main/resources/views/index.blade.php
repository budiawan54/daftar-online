@extends('master')
<title>Beranda</title>
@section('content')
<div class="row featured">
  <div class="col-12">
    <!-- Custom Tabs -->
    <div class="card">
      <div class="card-header d-flex p-0">
        <h3 class="card-title p-3">Profil SMK TI Bali Global Singaraja</h3>
        <ul class="nav nav-pills ml-auto p-2">
          <li class="nav-item"><a class="nav-link active" href="#sejarah" data-toggle="tab">Sejarah</a></li>
          <li class="nav-item"><a class="nav-link" href="#visimisi" data-toggle="tab">Visi Misi</a></li>
          <li class="nav-item"><a class="nav-link" href="#fasilitas" data-toggle="tab">Fasilitas Sekolah</a></li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="sejarah">
            <center><img src="img/logo.png"></center>
            <h6 class="card-title"><b>Sejarah SMK TI BALI Global Singaraja</b></h6>
            <p class="card-text">SMK TI Bali Global Singaraja didirikan oleh Yayasan Dana Punia Buleleng dan Yayasan Widya Dharma Santhi Denpasar. Sekolah tersebut didirikan tahun 2007. SMK TI Terletak di kelurahan Banyuning, Kecamatan Buleleng. Secara geografis terletak dipinggir kota namun dapat diakses dengan cepat dari pusat kota.</p>
            <p>Tujuan pendirian sekolah ini yaitu untuk menyediakan wadah pendidikan bagi masyarakat sekitar yang ingin memperdalam ilmu di bidang teknologi informasi. Hal itu juga sejalan dengan perkembangan dunia waktu itu dan saat ini dimana teknologi informasi menjadi back bone-nya.</p>
            <b>Perkembangan Kompetensi Keahlian</b>
            <p>Pertama berdiri SMKTI hanya memiliki satu jurusan atau kompetensi keahlian yaitu Multimedia. Satu tahun kemudian SMK TI menambah satu jurusan baru yaitu Teknik Komputer dan Jaringan. Beberapa tahun kemudian SMK TI mendirikan jurusan Akuntansi Komputer. Dan terakhir, tahun 2019/2020 SMK TI mengembangkan lagi jurusan baru yaitu jurusan Rekayasa Perangkat Lunak atau RPL. Khusus jurusan RPL, jurusan ini merupakan satu-satunya jurusan yang ada di Buleleng.</p>
            <p>SMK TI Bali Global Singaraja adalah salah satu dari SMK TI Bali Global yang ada di Bali. Sampai saat ini sudah terdapat SMK TI Bali Global yang ada di Provinsi Bali. Mulai Tahun 2018 leader group SMK TI melebarkan sayap dengan merangkul SMK yang tidak berbasis TI ke dalam group. Group tersebut dinamakan SMK Bali Global Group yang sampai saat ini beranggotakan tujuh SMK.</p>
            <p></p>Mulai tahun 2010, pengelolaan SMK TI Bali Global Singaraja secara menyeluruh dikelola oleh Yayasan Dana Punia Buleleng. Dalam pengelolaan pendidikan, Yayasan Dana Punia sangat berkomitmen memajukan satuan pendidikan demi memberikan pelayanan pendidikan kepada masyarakat sekitar. Tidak hanya itu saja, komitmen pendidikan diwujudkan dengan membantu banyak masyarakat kurang mampu sehingga dapat menempuh pendidikan di SMK TI.</p>
            <p>Perkembangan sekolah dari awal didirikan hingga saat ini sangat signifikan. Ini adalah wujud komitmen bersama pengelola dalam menyediakan pendidikan yang berkualitas. Fasilitas-fasilitas terus bertambah dan kualitasnya ditingkatkan. Konsep sekolah hijau berbasis alam sangat kental terasa.</p>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="visimisi">
            <h4><b>Visi</b></h4>
            <ul>
              <li>Terpuji dalam Pekerti</li>
              <li>Terdepan dalam Disiplin</li>
              <li>Terampil dalam Kompentensi</li>
              <li>Unggul dalam Prestasi</li>
            </ul>
            <h4><b>Misi</b></h4>
            <ol>
              <li>Mendidik siswa untuk menjadi seseorang yang memiliki budi pekerti yang luhur dan terpuji serta bertakwa kepada Tuhan Yang Maha Esa.</li>
              <li>Membina siswa untuk menjadi seseorang yang disiplin dan taat pada norma / kaidah yang berlaku di masyarakat.</li>
              <li>Mendidik, melatih, dan membimbing siswa untuk menjadi seseorang yang terampil dan kompeten pada kompetensi yang dipelajari.</li>
              <li>Mengembangkan dan meningkatkan kerjasama dengan seluruh pihak yang terkait dengan berlandaskan kepada saling memberi manfaat.</li>
              <li>Menciptakan lingkungan sekolah yang kondusif dan menyenangkan demi keberhasilan proses belajar mengajar.</li>
              <li>Membina dan melatih siswa agar mampu meraih prestasi dalam bidang akademik dan non akademik</li>
            </ol>
            
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="fasilitas">
            <center><h4><b>Fasilitas di SMK TI Bali Global Singaraja</b></h4>
              <h5><i class="fas fa-wifi"></i> Internet Cepat</h5>
              <h5><i class="fas fa-book-reader"></i> Perpustakaan</h5>
              <h5><i class="fas fa-person-booth"></i> Lintasan Tari</h5>
              <h5><i class="fas fa-futbol"></i> Lapangan Futsal</h5>
              <h5><i class="fas fa-laptop"></i> Laboratorium Komputer</h5>
              <h5><i class="fas fa-futbol"></i> Lapangan Basket</h5>
              <h5><i class="fas fa-futbol"></i> Lapangan Sepak Bola Tangan</h5>
              <h5><i class="fas fa-futbol"></i> Lapangan Futsal</h5>
              <h5><i class="fas fa-tree"></i> Pemandangan hijau</h5></center>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- ./card -->
    <center>Yuk gabung di SMK TI Bali Global Singaraja, klik tombol daftar dibawah ya<br/> <a href="{{route('daftar-online')}}" class="btn btn-primary">Daftar</a></center>

  <!-- /.col -->
  </div>
</div>
<div class="row admin">
  <div class="col-6 quiz">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title title-quiz">Buat Pertanyaan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" class="q-quiz" id="q_form" action="{{route('p_quiz')}}">
        <div class="card-body">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label>Pertanyaan</label>
            <input type="text" name="question" id="question" class="form-control">
          </div>
          <div class="form-group">
            <label>Pilihan Jawaban A</label>
            <input type="text" name="option_a" id="option_a" class="form-control">
          </div>               
          <div class="form-group">
            <label>Pilihan Jawaban B</label>
            <input type="text" name="option_b" id="option_b" class="form-control">
          </div>            
          <div class="form-group">
            <label>Pilihan Jawaban C</label>
            <input type="text" name="option_c" id="option_c" class="form-control">
          </div>
          <div class="form-group">
            <label>Pilihan Jawaban D</label>
            <input type="text" name="option_d" id="option_d" class="form-control">
          </div>
          <div class="form-group">
            <label>Pilihan Jawaban E</label>
            <input type="text" name="option_e" id="option_e" class="form-control">
          </div>
          <div class="form-group">
            <label for="jawaban">Jawaban</label>
            <select name="answer" id="answer" class="form-control">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
            </select>
          </div>
          <div class="form-group">
            <label for="customFile">Gambar Soal (Jika ada)</label>
              <input type="file" class="form-control" name="image" onchange="preview_image(event)">
              <center><img src="" style="height:180px" class="img-thumbnail" id="output_image" ></center>
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="status" id="status" class="form-control">
              <option value="1">Aktif</option>
              <option value="2">Tidak Aktif</option>
            </select>
          </div>
          <div class="form-group">
          <label>Sesi Ujian</label>
          @if(Session::get('type') == '1')
          @foreach ($ujian as $sesi)
          <input type="radio" name="sesi" id="sesi" value="{{$sesi->id_schedule}}" >&nbsp;Sesi Ujian {{$sesi->id_schedule}}
          @endforeach
          @endif
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <center><button type="submit" class="btn btn-primary submit-quiz">Submit</button></center>
        </div>
      </form> 
    </div>
  </div>
  <div class="col-6 right">
    <div class="card card-outline card-primary">
      <!-- /.card-header -->
      <div class="card-body">
        <center><h5><i class="fas fa-info"></i> Catatan:</h5></center>
        <center>Silakan masukkan tanggal ujian pada form dibawah agar pendaftar dapat segera mempersiapkan diri mereka.</center>
        <form role="form" id="f-jadwal">
        @csrf
            <div class="form-group">
              <label for="">Sesi Ujian</label>
              <select name="sessi" id="sesi" class="form-control">
              <option value="1">Sesi 1</option>
              <option value="2">Sesi 2</option>
              </select>
            </div>
            <div class="form-group">
              <label >Tanggal Ujian</label>
              <input type="date" name="ujian" class="form-control" placeholder="Nama Lengkap">
            </div>
            <center>
              <button type="submit" class="btn  btn-primary btn-sm">Submit</button>
        </form>
              <button type ="button" class="btn btn-show-session btn-outline-info btn-sm">Lihat daftar Sesi Ujian</button>
            </center>
      </div>
      <!-- /.card-body -->
    </div>
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Daftar Soal</h3>
      </div>
      <div class="card-body">
        <table id="q_test" class="table table-bordered table-stripped">
          <thead>
            <th>No</th>
            <th>Soal</th>
            <th>Pilihan A</th>
            <th>Pilihan B</th>
            <th>Pilihan C</th>
            <th>Pilihan D</th>
            <th>Pilihan E</th>
            <th>Jawaban</th>
            <th>Sesi Ujian</th>
            <th>Status</th>
            <th>Aksi</th>
          </thead>
        </table>
      </div>
    </div>   
  </div>
</div>
@endsection
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script >
//OUTPUT IMAGE
function preview_image(event) {
  var reader = new FileReader();
  reader.onload = function() {
    var output = document.getElementById('output_image');
    output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);

    $('#output_image').removeClass('hidden')
  }
$(function(){
  $('.btn-show-session').click(function(){
    Swal.fire({
      icon : "info",
      title : "Daftar Sesi Ujian",
      html : "@if(Session::get('type') == '1')<div class='container'>@foreach($ujian as $uj)<li>Sesi Ujian {{$uj->id_schedule}} tanggal {{Carbon\Carbon::parse($uj->schedule)->translatedFormat('d F Y')}}</li>@endforeach</div>@endif"
    })
  })
  $('#home').addClass('active-link')
  $('#f-jadwal').submit(function(){
    $.ajax({
      url : "{{route('prosesjadwal')}}",
      type : "post",
      data : $(this).serialize(),
      success : function (){
        Swal.fire({
          icon : "success",
          title : "Selamat, data berhasil di update",
        })
      },
      error : function(){
        Swal.fire({
          icon : "error",
          title : "Ooops, terjadi kesalahan",
          text : "Silakan ulang kembali atau refresh halaman ini"
        })
      }
    })
  })
})

$(document).on('click','button[name="edit"]',function(){
  let id = $(this).attr('id');
  $.ajax({
    url : "{{route('json')}}",
    type : "get",
    data : {id:id},
    dataType : 'json',
    success : function(data){
      console.log(data);
      $('h3.title-quiz').text('Ubah Pertanyaan')
      $('button.submit-quiz').text('Update')
      $('.right').attr('style','display:none')
      $('form.q-quiz').attr('action','{{route("qupdate")}}')
      $('form.q-quiz').removeAttr('id')
      $('.quiz').addClass('container-fluid')
      $('#id').val(id)
      $('#question').val(data.soal)
      $('#option_a').val(data.option_a)
      $('#option_b').val(data.option_b)
      $('#option_c').val(data.option_c)
      $('#option_d').val(data.option_d)
      $('#option_e').val(data.option_e)
      $('#answer option[value="'+data.t_option+'"]').attr('selected','selected')
      $('#status option[value="'+data.status+'"]').attr('selected','selected')
      $('#sesi[type="radio"][value="'+data.sesi+'"]').attr('checked','checked')
      $('#output_image').attr('src','{{url("gambar/")}}/'+data.img)
    }
  })
})
$(document).on('click','button[name="del"]',function(){
  let id = $(this).attr('id');
  $.ajax({
    url : "{{route('delquiz')}}",
    type : 'delete',
    data : {id:id},
    headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
    success : function (){
      Swal.fire({
          icon : 'success',
          title : 'Selamat',
          text : 'Soal berhasil dihapus',
        });
      $('#q_test').DataTable().ajax.reload()
    },
    error : function (){
      Swal.fire({
          icon : 'error',
          title : 'Oopss, terjadi kesalahan',
          text : 'Silakan ulang kembali atau refresh halaman ini!',
        });
    }
  })
})
</script>