<?php include("session.php");?>
<div id="body">
  <?php
  include("database.php");

  $db = $_SESSION['db'];
  $db->openConnection();
  $result = $db->getItems();
  $db->closeConnection();

  $result = getItems();
  $last = count($result) -1;
  print $result;

  /*foreach ($result as $row) {
    <div>
      echo"<h2> Item: </h2>";
      echo $row['itemName'];
      echo"<h3> Description: </h3>";
      echo $row['description'];
      echo"<h2> Price: </h2>";
      echo $row[price];
    </div>
  }*/

  ?>
</div>
