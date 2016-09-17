@extends($layoutid)
<?php /*=====================================================////
////																											   ////
////                    Документ D-пакета      				       ////
////																												 ////
////========================================================*/ ?>


<?php /*------------------->
<!-- 1. Title документа  -->
<!---------------------*/ ?>
@section('title')

  <title>D10002 - Images Upload And Manipulation System</title>

@stop



<?php /*----------------->
<!-- 2. CSS документа  -->
<!-------------------*/ ?>
@section('css')

  <!-- document css: start -->
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/Font-Awesome/css/font-awesome.min.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/ionicons/css/ionicons.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/bootstrap/css/bootstrap.min.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/dist/css/AdminLTE.min.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/dist/css/skins/_all-skins.min.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/bootstrap-slider/slider.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/daterangepicker/daterangepicker.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/datepicker/datepicker3.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/iCheck/all.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/select2/select2.min.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/ckeditor/skins/moono/editor.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/datatables/dataTables.bootstrap.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/loaders.css/loaders.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/perfect-scrollbar/css/perfect-scrollbar.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/4gekkman-bower-animsition/animsition/dist/css/animsition.min.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/L10000/css/c.css?rand={!! mt_rand(1000,9999); !!}">
  <link rel="stylesheet" type="text/css" href="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/D10002/css/c.css?rand={!! mt_rand(1000,9999); !!}">
  <!-- document css: stop -->

@stop


<?php /*--------------------->
<!-- 3. Контент документа  -->
<!--------------------------->
Оглавление





-------------------------*/ ?>
@section('content')

  <div>
    <input type="file" data-bind="event: { change: function() { $root.m.s1.inputurl($element.files[0]) } }">
  </div>
  <br>
  <div>
    <button data-bind="click: f.s1.saveimage">Upload</button>
  </div>

@stop



<?php /*--------------------------------------------------------------->
<!-- 4. Получение данных с сервера и подключение JS этого документа  -->
<!-----------------------------------------------------------------*/ ?>
@section('js')

  <?php /*-------------------------------->
  <!-- 4.1. Получение данных с сервера  -->
  <!----------------------------------*/ ?>
  <script>

    // 1. Подготовить объект, в который будут записаны данные
    var server = {};

    // 2. Принять данные

      // 2.1. Принять csrf_token
      server.csrf_token             = "{{ csrf_token() }}";

      // 2.2. Принять переданные из контроллера данные
      server.data                   =  {!! $data !!};

  </script>


  <?php /*------------------------------------>
  <!-- 4.2. Подключение JS этого документа  -->
  <!--------------------------------------*/ ?>

  <!-- document js: start -->
  <script attr1="\Request::getHost();" attr2="\Request::getHost();"></script>
  <script attr1="\Request::getHost();" attr2="\Request::getHost();"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/4gekkman-bower-jslib1/library.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/jquery/jquery.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/moment/moment.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/bootstrap/js/bootstrap.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/fastclick/fastclick.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/dist/js/app.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/sparkline/jquery.sparkline.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/flot/jquery.flot.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/flot/jquery.flot.resize.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/flot/jquery.flot.pie.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/flot/jquery.flot.categories.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/knob/jquery.knob.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/bootstrap-slider/bootstrap-slider.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/select2/select2.full.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/input-mask/jquery.inputmask.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/moment/min/moment.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/daterangepicker/daterangepicker.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/datepicker/bootstrap-datepicker.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/iCheck/icheck.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/ckeditor/ckeditor.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/ckeditor/config.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/ckeditor/lang/ru.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/ckeditor/styles.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/datatables/jquery.dataTables.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/knockoutjs/dist/knockout.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/history.js/scripts/bundled/html4+html5/native.history.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/socket.io-client/socket.io.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/perfect-scrollbar/js/perfect-scrollbar.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/d3/d3.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/4gekkman-bower-animsition/animsition/dist/js/animsition.min.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/bower/momentjs/moment.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/L10000/js/j.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <script src="{!! (\Request::secure() ? "https://" : "http://") . (\Request::getHost()) . ":" . (\Request::getPort()); !!}/public/D10002/js/j.js?rand={!! mt_rand(1000,9999); !!}"></script>
  <!-- document js: stop -->


@stop




