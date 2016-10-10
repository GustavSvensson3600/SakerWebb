
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
    $number = strval($row['itemNumber']);
    echo $row['itemName'];
    echo "<br></br>";
    echo $row['description'];
    echo "<br></br>";
    echo $row['price'];
    echo " :- inkl moms";
    echo "<br></br>";
    ?>
    <form style="display:inline-block; float:right" method="post" action="addItem.php">
    <input name="item" id="<?php $row['itemNumber']?>" type="submit" value="Buy!">
    <input type="hidden" name="buy" value="<?php echo $number?>">
  </form>
    <?php
    ?>
  </div>
  <?php
  }
  ?>
