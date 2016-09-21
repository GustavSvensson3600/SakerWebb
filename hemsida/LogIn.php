<!DOCTYPE html>

<?php
    require_once('../php/database.php');
    //require_once('../php/connect_data.php');

    if(!isset($_SESSION['username'])) { // Make sure to use a good variable
      die(header('location: index.php'));
    }
    */
    $db = new Database();
    $items = $db->getItems();
    /*
    if($db->isConnected()){
      header("Location: noDatabase.html");
      exit();
    }

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>HjälpNollan.se</title>
		<link rel="stylesheet" href="Css.css">


		<div id="logo">
			<img src="fLogo.svg" alt="Ganska snygg logga" width=7%; height=8%;>
		</div>
<h1>ZeroHelp</h1>


	</head>

	<body>
		<?php
		echo "<h2>PHP is Fun!</h2>";
		echo "Hello world!<br>";
		echo "I'm about to learn PHP!<br>";
		echo "This ", "string ", "was ", "made ", "with multiple parameters.";
		?>
		<div id="wrapper">
			<main>
        <center><form>
  Username:<br>
  <input type="text" name="User"><br>
  Password:<br>
  <input type="password" name="Password"><br>
  <input type="submit" value="Submit">
</form></center>
				<div id="content">
					<div class="innertube">

					</div>
				</div>
			</main>

		</div>
	</body>
</html>
