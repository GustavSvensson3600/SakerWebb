<div id="body">
  <?php
  include("database.php");
  $result = getItems();
  $last = count($result) -1;
  foreach ($result as $row) {
    <div>
      echo"<h2> Item: </h2>";
      echo $row['itemName'];
      echo"<h3> Description: </h3>";
      echo $row['description'];
      echo"<h2> Price: </h2>";
      echo $row[price];
    </div>
  }

  ?>
</div>
