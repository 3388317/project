<?php 
include 'connection.php';


$id = $_GET['id'];
$delete = $pdo->prepare("DELETE  FROM kormeerka WHERE ID=".$id);
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

header('location: liiskakormeerka.php')



 ?>