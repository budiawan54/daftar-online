<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link href="img/logo.png" rel="icon">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <style type="text/css">
    a.active-link {
        background-color:#17a2b8;color:white;
    }
  </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="margin:0px 35px">
    <a href="" class="navbar-brand">
    <img src="img/logo.png" style="height:50px" alt="Logo" class="img-circle">
    </a>
    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a href="{{route('index')}}" id="home" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
        <a href="{{route('daftar-online')}}" id="daftar-online" class="nav-link">Daftar Online</a>
        </li>
        <li class="nav-item">
        <a href="{{route('pendaftaran')}}" class="nav-link" id="pengumuman-pendaftaran">Pengumuman Pendaftaran</a>
        </li>
        <li class="nav-item">
        <a href="{{route('test')}}" class="nav-link" id="test">Test Online</a>
        </li>
        <li class="nav-item">
        <a href="{{route('hasil-test')}}" class="nav-link" id="pengumuman-test">Pengumuman Test Online</a>
        </li>
    </ul>
    </div>

    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    @if(Session::has('login'))
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>&nbsp;<strong>{{Session::get('nama')}}</strong>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/avatar5.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  {{Session::get('nama')}}
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">{{Session::get('email')}}</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('sign-out')}}" class="dropdown-item dropdown-footer"><i class="fas fa-sign-out-alt"></i>Keluar</a>
        </div>
      </li>
    @else
    <li class="nav-item">
    <a class="nav-link"  href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i>&nbsp;Masuk</a>
    </li>
    @endif
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
    @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Versi 1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 </strong> SMK TI Bali Global Singaraja.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- DataTables -->
