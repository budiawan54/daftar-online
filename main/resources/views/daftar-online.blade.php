@extends('master')
<title>Daftar Online</title>
@section('content')
<div class="container-fluid">
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i> Informasi!</h5>
        Sebelum memulai test online yang akan menjadi sistem penilaian untuk dapat diterima di SMK TI Bali Global Singaraja, terlebih dahulu kalian harus mengisi beberapa formulir pendaftaran di bawah ini. Pastikan data diisi dengan benar agar tidak terjadi masalah ketika validasi data. 
    </div>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Validasi Data Diri</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="val-data"  action="{{route('prosesdata')}}">
                @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label >Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label >Jenis Kelamin :</label>
                            <input type="radio" name="sex"  value="1"> Laki-laki
                            <input type="radio" name="sex"  value="2"> Perempuan
                        </div>
                        <div class="form-group">
                            <label >Tanggal Lahir</label>
                            <input type="date" name="birth" class="form-control" id="birth"  placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label >Asal Sekolah</label>
                            <input type="text" name="school_addr" class="form-control" id="school_addr" placeholder="Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label >No Hp/WA</label>
                            <input type="number" name="phone" class="form-control"  id="phone" placeholder="Nomor Hp/Whatsapp">
                        </div>
                        <div class="form-group">
                            <label>Jurusan yang diminati</label>
                            <select class="form-control" name="depart">
                                <option value="1">Teknik Komputer dan Jaringan (TKJ)</option>
                                <option value="2">Multimedia (MM)</option>
                                <option value="3">Akuntansi Komputer (AK)</option>
                                <option value="4">Rekayasa Perangkat Lunak (RPL)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="email" name="email" class="form-control"  placeholder="Masukkan alamat email">
                        </div>
                        <div class="form-group">
                            <label >Alamat</label>
                            <textarea class="form-control" id="std_addr" name="std_addr" rows="5" placeholder="Tulis alamat lengkap"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Nama Ayah</label>
                            <input type="text" name="fath" class="form-control" id="fath" placeholder="Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label >Nama Ibu</label>
                            <input type="text" name="moth" class="form-control" id="moth" placeholder="Nama Ibu">
                        </div>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                <label class="custom-control-label" for="exampleCheck1">Saya setuju dengan  <a href="#">syarat dan ketentuan yang berlaku</a>.</label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection
