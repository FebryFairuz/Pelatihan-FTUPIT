<?php 
session_start();
include "../config/koneksi.php";
error_reporting(0);
if(empty($_SESSION['username'])){
  header("location:login.php");
}else{
  if($_SESSION['id_level'] == 4){
    header("location:../");    
  }
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Title</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/styles.css">


    <script src="assets/lib/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>

    <script src="assets/lib/validasi/jquery.validate.js" type="text/javascript"></script>    
    <script src="assets/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>
    

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

</head>
<body class=" theme-blue">
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="sd"><span class="navbar-brand"><span class="fa fa-leaf"></span> Cikidaw</span></span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> 
                      <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li><a href="../" target="_balnk">Go To Website</a></li>  
                <li><a href="">My Account</a></li>  
                <li class="divider"></li>
                <li><a tabindex="-1" href="logout.php">Log Out</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    
  <!-- menu -->
    <div class="sidebar-nav">
      <ul>
        <li><a href="index.php" class="nav-header"><i class="fa fa-fw fa-home"></i> Home</a></li>

        <li><a href="#" data-target=".setting" class="nav-header collapsed" data-toggle="collapse">
            <i class="fa fa-fw fa-cogs"></i> Setting<i class="fa fa-collapse"></i></a></li>
        <li><ul class="nav nav-list collapse setting">
            <li class="level"><a href="?p=level"><span class="fa fa-caret-right"></span> Level</a></li>
            <li class="jenis"><a href="?p=jenis_produk"><span class="fa fa-caret-right"></span> Jenis Produk</a></li>
            </ul>
        </li>
        <li><a href="?p=users" class="nav-header"><i class="fa fa-fw fa-users"></i> Users</a></li>
        <li><a href="" class="nav-header"><i class="fa fa-fw fa-stethoscope"></i> menu</a></li>
        <!-- <li><a href="?p=coba" class="nav-header"><i class="fa fa-fw fa-eye"></i> coba</a></li>       -->
      </ul>
    </div>
  <!-- end menu -->
  
  <!-- page -->
  <div class="content">        
    
    <!-- content -->
    <?php 
        $pages_dir = 'pages';
        if(!empty($_GET['p'])){
          $pages = scandir($pages_dir, 0);
          unset($pages[0], $pages[1]);
          
          $p = $_GET['p'];
          if(in_array($p.'.php', $pages)){
            include($pages_dir.'/'.$p.'.php');
          } else {
            echo '<h1>Halaman tidak ditemukan! :(</h1>';
          }
        } else {
    ?>
          <div class="main-content">
            <center><p><img src="assets/images/logoo.png"></p>
            <h1>Welcome <?php echo $_SESSION['username']; ?> in Admin Panel</h1></center>
          </div>
    <?php      
        }
    ?>

    <!-- end content -->

    <footer>
        <hr>
        <p class="pull-right">Design By <a href="http://febryfairuz.hol.es" target="_blank">Febry Fairuz Foundation</a></p>
        <p>© 2014 ssss</p>
    </footer>
  </div>    
  <!-- end page -->


  <!-- modal -->
  <div class="modal small fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog panel-modal-big">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Form Data</h3>
            </div>
            <form action="" method="post" id="formData">
                <div class="modal-body panel-modal-scrol">
                    <!-- form -->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-danger" data-dismiss="modal">Simpan</button>
                </div>
            </form>
          </div>
        </div>
  </div>

  <!-- end modal -->
    <script type="text/javascript">
      //$(document).ready(function(){
        $(".table tbody tr").click(function(){
            $("tr").removeClass("pilih");
            $(this).addClass("pilih");
            console.log("aaa");
        });
      //});
    </script>
</body>
</html>
<?php } ?>