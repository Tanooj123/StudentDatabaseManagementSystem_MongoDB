<?php
require_once __DIR__ . '/vendor/autoload.php';
$con= new MongoDB\Client("mongodb://localhost:27017");
$db=$con->studentmanagment;
$tb1=$db->info;


$mat = $_GET['branch'];
$amt = $_GET['subject'];


$criteria = array("branch","subject"=>$amt);
$data_info=$tb1->find($criteria); 

while($row = $data_info){
    echo "<option>" .$row['subject']
}
?>
