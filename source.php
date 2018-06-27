<?php 
include "db_connect.php"; 

$query = "select * from images WHERE id = ?"; 
$stmt = $con->prepare( $query );
$stmt->bindParam(1, $_GET['id']);
$stmt->execute();
$num = $stmt->rowCount();
 
if( $num ){
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    header("Content-type: image/png");
    
    
    print $row['data'];
    exit;
}else{
    
}
?>
