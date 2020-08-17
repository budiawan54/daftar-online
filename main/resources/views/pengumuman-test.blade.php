@extends('master')
<title>Hasil Test Online</title>
@section('content')
<div class="container-fluid">
    <div class="callout callout-success">
        <h5><i class="fas fa-check"></i> Informasi Hasil Test Online</h5>
        Untuk pendaftar yang namanya tercantum didalam tabel dibawah, silakan datang langsung ke SMK TI Bali Global Singaraja untuk melakukan pendaftaran ulang dengan membawa berkas-berkas pendaftaran lainnya. Terima kasih dan selamat bergabung bersama kami di SMK TI Bali Global Singaraja. 
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Hasil Test Online&nbsp; <i class="fas fa-calendar-check"></i></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="table_lulus" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan yang dipilih</th>
                <th>Asal Sekolah</th>
                <th>Tanggal Ujian</th>
                <th>Nilai</th>
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