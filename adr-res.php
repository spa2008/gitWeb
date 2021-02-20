<?php
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
//Установка кодировки на странице
mysql_query("SET NAMES 'utf8';");
mysql_query("SET CHARACTER SET 'utf8';");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci';");


if (!$db_server) die("Невозможно подключиться к MySQL: " . mysql_error());
mysql_select_db($db_database, $db_server)
or die("Невозможно выбрать базу данных: " . mysql_error());

echo <<<_END
<html><head><title>Перечень адресов ресурсов</title>
</head><body><pre>
<table style="margin: auto"><tr><td>
<h1>IT справочник. Адреса ресурсов</h1>
<a href="http://192.168.58.5/">Назад</a><br/><br/>
</body></pre>
_END;

echo <<<_END
<table border="1" cellspacing="1" сellpadding="1">
 <tr>
	<th>Наименование</th>
	<th>Адрес</th>
	<th>Примечание</th>
 </tr>
 
 <tr>
	<td><h1>Почта</h1></td>
	<td><a href="https://mail.mmk.ru/" target="_blank">https://mail.mmk.ru</a></td>
	<td>Для входа в почту используется логин в домене HQ: <br/>hq\<i><b>ваш_почтовый_логин</b></i></td>
 </tr>

 <tr>
        <td><h1>Управление личным паролем учетной записи в домене HQ</h1></td>
        <td><a href="https://password.mmk.ru/pwm1/private/login" target="_blank">https://password.mmk.ru/pwm1/private/login</a></td>
        <td></b></i></td>
 </tr>

 <tr>
	<td><h1>1C</h1></td>
	<td>Srvr="161.8.230.147";Ref="UT"</td>
	<td>Управление Торговлей ТД ММК (Хостинг)</td>
 </tr>

 <tr>
        <td><h1>КОРП</h1></td>
        <td>Srvr="161.8.230.147";Ref="corp"</td>
        <td>КОРП (Хостинг)</td>
 </tr>

 
 <tr>
	<td><h1>Ридмайн</h1></td>
	<td><a href="https://itpm.roll.mmk.chel.su/" target="_blank">https://itpm.roll.mmk.chel.su</a></td>
	<td><i>При появлении сообщения <b>"Подключение не защищено"</b><br/>
		нажмите кнопку <b>"Дополнительные"</b> <br/>и в появившемся сообщении внизу нажмите 
		<b>"Перейти на сайт itpm.roll.mmk.chel.su (небезопасно)"</b>.</i><br/>
		Учетные данные для входа в Ридмайн такие же как для входа в почту, <b>но</b> без <b>hq</b>, 
		т.е. в таком виде: <br/><i><b>ваш_почтовый_логин</b></i>
		<pre><a href="http://192.168.58.5/adr-res-ridmain.php/" target="_blank">Подробней</a></pre>
	</td>
 </tr>
 
 <tr>
	<td><h1>Галактика</h1></td>
	<td><a href="http://galaktika.hq.corp.mmk.chel.su/" target="_blank">http://galaktika.hq.corp.mmk.chel.su</a></td>
	<td>Учетные данные для входа в Галактику такие же как для входа в почту, т.е.:<br/> hq\<i><b>ваш_почтовый_логин</b></i></td>
 </tr>
 
 <tr>
	<td><h1>Портал ММК</h1></td>
	<td><a href="https://mmk-portal.mmk.ru/" target="_blank">https://mmk-portal.mmk.ru</a></td>
	<td></td>
 </tr>

 <tr>
        <td><h1>Сервисные центры Oldi</h1></td>
        <td><a href="https://www.oldicomputers.ru/servises/servisnye-tsentry/" target="_blank">https://www.oldicomputers.ru/servises/servisnye-tsentry</a></td>
        <td></td>
 </tr>

 <tr>
        <td><h1>ЭДО Информикс</h1></td>
        <td><a href="https://informix.mmk.ru/" target="_blank">https://informix.mmk.ru</a></td>
        <td>Система электронного документооборота. Учетные данные для входа в ЭДО такие же как для входа в почту, но без "HQ\" т.е.:<br/> <i><b>ваш_почтовый_логин</b></i></td>
 </tr>


</table>


<pre><a href="mailto:smyslov.pa@tdmmk.ru">Сообщите об ошибке</a></pre>
</table></tr></td>
_END;

mysql_close($db_server);

?>

