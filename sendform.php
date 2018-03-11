<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Отправление, пожалуйста подождите...</title>
	<meta http-equiv="refresh" content="3; url=/"> <!-- Редирект на главную страницу -->
</head>
<body>
	<div class="loader">
		<div class="center">
			<h1 style="text-align: center;">С Вами свяжутся в скором времени. Спасибо!</h1>
		</div>
	</div>
</body>
</html>

<?php
 	$name = $_POST['name']; // input name
 	$phone = $_POST['phone']; // input phone
 	$email = $_POST['email']; // input phone

	$message = "Новый заказ на сайте".PHP_EOL."Имя: ".$name.PHP_EOL."Телефон: ".$phone.PHP_EOL."Email: ".$email;

	send(ID_Беседы,$message); // id беседы с заказчиком

	function send($id , $message) {
    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
      'user_id' => $id,    // Кому отправляем
      'message' => $message,   // Что отправляем
      'access_token' => 'ТОКЕН',  
      'v' => '5.62',
    );

    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-type: application/x-www-form-urlencoded',
          'content' => http_build_query($params)
        )
    )));
	}
?>
