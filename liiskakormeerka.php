<?php 

include_once 'connection.php';
session_start();



include 'header.php'; 










?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Liiska
        <small>Foomka Kormeerka</small>
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
                      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">


             <div class="col-md-3">
              <table id="liis" class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>M.Shirkada</th>
                    <th>C.Meherada</th>
                    <th>M.Xidhiidhayo</th>
                    <th>N.Ganacsiga</th>
                    <th>N.Ruqsada</th>
                    <th>M.Guud</th>
                    <th>A.sumada</th>
                    <th>Dawada</th>
                    <th>Q.Qiyaasta</th>
                    <th>X.Dawada</th>
                    <th>DELETE</th>
                    <th>UPDATE</th>
                    <th>PRINT</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $select = $pdo->prepare("SELECT * FROM `kormeerka`");

                $select->execute();
                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                 echo '
                 <tr>
                     <td>'.$row->ID.'</td>
                     <td>'.$row->mshirkada.'</td>
                     <td>'.$row->cmeherada.'</td>
                     <td>'.$row->mxidhiidhka.'</td>
                     <td>'.$row->nganacsiga.'</td>
                     <td>'.$row->nruqsada.'</td>
                     <td>'.$row->Asumada.'</td>
                     <td>'.$row->dawada.'</td>
                     <td>'.$row->Qqiyaasta.'</td>
                     <td>'.$row->xdawada.'</td>
                     <td>'.$row->xdawada.'</td>

                     <td><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-edit"  ></span>   </a></td>
                     <td><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-print"  ></span>   </a></td>
                     <td><a href="deletekormeer.php?id='.$row->ID.'" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"  ></span>   </a></td>
                 </tr>
                 ';
                }

                 ?>
                  
                </tbody>
              </table>
             </div>
             
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
               
              </div>
            </form>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
  $(document).ready( function () {
    $('#liis').DataTable();
} );
</script>


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