<?php 
	$client_id = 'ID_приложения';
	$scope = 'offline,messages';
?>


<a href="https://oauth.vk.com/authorize?client_id=<?=$client_id;?>&display=page&redirect_uri=https://oauth.vk.com/blank.html&scope=<?=$scope;?>&response_type=token&v=5.37">Получить токен</a>