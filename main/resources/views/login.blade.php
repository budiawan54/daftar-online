<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Masuk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="img/logo.png" rel="icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="img/logo.png" style="height:150px">
    <p>SMK TI Bali Global Singaraja</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan masuk untuk memulai sesimu</p>

      <form id="login-form" action="{{('proseslogin')}}" method="post">
      @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="uname" value="{{old('email')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pwd" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4" style="margin-bottom:10px">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <a id="lupa" href="javascript:void(0)">Saya lupa kata sandi</a>
      </p>
      <p class="mb-0">
        <a href="{{route('daftar-online')}}" class="text-center">Daftar sebagai peserta baru</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
  @if(Session::has('alert-error'))
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: "{{Session::get('alert-error')}}"
            })
  @endif
  // $.validator.setDefaults({
  //   submitHandler : function(){
  //     $('#login-form').submit(function(){
  //       $.ajax({
  //         url : '{{route('proseslogin')}}',
  //         type : 'POST',
  //         data : $(this).serialize(),
  //         headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
  //         success : function(){
  //           alert ('berhasil login')
  //         },
  //         error : function(){
  //           alert ('terjadi kesalahan')
  //         }
  //       })
  //     })
  //   }
  // })
  $('#lupa').click(function(){
    Swal.fire({
      icon : "info",
      title : "Hmmmm,",
      showCloseButton : true,
      text : "Silakan hubungi pihak sekolah ya untuk detail loginnya"
    })
  })
  $('#login-form').validate({
    rules : {
      uname : {
        required : true
      },
      pwd : {
        required : true
      }
    },
    messages : {
      uname : {
        required : 'Tolong isi dengan alamat email ya!.',
        email: "Upss, tampaknya itu bukan alamat email. Isi dengan benar ya!"
      },
      pwd : {
        required : 'Password tolong diisi ya!.',
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  })
});
</script>
</body>
</html>
