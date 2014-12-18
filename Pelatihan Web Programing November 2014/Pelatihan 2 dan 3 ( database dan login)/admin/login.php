<?php 
session_start();
include "../config/koneksi.php";
if(!empty($_SESSION['username'])){
  header("location:index.php");
}else{
?>
<!doctype html>

<html lang="en"><head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/premium.css">
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
        .panel-body .label{
            display:block;
            background: orange;
        }
        .panel-body label.error {
        }
        .panel-body label.valid {
        }
    </style>

    <script src="assets/lib/jquery-2.1.1.min.js" type="text/javascript"></script>    
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
    <script src="assets/lib/validasi/jquery.validate.js" type="text/javascript"></script>    
    <script type="text/javascript">
        $(document).ready(function() {
        $("#formLogin").validate({
            rules:{ username:"required",
                    password:{required: true,maxlength:10}
                  },
            messages:{ 
                    username: {
                        required:'Username harus di isi',
                        minlength:'<span class="glyphicon glyphicon-remove"></span> Username minimal 5 karakter',
                        maxlength:'Username maximal 10 karakter'},
                    password: {
                        required :'Password harus di isi',
                        minlength:'Password minimal 6 karakter',
                        maxlength:'Password maximal 10 karakter'},
                    },
             success: function(label) {
                label.html("<i class='glyphicon glyphicon-ok'></i>").addClass('valid');}
            });
        });
    </script>

</head>
<body class=" theme-blue">
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <a class="" href=""><span class="navbar-brand"><span class="fa fa-leaf"></span> Nama Perusahaan</span></a></div>
            <div class="navbar-collapse collapse" style="height: 1px;">
            </div>
        </div>
    </div>
    
    <div class="dialog">
        <div class="panel panel-default">
            <p class="panel-heading no-collapse">Log In</p>
            <div class="panel-body">
                <form autocomplete="off" method="post" action="ceklogin.php" id="formLogin">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control span12 required" autofocus minlength="5" maxlength="10">
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                        <input type="password" name="password" class="form-control span12 form-control required" minlength="4">
                    </div>
                    <div class="pull-right">                        
                        <a href="../" class="btn btn-default">Cancel</a>
                        <input type="submit" name="login" value="Log In" class="btn btn-primary">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p class="pull-right" style="font-size: .75em; margin-top: .25em;">Design By <a href="http://febryfairuz.hol.es" target="_blank">Febry Fairuz Foundation</a></p>
        <p style="font-size: .75em; margin-top: .25em;">© 2014</p>
    </div>

</body>
</html>
<?php } ?>