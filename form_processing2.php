<?php
include_once("class_1.php");
require_once('class_item.php');

$OrderI = new Order();
	
$OrderI->Schet = htmlspecialchars($_POST["Schet"]);
$OrderI->Comment = htmlspecialchars($_POST["Comment"]);
$OrderI->FIO = check_input($_POST["FIO"], "Введите ваше имя!");
$OrderI->organization = check_input($_POST["Organization"], "Укажите организацию!");
$OrderI->BIK = check_input($_POST["BIK"], "Введите БИК!");
$OrderI->INN = check_input($_POST["INN"], "Введите ИНН!");

$counter=0;
$ProductName="Product";
$QuantityName="Quantity";
while (true){

if(isset($_POST["$ProductName"]))
{
$OrderI->items[]=new item();
$OrderI->items[$counter]->Product = htmlspecialchars($_POST["$ProductName"]);
$OrderI->items[$counter]->Quantity = htmlspecialchars($_POST["$QuantityName"]);
}
else break;
$counter=$counter+1;
$ProductName=$ProductName."1";
$QuantityName=$QuantityName."1";

}

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