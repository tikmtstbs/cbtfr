<?php
	require("config/config.default.php");
	$cekdb = mysql_query('select 1 from `pengawas` LIMIT 1');
	if($cekdb==false){
		header("");
	}
	
	?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        Login - SISWA
    </title>
    <meta name="description" content="USBK">
    <meta name="author" content="THOFA">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
              <link rel="stylesheet" href="SISWA/glyphicons.css" type="text/css">
        <link rel="stylesheet" href="SISWA/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="SISWA/material-design-icons.css" type="text/css">
        <link rel="stylesheet" href="SISWA/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="SISWA/main.min.css" type="text/css">
        <link rel="stylesheet" href="SISWA/font.css" type="text/css">
        <link rel="stylesheet" href="SISWA/appS.min.css" type="text/css">
        <link rel="stylesheet" href="SISWA/custom.css" type="text/css">
		<link rel="stylesheet" href="admin/login/font-awesome/css/font-awesome.css" type="text/css">

				<link rel="icon" type="image/png" href="favicon.ico"/>
				<link rel='stylesheet' href='<?php echo $homeurl; ?>/plugins/sweetalert2/dist/sweetalert2.min.css'>
            <link rel="stylesheet" href="admin/login/w3X.css" type="text/css">
  <style type="text/css">
    body,html {
      height: 100%;
    }
    div.app {
      display: flex;
      height: 100%;
      width: 100%;
      flex-direction: column;
    }

    .login-wrapper {
      flex: 1;
      background-color: black;;
      min-height: 730px;
      height: 100%;

    }
    .login-wrapper > * {
      height: 100% !important;
    }
    .login-wrapper .bg-pic {
      position: absolute;
      width: 100%;
      min-height: 730px;
      overflow: hidden;
    }
    .login-wrapper .bg-pic > img {
      height: 100%;
      opacity: 0.9;
	  max-width:75%;
    }
    .login-wrapper .login-container {
      width: 500px;
      display: block;
      position: relative;
      float: right;
      /*background: linear-gradient(to bottom, #5e70f7 0%, #20b9fe 100%);*/
      /*color:white;*/
    }
    .login-wrapper .bg-caption {
      width: 500px;
    }
    .login-wrapper .pull-bottom {
      position: absolute !important;
      bottom: 0;
    }
    small,
    .small {
      line-height: 18px;
    }

    .changevhd {
      margin: 0 auto;
      font-size: 36px;
      padding: 100px;
    }

    /* Responsive handlers : Login
    ------------------------------------
    */
    @media (max-width: 768px) {
      .login-wrapper .login-container {
        width: 100%;
      }
      .register-container {
        width: 100%;
        padding: 15px;
      }
    }
    @media  only screen and (max-width: 321px) {
      .login-wrapper .login-container {
        width: 100%;
      }
    }

  </style>
  <?php 
$Dd= date("D");
$bln= date ("M");
	if ($Dd=="Sun"){$hari="Minggu, ";}
	else if ($Dd=="Mon"){$hari="Senin, ";}
	else if ($Dd=="Tue"){$hari="Selasa, ";}
	else if ($Dd=="Wed"){$hari="Rabu, ";}
	else if ($Dd=="Thu"){$hari="Kamis, ";}
	else if ($Dd=="Fri"){$hari="Jum'at, ";}
	else if ($Dd=="Sat"){$hari="Sabtu, ";}
	else{$hari=$Dd;}
								
								if($bln=='Jan'){$bln = "Januari ";}
								elseif($bln=='Feb'){$bln = "Februari ";}
								elseif($bln=='Mar'){$bln = "Maret ";}
								elseif($bln=='Apr'){$bln = "April";}
								elseif($bln=='May'){$bln = "Mei ";}
								elseif($bln=='Jun'){$bln = "Juni ";}
								elseif($bln=='Jul'){$bln = "Juli ";}
								elseif($bln=='Aug'){$bln = "Agustus ";}
								elseif($bln=='Sep'){$bln = "September ";}
								elseif($bln=='Oct'){$bln = "Oktober ";}
								elseif($bln=='Nov'){$bln = "November";}
								elseif($bln=='Dec'){$bln = "Desember ";}
								else{$bln=$bln;}
