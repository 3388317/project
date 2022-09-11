<?php 

include_once 'connection.php';
session_start();

include_once 'header.php';

if (isset($_POST['btnlogin'])) {


$txtname = $_POST['txtname'];
$txtemail = $_POST['txtemail'];
$password = $_POST['txtpassword'];
$role = $_POST['role'];

/*echo $txtname.'--'.$txtemail.'--'.$password.'--'.$role; waa defualt value tijaabo ah*/

$select = $pdo->prepare("INSERT INTO `users` (`userename`, `usermail`, `password`, `role`) VALUES ('$txtname', '$txtemail', '$password', '$role');");
$M = $select->execute();

if ($M) {
echo"Success";
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
       Accounts
      <!--   <small>Optional description</small> -->
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
              <h3 class="box-title">Add New User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">



                <div class="col-md-4"> 
               <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="txtname" placeholder="Enter email">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" class="form-control" name="txtemail" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" name="txtpassword" placeholder="Password">
                </div>
               <div class="form-group">
                  <label>Role</label>
                  <select  name="role" class="form-control">
                    <option value="" disabled selected="">Select Role</option>
                    <option>Admin</option>
                    <option>User</option>
                  
                  </select>
                </div>
                 <button type="submit" name="btnlogin"  class="btn btn-info">Submit</button>
              </div>

             <div class="col-md-8">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>ROLE</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $select = $pdo->prepare("SELECT * FROM users");

                $select->execute();
                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                 echo '
                 <tr>
                     <td>'.$row->userid.'</td>
                     <td>'.$row->userename.'</td>
                     <td>'.$row->usermail.'</td>
                     <td>'.$row->password.'</td>
                     <td>'.$row->role.'</td>
                     <td><a href="deleteregistration.php?id='.$row->userid.'" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"  ></span>   </a></td>
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