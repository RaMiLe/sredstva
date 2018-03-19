<?php
if(isset($_POST["go"])):
	$e1=null;
	$uname=trim($_POST["uname"]);
	$uname=strip_tags($uname); // вырезаем теги
        //конвертируем специальные символы в мнемоники HTML
	$uname=htmlspecialchars($uname,ENT_QUOTES);
        /* на некоторых серверах
         * автоматически добавляются
         * обратные слеши к кавычкам, вырезаем их */
	$uname=stripslashes($uname);
	if(strlen($uname)=="0"):
		$e1.="Заполните поле 'Ваше имя'<br>";
	endif;
	
	$e2=null;
	$utext=trim($_POST["utext"]);
	$utext=strip_tags($utext);
	$utext=htmlspecialchars($utext,ENT_QUOTES);
	$utext=stripslashes($utext);
	if(strlen($utext)=="0"):
		$e2.="Заполните поле 'Текст Сообщения'<br>";
	endif;
	
	$e3=null;
	$umail=trim($_POST["umail"]);
	$umail=strip_tags($umail);
	$umail=htmlspecialchars($umail,ENT_QUOTES);
	$umail=stripslashes($umail);
	if(!filter_var($umail, FILTER_VALIDATE_EMAIL)):
		$e3.="Неверное значение<br>";
	endif;
	
	$e4=null;
	$uphone=trim($_POST["uphone"]);
	$uphone=strip_tags($uphone);
	$uphone=htmlspecialchars($uphone,ENT_QUOTES);
	$uphone=stripslashes($uphone);
	if(strlen($uphone)=="0"):
		$e4.="Заполните поле 'Контактный телефон'<br>";
	elseif((strlen($uphone)>0) && (!preg_match("/^[0-9-]+$/",$uphone))):
		$e4.="Неверный формат<br>";
	endif;
	
	// получаем данные из select
	$select=trim($_POST["select"]);
	$select=strip_tags($select);
	$select=htmlspecialchars($select,ENT_QUOTES);
	$select=stripslashes($select);
	
	if(!empty($_POST["box1"])){$box1=trim($_POST["box1"]);}
	if(!empty($_POST["box2"])){$box2=trim($_POST["box2"]);}
	if(!empty($_POST["box3"])){$box3=trim($_POST["box3"]);}
	
	if(!empty($_POST["radio"])){$radio=trim($_POST["radio"]);}
	
	$e5=null;
	$umath=trim($_POST["umath"]);
	$umath=strip_tags($umath);
	$umath=htmlspecialchars($umath,ENT_QUOTES);
	$umath=stripslashes($umath);
	if($umath!="48"):
		$e5.="Неверный результат<br>";
	endif;
	
	$eEn=$e1.$e2.$e3.$e4.$e5;
	
	if($eEn==null):
		$dt=date("d.m.Y, H:i:s"); // дата и время 
		$mail="my@email.ru"; // e-mail куда уйдет письмо
		$title="Форма проверки введенных данных"; // заголовок(тема) письма
		//конвертируем 
		$title=iconv("utf-8","windows-1251",$title);
		$title=convert_cyr_string($title, "w", "k");
		
                $utext=str_replace("\r\n","<br>",$utext); // обрабатываем
    
		$mess="<html><head></head><body><b>Имя:</b> $uname<br>";
		$mess.="<b>Сообщение:</b> $utext<br>";
		// ссылка на e-mail
		$mess.="<b>E-Mail:</b> <a href='mailto:$umail'>$umail</a><br>"; 
		$mess.="<b>Телефон:</b> $uphone<br>";
		$mess.="<b>Дата и Время:</b> $dt</body></html>";
		//конвертируем 
		$mess=iconv("utf-8","windows-1251",$mess);
		$mess=convert_cyr_string($mess, "w", "k");
		
		$headers="MIME-Version: 1.0\r\n";
		$headers.="Content-Type: text/html; charset=koi8-r\r\n";
		$headers.="From: $umail\r\n"; // откуда письмо
		mail($mail, $title, $mess, $headers); // отправляем

		// выводим уведомление об успехе операции и перезагружаем страничку
		print "<script language='Javascript' type='text/javascript'>
		<!--
		alert ('Ваше сообщение отправлено! Спасибо!');
		function reload(){location = 'index.php'}; 
		setTimeout('reload()', 0);
		-->
		</script>";
	endif;
endif;
?>
<form action="index.php" method="post">
Ваше Имя:<br>
<input type="text" name="uname" value="<?=@$uname;?>" class="vvod">
<br>
<span class="error"><?=@$e1;?></span>
<br>

Текст Сообщения:<br>
<textarea name="utext" rows="10" class="vvod_textarea"><?=@$utext;?></textarea>
<br>
<span class="error"><?=@$e2;?></span>
<br>

Ваш E-Mail:<br>
<input type="text" name="umail" value="<?=@$umail;?>" class="vvod">
<br>
<span class="error"><?=@$e3;?></span>
<br>

Контактный телефон (например XXX-XX-XX):<br>
<input type="text" name="uphone" value="<?=@$uphone;?>" class="vvod">
<br>
<span class="error"><?=@$e4;?></span>
<br>

Выбор:<br> 
<select name="select" class="vvod">
<option value="1" <?php @$select=="1" ? print "selected" : false;?>>1</option>
<option value="2" <?php @$select=="2" ? print "selected" : false;?>>2</option>
<option value="3" <?php @$select=="3" ? print "selected" : false;?>>3</option>
</select>
<br><br>

Checkbox:<br>
<input type="checkbox" value="1" name="box1" <?php @$box1=="1" ? print "checked" : false;?>>1<br>
<input type="checkbox" value="2" name="box2" <?php @$box2=="2" ? print "checked" : false;?>>2<br>
<input type="checkbox" value="3" name="box3" <?php @$box3=="3" ? print "checked" : false;?>>3<br>
<br>

Radio:<br>
<input type="radio" name="radio" value='1' <?php @$radio=="1" ? print "checked" : false;?>>1<br>
<input type="radio" name="radio" value='2' <?php @$radio=="2" ? print "checked" : false;?>>2<br>
<input type="radio" name="radio" value='3' <?php if(@$radio=="3"){print "checked";} if(empty($_POST["radio"])){print "checked";}?>>3<br>
<br>

Введите результат 24*2=?:<br>
<input type="text" name="umath" value="<?=@$umath;?>" class="vvod">
<br>
<span class="error"><?=@$e5;?></span>
<input type="hidden" name="go" value="5"><br>
<button type="submit">Отправить</button>
</form>
