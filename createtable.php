<?

try {
    $conn = new PDO("sqlsrv:server = tcp:deneg.database.windows.net,1433; Database = asus", "den", "{Rosbank20");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

id INT NOT NULL AUTO_INCREMENT ,
login  VARCHAR( 20 ) NOT NULL ,
 password VARCHAR( 35 ) NOT NULL ,
 email VARCHAR( 50 ) NOT NULL ,
 reg_date VARCHAR( 32 ) NOT NULL ,
 name_user VARCHAR( 32 ) NOT NULL ,
 lastname VARCHAR( 32 ) NOT NULL ,
$conn->query($sql);
PRIMARY KEY ( id )
);
echo "<h3>Таблица создана.</h3>";
}
catch (PDOException $e) {
print("Ошибка подключения к SQL Server.");
die(print_r($e));
}
?>
