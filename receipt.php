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
      $string = "ItemName: ";
      echo $string;
      ?><br><?php
    } 
	?>
	<form>
		<input type="button" formaction="index.php" value="Return">
	</form>
</body>

</html>
