<?php include("session.php");?>
  <?php
  $db = $_SESSION['db'];
  $db->openConnection();
  $result = $db->getItems();
  $db->closeConnection();

  $countdown = count($result);
  $k=0;
  foreach ($result as $row) {
    ?>
    <div id="items">
    <?php
    echo $row['itemName'];
    echo "<br></br>";
    echo $row['description'];
    echo "<br></br>";
    echo $row['price'];
    echo " :- inkl moms";
    echo "<br></br>";
    ?>
    <button onclick="myFunction()">Buy!</button>
    <?php
    ?>
  </div>
  <?php
  }
  ?>
