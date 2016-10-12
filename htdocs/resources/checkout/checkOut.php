<?php include("../session.php");?>
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
    $price = 0;
    foreach($items as $item)
    {
      $price = $price + $item['price'];
      $string = "ItemName: ";
      $string .= $item['itemName'];
      $string .= "    Price: ";
      $string .= $item['price'];
      echo $string;
      ?><br><?php
    }
    ?><br><?php
     echo "For a total price of ";
     echo $price;
    ?>
  </div>
  <div class="forms">
    <h3>Complete purchase</h3>
    <form method="post" action="receipt.php">
      Card number: <input type="text" name="CardNbr">
      Card Holder:  <input type="text" name="CardHolder"><br>
      year:  <input type="number" name="year">
      Month: <input type="number" name="Month"><br>
      CVC: <input type="number" name="CVC">
	  <input name="CSRFToken" type="hidden" value="<?php echo get_token(); ?>">
      <input type="submit" value="submit">
    </form>
  </div>
</div>
</body>

</html>
