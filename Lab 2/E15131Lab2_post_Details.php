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
			$Colour = $_POST['Color'];
			$FName = $_POST['FirstName'];
			$LName = $_POST['LastName'];
			$Add1 = $_POST['Adress1'];
			$Add2 = $_POST['Adress2'];
			$Add3 = $_POST['Adress3'];
			$Comments = $_POST['Comments'];
			if(isset($_POST['Size'])){
				$Size = $_POST['Size'];
			}else{
				$Size = "";
			}
			if(isset($_POST['Item_Cap'])){
				$ItemCap = "* ".$_POST['Item_Cap'];
			}else{
				$ItemCap = "";
			}
			if(isset($_POST['Item_WristBand'])){
				$ItemWristBand = "* ".$_POST['Item_WristBand'];
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