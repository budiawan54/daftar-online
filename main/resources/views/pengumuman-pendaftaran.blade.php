@extends('master')
<title>Hasil Pengumuman Pendaftaran</title>
@section('content')
<div class="container-fluid">
    <div class="callout callout-danger">
        <h5><i class="fas fa-info"></i> Catatan:</h5>
        Untuk para pendaftar yang telah melakukan pendaftaran, jadwal ujian dapat dilihat di bawah ini. Silakan belajar dengan baik agar mampu mendapatkan hasil yang maksimal sehingga kalian dapat bergabung di SMK TI Bali Global Singaraja.
        <ol>
        @foreach ($sesi as $s)
        <li>Sesi {{$s->id_schedule}} dilaksanakan {{Carbon\Carbon::parse($s->schedule)->subDays(-1)->diffForHumans()}} <b>({{Carbon\Carbon::parse($s->schedule)->translatedFormat('d F Y')}})</b></li>
        @endforeach
        </ol>
        Ingat sebelum mengikuti test online ini, para pendaftar harus login terlebih dahulu menggunakan masing-masing akun. Untuk username adalah <b>email</b> yang telah dibuat sebelumnya dan untuk passwordnya adalah <b>tanggal lahir kalian</b>. Misalkan kalian lahir tanggal <strong>12 Juni 1999</strong> jadi format kata sandinya adalah <b><strong>1999-06-12</stong></b>
        <center><a href="{{route('test')}}" class="btn btn-primary" style="color:white">Mulai Ujian</a></center>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Daftar Pendaftar</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="table_pendaftar" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan yang dipilih</th>
                <th>Asal Sekolah</th>
                <th>Tanggal Daftar</th>
                <th>Sesi ujian</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection