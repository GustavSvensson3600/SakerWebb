<ul>
  <?php
  $db = $_SESSION['db'];
  $db->openConnection();
  $result = $db->getItems();
  $db->closeConnection();


  $countdown = count($result);
  $k=0;

  foreach ($result as $row) {
    ?>
    <li><div id="items">
    <?php
    echo $row['itemName'];
    echo "<br></br>";
    echo $row['description'];
    echo "<br></br>";
    echo $row['price'];
    echo " :- inkl moms";
    echo "<br></br>";
    ?>
    <form style="display:inline-block; float:right" method="post" action="addItem.php">
    <input name="<?php $row['itemNumber']?>" type="submit" value="Buy!">
  </form>
    <?php
    ?>
  </div></li>
  <?php
  }
  ?>
</ul>
