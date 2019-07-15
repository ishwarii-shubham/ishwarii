<?php
include('assets/product_class.php');

if($_REQUEST['id']){
  $id = $_REQUEST['id'];
}
else{
  $id = 4;
}
// CHECKING IF PRODUCT EXISTS
$pr = get_product_details($id);
if(empty($pr['price_list'])){
  header('location: ./products.php');
}else{
  header('location: ./single.php?id='.$id);
}
?>
