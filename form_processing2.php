<?php
include_once("class_1.php");

$OrderI = new Order();
	
$OrderI->Schet = htmlspecialchars($_POST["Schet"]);
$OrderI->Comment = htmlspecialchars($_POST["Comment"]);
$OrderI->Product = htmlspecialchars($_POST["Product"]);
$OrderI->Quantity = htmlspecialchars($_POST["Quantity"]);

$OrderI->FIO = check_input($_POST["FIO"], "Введите ваше имя!");
$OrderI->organization = check_input($_POST["Organization"], "Укажите организацию!");
$OrderI->BIK = check_input($_POST["BIK"], "Введите БИК!");
$OrderI->INN = check_input($_POST["INN"], "Введите ИНН!");

    $out=$OrderI->add(); 
	echo $out;
	
	
function check_input($data, $problem = "")
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>
<p>Пожалуйста исправьте следующую ошибку:</p>
<?php echo $myError; ?>
</body>
</html>
<?php
exit();
}
?>