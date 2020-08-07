<?php
echo'<title>HostDetector - обнаружение хостинга майнкрафт сервера</title>';
echo"Напишите домен сервера ниже(без порта)";
echo'<form name="feedback" method="POST" action="res.php">
  <label>IP: <input type="text" name="name"></label>
    
  <input type="submit" name="send" value="Вычислить хостинг">
</form>';

?>