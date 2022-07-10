 <?php
$to = "lebusiness@mail.ru";  
$tema = "Данные нового клиента";  
$message = "Имя: ".$_POST['name']."<br>"; 
$message .= "E-mail: ".$_POST['email']."<br>";  
$message .= "Номер телефона: ".$_POST['number']."<br>";  
$message .= "Знакомы ли вы с интернет площадками: ".$_POST['answer1']."<br>";  
$message .= "Какой размер дохода был на прошлом или текущем месте работы: ".$_POST['answer2']."<br>";  
$message .= "Рассматриваете для себя торговлю на вб как постоянный заработок или как дополнительный доход: ".$_POST['answer3']."<br>";  

$headers  = 'MIME-Version: 1.0' . "\r\n";  
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";  
mail($to, $tema, $message, $headers);  
?>
if(isset($_POST["send"])) {
    $_SESSION["send"] = 'Сообщение отправлено!';
    exit('<meta http-equiv="refresh" content="0; url=index.html" />');
}