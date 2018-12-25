<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Order Details </title>
        <style>
			fieldset {
				width: 650px;
				height: 450px;
			}
			@media screen and (max-width: 650px) {
				fieldset {
				width: 93%;
				height: 100%;
				}
			}
		</style>
	</head>
	<body>
	<center>
	<fieldset>

		<h1>Your Information System</h1>
        <?php
			$Colour = $_GET['Color'];
			$FName = $_GET['FirstName'];
			$LName = $_GET['LastName'];
			$Add1 = $_GET['Adress1'];
			$Add2 = $_GET['Adress2'];
			$Add3 = $_GET['Adress3'];
			$Comments = $_GET['Comments'];
			if(isset($_GET['Size'])){
				$Size = $_GET['Size'];
			}else{
				$Size = "";
			}
			if(isset($_GET['Item_Cap'])){
				$ItemCap = "* ".$_GET['Item_Cap'];
			}else{
				$ItemCap = "";
			}
			if(isset($_GET['Item_WristBand'])){
				$ItemWristBand = "* ".$_GET['Item_WristBand'];
			}else{
				$ItemWristBand = "";
			}
			
			echo "<p>Thank you, $FName for your purches from our website</p>";
			echo "<p>Your item colour is : $Colour & T-Shirt size : $Size</p>";
			echo "<p>Selected items/item are :</p>";
			echo "<p>$ItemCap</p>";
			echo "<p>$ItemWristBand</p>";
			echo "<p>Your items will be sent to :</p>";
			echo "<p><i>$FName $LName,</br>$Add1,</br>$Add2,</br>$Add3</i></p>";
			echo "<p>Thank you for submitting your comments. We appreciate it. You said:</p>";
			echo "<p><i>$Comments</i></p>";
		?>
	</fieldset>
	</center>
    </body>
</html>