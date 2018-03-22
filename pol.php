<?
$c=$_REQUEST['code'];
if(!$c) die('Не введен код!');
$a=0;
//коннект к бд
$chk=mysql_query("SELECT * FROM codes WHERE (code='".$c."')",$db);
if($fd=mysql_fetch_array($chk,MYSQL_NUM)){
  if( ($c==$fd[0]) && ($fd[1]>0) ) $a=$fd[1];
}
if(!$a) die('Неверный код!');
//тут зачисление средств
echo 'Зачислено '.$a.' единиц';
?>
