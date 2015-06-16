<?php
include('db.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "DELETE FROM personalinfo WHERE id='$id'";
 mysql_query( $sql);
}

?>