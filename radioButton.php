<?php
    include("radioButton.php");
?>

<html>
<head>
<title>Radio Buttons</title>
</head>
<body>
<Form name ="form1" Method ="Post" ACTION ="radioButton.php">
<Input type = 'Radio' Name ='gender' value= 'male'>Male
<Input type = 'Radio' Name ='gender' value= 'female'>Female
<P>
<Input type = "Submit" Name = "Submit1" Value = "Select a Radio Button">
</FORM>

</body>
</html>

<?php
$male_status = 'unchecked';
$female_status = 'unchecked';

if (isset($_POST['Submit1'])) {
	$selected_radio = $_POST['gender'];
if ($selected_radio == 'male') {
	$male_status = 'checked';
}
else if ($selected_radio == 'female') {
	$female_status = 'checked';
}
}
?>