<!-- moment -->
<script src="{{asset('plugins/moment/min/moment.min.js')}}"></script>
<script src="{{asset('plugins/moment/min/locales.min.js')}}"></script>
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('button.btn-jawab-soal').click(function(){
    $('.list-pertanyaan').removeAttr('style')
    $('.callout-danger').remove()
  })
  var session = {{Session::get('type')}};
  console.log(session);
  if({{Session::get('type')}} == "1") {
    $('#daftar-online,#test,#pengumuman-pendaftaran,#pengumuman-test,.featured').remove();
  } else {
    $('.admin').remove();
  }
  $('#q_form').validate({
    rules : {
      question: {
        required:true
      },
      option_a :{
        required:true
      },
      option_b :{
        required:true
      },
      option_c :{
        required:true
      },
      option_d :{
        required:true
      },
      image :{
        extension: "jpg|jpeg|png",
        maxsize : 1232896
      },
      answer :{
        required:true
      },
    },
    messages: {
      image :{
        extension : "Maaf file yang diperbolehkan hanya dalam format .jpg, jpeg dan png",
        maxsize : "Maaf ukuran file tidak boleh lebih dari 1MB"
      },
      question: {
        required:"Pertanyaan wajib diisi"
      },
      option_a :{
        required:"Pilihan jawaban wajib diisi"
      },
      option_b :{
        required:"Pilihan jawaban wajib diisi"
      },
      option_c :{
        required:"Pilihan jawaban wajib diisi"
      },
      option_d :{
        required:"Pilihan jawaban wajib diisi"
      },
      answer :{
        required:"Tolong tulis jawaban yang benar"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  })
  $('#val-data').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      nama: {
        required: true,
      },
      sex: {
        required: true,
      },
      birth: {
        required: true,
      },
      school_addr: {
        required: true,
      },
      phone: {
        required: true,
        minlength:10,
        maxlength:14,
      },
      std_addr: {
        required: true,
      },
      depart: {
        required: true,
      },
      fath: {
        required: true,
      },
      moth: {
        required: true,
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Tolong isi alamat emailmu ya!",
        email: "Upss, tampaknya itu bukan alamat email. Isi dengan benar ya!"
      },
      nama: {
        required: "Tolong isi nama kamu!",
      },
      sex: {
        required: "Tolong isi jenis kelaminmu!",
      },
      birth: {
        required: "Tolong isi tanggal lahirmu!",
      },
      school_addr: {
        required: "Tolong isi asal sekolahmu!",
      },
      phone: {
        required: "Tolong isi nomor telp atau WA kamu!",
        minlength: "Minimal nomor telp/WA adalah 10 karakter",
        maxlength: "Maksimal nomor telp/WA adalah 14 karakter"
      },
      std_addr: {
        required: "Tolong alamat lengkapnya diisi!",
      },
      depart: {
        required: "Silakan pilih jurusan yang diminati!",
      },
      fath: {
        required: "Tolong isi nama ayahmu ya!",
      },
      moth: {
        required: "Tolong isi nama ibumu ya!",
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  $('#f-jadwal').validate({
   rules : {
    ujian : {
      required : true,
    }
   },
   messages : {
     ujian : {
       required : "Mohon isi tanggal untuk gelombang ini",
     }
   },
   errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  })
  

  //SUBMIT FORM 
  $('#q_form').submit(function(){
    var url = $(this).attr('action');
    $.ajax({
      url : url,
      method : 'POST',
      data : new FormData(this),
      processData: false,
      contentType: false,
      headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
      success :function(){
        Swal.fire({
          icon : 'success',
          title : 'Selamat',
          text : 'Soal berhasil diperbarui',
        });
        $('input[type="text"]').val('');
        $('input[type="file"]').val('');
        $('#output_image').remove();
        $('#q_test').DataTable().ajax.reload()
        $('.right').removeAttr('style','display:none')
        $('h3.title-quiz').text('Buat Pertanyaan')
        $('button.submit-quiz').text('Submit')
        $('form.q-quiz').attr('action','{{route("p_quiz")}}')
      },
      error : function(){
        Swal.fire({
          icon : 'error',
          title : 'Oopss, terjadi kesalahan',
          text : 'Silakan ulang kembali atau refresh halaman ini!',
        });
      }
    })
  })

  $('#val-data').submit(function(){
    $.ajax({
      url : "{{route('prosesdata')}}",
      type : "post",
      data : $(this).serialize(),
      success : function(){
        Swal.fire({
            title: 'Selamat',
            text: "Data kamu berhasil divalidasi",
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Lihat Pengumuman'
          }).then((result) => {                                                                                                                                                          
            if (result.value) {
              window.location.href = "{{route('pendaftaran')}}"
            }
          })
      },
      error : function(){
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Terjadi kesalahan, silakan dicoba kembali!'
        })
      }
    })
    return false;
  })

  //DATATABLES
  $("#table_lulus").DataTable({
      processing : true,
      serverSide : true,
      ajax : "{{route('listkelulusan')}}",
      columns : [
        {data : 'DT_RowIndex'},
        {data : 'nama',orderable:false},
        {data : 'std_addr',orderable:false},
        {data : 'sex_name',orderable:false,},
        {data : 'depart_name',orderable:false},
        {data : 'school_addr',orderable:false},
        {data : 'updated_at',render:function(data){
          moment.locale('id')
          return moment(data).format("DD MMMM YYYY");
        }},
        {data : 'nilai',render:function(data){
          return "<span class='badge bg-info'>"+data+"</span>";
        }}
      ],
      "responsive": true,
      "autoWidth": true,
  });
  $('#q_test').DataTable({
    processing : true,
    serverSide : true,
    ajax : "{{route('dtquiz')}}",
    columns: [
      {data:'DT_RowIndex'},
      {data :'soal'},
      {data : 'option_a'},
      {data : 'option_b'},
      {data : 'option_c'},
      {data : 'option_d'},
      {data : 'option_e'},
      {data : 't_option'},
      {data : 'sesi'},
      {data : 'status', render:function(data){
        if (data =='1'){
          return "<span class='badge bg-success'>Aktif</span>";
        } else {
          return "<span class='badge bg-danger'>Tidak aktif</span>";
        }
      }},
      {data : 'action'}
    ],
    "responsive" : true,
    "autoWidth ": true,
  });
  $("#table_pendaftar").DataTable({
      processing : true,
      serverSide : true,
      ajax : "{{route('listpendaftar')}}",
      columns : [
        {data : 'DT_RowIndex'},
        {data : 'nama',orderable:false},
        {data : 'std_addr',orderable:false},
        {data : 'sex_name',orderable:false,},
        {data : 'depart_name',orderable:false},
        {data : 'school_addr',orderable:false},
        {data : 'created_at',render:function(data){
          moment.locale('id')
          return moment(data).format("DD MMMM YYYY");
        }},
        {data : 'sesi',render:function(data){
          return "<span class='badge bg-info'>Sesi "+data+"</span>";
        }}
      ],
      "responsive": true,
      "autoWidth": true,
  });
    //ACTIVE LINK
    var url = location.pathname.split('/');
    var lokasi = url[url.length-1];
    if($('#home').click(function(){
        ($("#home").addClass("active-link"))
    }))
    switch (lokasi) {
        case "daftar-online":
            $('#daftar-online').addClass('active-link')
            break;
        case "pendaftaran":
            $('#pengumuman-pendaftaran').addClass('active-link')
            break;
        case "hasil-test":
            $('#pengumuman-test').addClass('active-link')
            break;
        case "test":
            $('#test').addClass('active-link')
            break;
        default:
            break;
    }

    //DATETIMERANGPICKER
    $('#quiz_start').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'DD/MM/YYYY hh:mm A'
      }
    })
});
</script>
</body>
</html>
