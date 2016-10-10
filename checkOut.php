<?php include("session.php");?>
<html>
<head>

</head>
<body>
  Your Items: <br><br>
<div class="checkout">
  <div class="items">
    <?php 
    $db = $_SESSION['db'];
    $db->openConnection();
    $array = $_SESSION['itemArray'];
    $items = $db->getUserItems($array);
    $db->closeConnection();

    foreach($items as $item)
    {

      $string = "ItemName: ";
      $string .= $item['itemName'];
      $string .= "    Price: ";
      $string .= $item['price'];
      echo $string;
      ?><br><br><?php
    }
    
    ?>
  </div>
  <div class="forms">
    <h3>Compleate putches</h3>
    <form>
      Card number: <input type="text" name="CardNbr">
      Card Holder:  <input type="text" name="CardHolder"><br>
      year:  <input type="number" name="year">
      Month: <input type="number" name="Month"><br>
      CVC: <input type="number" name="CVC">
      <input type="button" onclick="---SomeThing----" value="Submit">
    </form>
  </div>
</div>
</body>

</html>
