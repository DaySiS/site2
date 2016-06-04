<?

//echo "Modul CallBack - OK<hr>";

	$query = mysql_query("SELECT * FROM `mod_callback` WHERE `id` = 1");
	$modul_data = mysql_fetch_assoc($query);
	echo mysql_error();

			/*echo "<pre>";
			print_r($modul_data);
			echo "</pre>";
*/

			
			
			
echo "
<FORM id=form>
<h1>Обратная связь</h1>
<hr>
<br>
<input type=text placeholder='Ваше имя'>

<br>
<br>

<input type=text placeholder='Ваш e-mail'>

<br>
<br>

<textarea style=\"width:450px; height:150px;\" placeholder='Ваше сообщение'>
</textarea>













</FORM>
";
			
			
			
			
			
			
			
			
			
			
			
			
?>