<html>
<head>
<title>Radio Buttons</title>
</head>

<?PHP
if (isset($_POST['Submit1'])) {

	$selected_radio = $_POST['gender'];
}

?>

<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="radioButton.php">

<INPUT TYPE = 'Radio' Name ='gender'  value= 'male'>Male

<INPUT TYPE = 'Radio' Name ='gender'  value= 'female'>Female
<P>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Select a Radio Button">
<?PHP echo $selected_radio ?>
</FORM>

</body>
</html>