?>
<style type="text/css">.morris-hover{position:absolute;z-index:1000}.morris-hover.morris-default-style{border-radius:10px;padding:6px;color:#666;background:hsla(0,0%,100%,.8);border:2px solid hsla(0,0%,90%,.8);font-family:sans-serif;font-size:12px;text-align:center}.morris-hover.morris-default-style .morris-hover-row-label{font-weight:700;margin:.25em 0}.morris-hover.morris-default-style .morris-hover-point{white-space:nowrap;margin:.1em 0}</style></head>
<body class="">
<div id="app" class="app"><div class="login-wrapper">
<div class="bg-pic"><img width="100%" src="<?php echo $homeurl.'/'.$setting['background_siswa'];?>"  alt="" class="lazy"> <div class="bg-caption pull-bottom text-white p-l-md"><h2 class="semi-bold">
               
            
            </p></div></div> <div class="login-container white" style="min-height: 600px;">
			<div class="m-x-sm m-t-sm" ><div class="p-x-sm p-y-xs pull-left btn btn-primary btn-sm"><i class='fa fa-calendar'></i> <?php echo $hari."&nbsp;" ; echo date('d'). "&nbsp;&nbsp;"; echo $bln."&nbsp;" ; echo date('Y'); ?></div><div class="p-x-sm p-y-xs pull-right btn btn-danger btn-sm" ><i class='fa fa-clock-o' ></i> <span class="" id="clock"></div></div > <div class=" p-x-md m-t-lg"><br>
			<div class="text-center p-x-sm"><image src="<?php echo $homeurl.'/'.$setting['logo'];?>" height='100px' class="apps"> <p>
              <h4><?php echo $setting['sekolah'];?></h4>
              Aplikasi Test Berbasis Komputer<br></p></div> <div class="p-x-md"><div class="p-t-sm"><div class="m-b text-md"></div> <div class="m-b text-md">
        <b>Login Peserta</b>
      </div> <form id="formlogin" action="ceklogin.php" method="post">
	  <div class="md-form-group 1"><b>Username</b>
	  <input placeholder="username" type="text" required="required" name="username" value="" class="md-input p-l-1">
	  <label></label></div> <div class="md-form-group 1"><b>Password</b>
	  <input placeholder="password" type="password" name="password" required="Password" class="md-input p-l-1"> 
	  <label></label></div> <div class="m-b-md"><label class="md-check">
	  <input type="checkbox" id="show_password" value="1"><i class="primary"></i> Tampilkan Password
          </label></div> <button type="submit" class="btn btn-success p-l-md p-r-md btn-block p-x-md">LOGIN</button> 
		  <input type="hidden" name="submit" value=""></form></div></div> 
		  <div class="p-a text-xs clearfix"><div class="text-right text-muted copyright w3-bottom" style="right">
        
      <strong>Copyright © 2019 <strong>CandyCBT2.4-NanoV4</strong></div></div></div></div></div></div>

      <script src="SISWA/packages.js" type="text/javascript"></script>
<script src='<?php echo $homeurl; ?>/plugins/sweetalert2/dist/sweetalert2.min.js'></script>
<script>
				$(document).ready(function() {
					$('#formlogin').submit(function(e) {
						var homeurl;
						homeurl = '<?php echo $homeurl; ?>';
						 e.preventDefault();
							$.ajax({
								type: 'POST',
								url: $(this).attr('action'),
								data: $(this).serialize(),
								success: function(data) {
									if(data=="ok"){
										console.log('sukses');
										window.location = homeurl;
									}
									if(data=="nopass"){
										swal({
										  position: 'top-end',
										  type: 'warning',
										  title: 'ketik dengan benar',
										  showConfirmButton: false,
										  timer: 1500
										});
									}
									if(data=="td"){
										swal({
										  position: 'top-end',
										  type: 'warning',
										  title: 'Siswa tidak terdaftar',
										  showConfirmButton: false,
										  timer: 1500
										});
									}
									if(data=="nologin"){
										swal({
										  position: 'top-end',
										  type: 'warning',
										  title: 'Siswa sudah aktif',
										  showConfirmButton: false,
										  timer: 1500
										});
									}
									
								}
							})
							return false;
					 });
					 
				});
				
				function showpass() {
					  var x = document.getElementById("pass");
					  if (x.type === "password") {
						x.type = "text";
					  } else {
						x.type = "password";
					  }
					}
</script>
  <script>
    $(document).ready(function(){
      if($('input[name=username]').val().trim()=='') $('input[name=username]').focus();
      else $('input[name=password]').focus();

      $("#show_password").change(function(event) {
        if($(this).is(':checked')){
          $("input[name=password]").prop('type', "text");
        }else{
          $("input[name=password]").prop('type', "password");
        }
      });
    });
  </script>
<script src="SISWA/app.js" type="text/javascript"></script>
<script type="text/javascript">
		<!--
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }

		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		//-->
		</script>


</body></html>