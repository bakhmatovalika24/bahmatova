<?php
$db_conn = pg_connect("host=127.0.0.1 dbname=bahmatova user=postgres password=password")
   or die("Ошибка подключения: " . pg_last_error());
?>
