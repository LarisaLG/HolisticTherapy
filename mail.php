<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>CONTACT US</title>
</head>


<body>
<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST 'email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
if (empty($name))
{
echo "Please print name!";
echo "<a href=URL страницы на которой находится форма>Вернуться к заполнению формы</a>";
exit;
}
if (empty($email))
{
echo "Please print e-mail!";
echo "<a href=URL страницы на которой находится форма>Вернуться к заполнению формы</a>";
exit;
}
if (empty($mess))
{
echo "Please write message!";
echo "<a href=URL страницы на которой находится форма>Вернуться к заполнению формы</a>";
exit;
}
$to = "Recipient Address</a>";
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "Сообщение с вашего сайта";
$message = "Sender name: $name \E-mail: $email \nMessage: $mess";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "Thank you for your message!";
echo "<a href=index.html>Click to return to the home page";
}
else
{
echo "Error. Message not send!";
}
?>
</body>
</html> 


