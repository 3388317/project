<?php 
include 'connection.php';


$id = $_GET['id'];
$delete = $pdo->prepare("DELETE  FROM users WHERE userid=".$id);
if ($delete->execute()) {
echo '<script type="text/javascript">
jQuery(function validation(){
swal({
  title: "Success !",
  text: "Your are Deleted One User!",
  icon: "success",
  button: "Ok!",
});
})
</script>';
}

header('location: registration.php')



 ?>