<?php
include_once("class_1.php");
require_once('class_item.php');

$OrderI = new Order();
	
$OrderI->Schet = htmlspecialchars($_POST["Schet"]);
if (!preg_match("/^[0-9]{20}$/", $OrderI->Schet))
{show_error("<br /> Неверный счет");}

$OrderI->Comment = htmlspecialchars($_POST["Comment"]);

$OrderI->FIO = check_input($_POST["FIO"], "Введите ваше имя!");
if (!preg_match("/^[а-яА-ЯёЁ]{,50}$/", $OrderI->FIO))
{show_error("<br /> ФИО может содержать только буквы русского алфавита");}

$OrderI->organization = check_input($_POST["Organization"], "Укажите организацию!");

$OrderI->BIK = check_input($_POST["BIK"], "Введите БИК!");
if (!preg_match("/^[0-9]{9}$/", $OrderI->BIK))
{show_error("<br /> Неверный БИК");}	

$OrderI->INN = check_input($_POST["INN"], "Введите ИНН!");
if (!is_valid_inn($OrderI->INN))
{show_error("<br /> Неверный ИНН");}


function is_valid_inn($inn) {
  if (preg_match('/\D/', $inn))
    return false;
 
  $inn = (string) $inn;
  $len = strlen($inn);
 
  if ($len === 10) {
    return $inn[9] === (string) (((
    2 * $inn[0] + 4 * $inn[1] + 10 * $inn[2] +
    3 * $inn[3] + 5 * $inn[4] + 9 * $inn[5] +
    4 * $inn[6] + 6 * $inn[7] + 8 * $inn[8]
    ) % 11) % 10);
  } elseif ($len === 12) {
    $num10 = (string) (((
            7 * $inn[0] + 2 * $inn[1] + 4 * $inn[2] +
            10 * $inn[3] + 3 * $inn[4] + 5 * $inn[5] +
            9 * $inn[6] + 4 * $inn[7] + 6 * $inn[8] +
            8 * $inn[9]
            ) % 11) % 10);
 
    $num11 = (string) (((
            3 * $inn[0] + 7 * $inn[1] + 2 * $inn[2] +
            4 * $inn[3] + 10 * $inn[4] + 3 * $inn[5] +
            5 * $inn[6] + 9 * $inn[7] + 4 * $inn[8] +
            6 * $inn[9] + 8 * $inn[10]
            ) % 11) % 10);
 
    return $inn[11] === $num11 && $inn[10] === $num10;
  }
 
  return false;
}


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
<p>Пожалуйста, исправьте следующую ошибку:</p>
<?php echo $myError; ?>
</body>
</html>
<?php
exit();
}
?>