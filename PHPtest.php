<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$connection = new mysqli('Gloves', '3.00', '1234567890', 'Canada');
if( !$connection->connect_errno ) {
$sql = "SELECT * FROM COVID_19";
if( $rs = $connection->query($sql) ){
while( $r = $rs->fetch_assoc() ) {
echo "<p>${r['item_descr']} : ${r['item_name']}</p>";
}
$rs->free();
}
$connection->close();
}
?>
</body>
</html>
