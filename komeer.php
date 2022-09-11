 <?php 

include_once 'connection.php';
session_start();

include_once 'header.php';

if (isset($_POST['btn'])) {

$mshirkada = $_POST['mshirkada'];
$cmeherada = $_POST['cmeherada'];
$mxidhiidh = $_POST['mxidhiidh'];
$nganacsi = $_POST['nganacsi'];
$nruqsada = $_POST['nruqsada'];
$mguud = $_POST['mguud'];
$Asumada = $_POST['Asumada'];
$dawada = $_POST['dawada'];
$Qqiyaasta = $_POST['Qqiyaasta'];
$Xdawada = $_POST['Xdawada'];

/*echo $mshirkada.'--'.$cmeherada.'--'.$mxidhiidh.'--'.$nganacsi.'--'.$nruqsada.'--'.
$mguud.'--'.$Asumada.'--'.$dawada.'--'.$Qqiyaasata.'--'.$Xdawada;*/

$sql = $pdo->prepare("INSERT INTO `kormeerka` (`mshirkada`, `cmeherada`, `mxidhiidhka`, `nganacsiga`, `nruqsada`, `Asumada`, `dawada`, `Qqiyaasta`, `xdawada`) VALUES ('$mshirkada', '$cmeherada', '$mxidhiidh', '$nganacsi', '$nruqsada', '$mguud', '$Asumada', '$Qqiyaasta', '$Xdawada');");
$select = $sql->execute();

if ($select) {
echo "saved";
}else{
  echo "Error";
}





}




?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Foomka Kormeerka
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
              <div class="box-body">
             <div class="col-md-6">
             <h4>XOGTA GUUD</h4>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Magaca Shirkada ama farmasiiga</label>
                  <input type="text" name="mshirkada" class="form-control" id="exampleInputEmail1" placeholder="Halkan ku qor Magaca Shirkada ama farmasiiga">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ciwaanka Meherada</label>
                  <input type="text" class="form-control" name="cmeherada" id="exampleInputEmail1" placeholder="Halkan ku qor Ciwaanka Meherada">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Meesha lagala soo xidhiidhayo</label>
                  <input type="text" name="mxidhiidh" class="form-control" id="exampleInputEmail1" placeholder="Halkan ku qor Meesha lagala soo xidhiidhayo">
                </div>
                <div class="form-group">
                  <label>Nooca aasaaska shirkada ama farmasiga</label>
                  <select name="nganacsi" class="form-control">
                    <option>Ganacsi</option>
                    <option>Soo dejin</option>
                    <option>Baahiye</option>
                    <option>Jumladle</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Rusqadu waa mid noocee ah</label>
                  <input type="text" name="nruqsada" class="form-control" id="exampleInputEmail1" placeholder="Halkan ku qor Nooca Rusqada">
                </div>
               
             </div>

             <!-- waa halka ay labada table ku kala qeybsamayaan -->
             <div class="col-md-6">
             <h4>Macluumad dhamaystiran oo ku saabsan dawooyinka</h4>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Magaca guud</label>
                  <input type="text" name="mguud" class="form-control" id="exampleInputEmail1" placeholder="Halkan ku qor Magaca guud ">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Sumada ama astaanta</label>
                  <input type="text
                  " class="form-control" name="Asumada" id="exampleInputEmail1" placeholder="Halkan ku qor hadii ay jirto wax sumad ahi ">
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Warqada isticmaalka dawada</label>
                  <input type="text" name="dawada" class="form-control" id="exampleInputEmail1" placeholder="Halkan ku qor Warqada isticmaalka dawada">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Qaabka Qiyaasta</label>
                  <input type="text" name="Qqiyaasta" class="form-control" id="exampleInputEmail1" placeholder="Halkan ku qor Qiyaasta dawada ">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Xagga dawada laga siinaayo neefka</label>
                  <input type="text" name="Xdawada" class="form-control" id="exampleInputEmail1" placeholder="Halkan ku qor Xagga dawada lagala siinaayo neefka ">
                </div>
                
             </div>

             <div class="col-md-12">
                <button  type="submit" name="btn" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
<?php include 'footer.php'; ?>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>