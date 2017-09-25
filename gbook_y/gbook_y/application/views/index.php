<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Гостевая книга</h1>

<form method="post">

Ваше имя:<br />
<input type="text" name="name" /><br />

Сообщение:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" name ="submit" value="Добавить!" />

</form>

<?php echo "<p><strong>Всего записей : </strong>" . count($messagesList);?>

</body>
</html>
<?php

foreach ($messagesList as $user):
    $id = $user['id'];
    $name =  $user['name'];
    $msg = nl2br($user["msg"]);
    $dt = date ("d-m-Y H:i:s",$user["datetime"]*1);
    echo <<<LABEL
	<hr>
	
	$name $dt
            <pre>
		<br />$msg
	</pre>
LABEL;
endforeach; 
?>



