<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('kiaalap/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/style.css') }}">
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>USER LOGIN APP</h3>
				<p>ลงชื่อเข้าใช้งานระบบ!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="checklogin" id="loginForm" method="post">
                            <div class="form-group">
                                {!! csrf !!}
                                <label class="control-label" for="username">ชื่อผู้ใช้งาน</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">ชื่อผู้ใช้งานของคุณ</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">รหัสผ่าน</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">รหัสผ่านของคุณ</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> จดจำฉัน </label>
                                <p class="help-block small">(คำเตือน ใชสำหรับคอมพิวเตอร์ส่วนตัวของคุณ)</p>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">เข้าสู่ระบบ</button>
                            <a class="btn btn-default btn-block" href="#">สมัครสมาชิก</a>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2018. All rights reserved. by <a href="https://github.com/STP5940/appbase_slim">Appbase slim</a></p>
			</div>
		</div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="{{ asset('AdminLTE/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('AdminLTE/plugins/iCheck/icheck.min.js') }}"></script>

    <script>
        (function ($) {
         "use strict";

          $('.i-checks').iCheck({
        		checkboxClass: 'icheckbox_square-green',
        		radioClass: 'iradio_square-green',
        	});



        })(jQuery);
    </script>
</body>

</html>
