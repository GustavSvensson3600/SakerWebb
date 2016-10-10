<?php include("session.php");?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
	echo "The following items will be sent to your adress"
	?><br><br><?php

	$db = $_SESSION['db'];
    $db->openConnection();
    $array = $_SESSION['itemArray'];
    $items = $db->getUserItems($array);
    $db->closeConnection();
    foreach($items as $item)
    {
      $string = $item['itemName'];
      echo $string;
      ?><br><?php
    } 
	?>
	<form action="receipt.php">
		<input type="submit" value="Return">
	</form>
</body>

</html>
