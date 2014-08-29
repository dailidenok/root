<?php
/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
$Schet = htmlspecialchars($_POST["Schet"]);
$Comment = htmlspecialchars($_POST["Comment"]);
$Product = htmlspecialchars($_POST["Product"]);
$Quantity = htmlspecialchars($_POST["Quantity"]);
/* Устанавливаем e-mail адресата */
$myemail = "atolkov@kgnic.ru";
/* Проверяем заполнены ли обязательные поля ввода, используя check_input 
функцию */
$your_name = check_input($_POST["FIO"], "Введите ваше имя!");
$organization = check_input($_POST["Organization"], "Укажите организацию!");
$BIK = check_input($_POST["BIK"], "Введите БИК!");
$INN = check_input($_POST["INN"], "Введите ИНН!");
/* Проверяем правильно ли записан e-mail 
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
}*/
/* Создаем новую переменную, присвоив ей значение */
$message_to_myemail = "Здравствуйте! 
Вашей контактной формой было отправлено сообщение! 
Имя отправителя: $your_name 
E-mail: $email 
Текст сообщения: $message 
Конец";
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $yourname <$email> \r\n Reply-To: $email \r\n"; 
mail($myemail, $tema, $message_to_myemail, $from);
?>
<p>Ваше сообщение было успешно отправлено!</p>
<p>На <a href="index.php">Главную >>></a></p>
<?php
/* Если при заполнении формы были допущены ошибки сработает 
следующий код: */
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