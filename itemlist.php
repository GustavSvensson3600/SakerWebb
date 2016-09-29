<?php include("session.php");?>
<div id="body">
  <?php
  $db = $_SESSION['db'];
  $db->openConnection();
  $result = $db->getItems();
  $db->closeConnection();

  $countdown = count($result);
  $k=0;
  foreach ($result as $row) {
    echo $row['itemName'];
    echo "<div></div>";
    echo $row['description'];
    echo "<div></div>";
    echo $row['price'];
    echo " :- inkl moms";
    echo "<div></div>";
  }

  ?>
</div>
