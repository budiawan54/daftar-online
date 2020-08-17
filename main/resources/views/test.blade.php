@extends('master')
@section('content')
@if($nilai == 0 || $nilai == NULL)
<div class="callout callout-danger">
    <h5><i class="fas fa-info"></i> Penting:</h5>
    Sebelum menjawab pertanyaan yang ada, pastikan koneksi internet lancar dan  jangan lupa menyimpan jawaban yang telah kamu jawab sebelumnya di kertas untuk mengatasi resiko gagal koneksi. Test ini berlaku sekali jadi setelah kamu menjawab soal ini kamu tidak bisa lagi melakukan test ulang. Terima kasih.
    <center><button class="btn btn-primary btn-jawab-soal">Mulai Test</button></center>
</div>
<div class="row list-pertanyaan" style="display:none">
    <!-- left column -->
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="test-siswa" action="{{route('prosesjawaban')}}" method="post">
            @csrf
                <div class="card-body">
                    <?php $no=0; ?>
                    @foreach ($quiz as $qu)
                    <?php $no++; ?>
                    <div class="form-group">
                            <input type="hidden" name="id[]" value="{{$qu->id}}">
                            <label >{{$no}}.&nbsp;{{$qu->soal}}</label><br/>@if($qu->img != null) <img src="{{url('gambar/'.$qu->img)}}" height="250">@endif<br/>
                            <input type="radio" name="pilihan[{{$qu->id}}]"  value="A"> A.&nbsp;{{$qu->option_a}}<br/>
                            <input type="radio" name="pilihan[{{$qu->id}}]"  value="B"> B.&nbsp;{{$qu->option_b}}<br/>
                            <input type="radio" name="pilihan[{{$qu->id}}]"  value="C"> C.&nbsp;{{$qu->option_c}}<br/>
                            <input type="radio" name="pilihan[{{$qu->id}}]"  value="D"> D.&nbsp;{{$qu->option_d}}<br/>
                    </div>
                    @endforeach
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
@else
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
@if($nilai < 75)
<script>
    Swal.fire({
        icon : "error",
        title : "Maaf, kamu tidak lulus",
        text : "Terima kasih telah berjuang pada ujian sebelumnya, skor kamu adalah {{$nilai}} dan maksimal nilai agar dapat lulus adalah 75",
    }).then((result) => {
                if (result.value) {
                  window.location.href = "{{route('hasil-test')}}"
                }
              })
</script>
@else
<script>
    Swal.fire({
        icon : "success",
        title : "Selamat, kamu lulus",
        html : "Terima kasih telah berjuang pada ujian sebelumnya, skor kamu adalah <b>{{$nilai}}</b> selanjutnya lihat pada pengumuman untuk informasi selanjutnya",
    }).then((result) => {
                if (result.value) {
                  window.location.href = "{{route('hasil-test')}}"
                }
              })
</script>
@endif
@endif
@endsection