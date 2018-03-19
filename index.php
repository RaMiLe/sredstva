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
