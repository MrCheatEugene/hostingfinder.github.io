<?php

$host='string';
echo'<title>HostDetector - обнаружение хостинга майнкрафт сервера</title>';
echo "IP Сервера:",$_POST["name"]," ";

$mystring =$_POST["name"] ;
$findme   = 'aternos.me';
$pos = strpos($mystring, $findme);

//$fal=string;
// Заметьте, что используется ===.  Использование == не даст верного
// результата, так как 'a' находится в нулевой позиции.
if ($pos === false) {
    
    //print "Сервер с айпи '$findme' не хостится на Aternos.\n";
}else{
    $prr =  substr($mystring,0,-11);
    //echo$prr;
    echo"Имя сервера:",$prr,".";
    $host="Aternos";
}
  //  print "Сервер с айпи '$findme' хостится на Aternos. Оценка хостинга: 3/5, но на вкус и цвет все хостинги разные.

$findme   = 'mineserv.su';
$pos = strpos($mystring, $findme);

// Заметьте, что используется ===.  Использование == не даст верного
// результата, так как 'a' находится в нулевой позиции.
if ($pos === false) {
    
  //  print "Сервер с айпи '$findme' не хостится на BungeeHost";
} else {
    
    $host="BungeeHost";
 $prr =  substr($mystring,0,-12);
 //echo$prr;
    echo"Нода:",$prr,".";
 //   print "Сервер с айпи '$findme' хостится на BungeeHost. Оценка хостинга: 2/5. Жалко автора сервера..";
}
$findme   = 'superhub';
$pos = strpos($mystring, $findme);

// Заметьте, что используется ===.  Использование == не даст верного
// результата, так как 'a' находится в нулевой позиции.
if ($pos === false) {
    
   // print "Сервер с айпи '$findme' не хостится на SuperHub.  А жаль..";
} else {
    
    $host="SuperHub";
   // print "Сервер с айпи '$findme' хостится на SuperHub. Оценка хостинга: 5/5. Владелец сервера знает что делает! ";
}
$findme   = 'joinserver.ru';
$pos = strpos($mystring, $findme);

// Заметьте, что используется ===.  Использование == не даст верного
// результата, так как 'a' находится в нулевой позиции.
if ($pos === false) {
    
    // print "Сервер с айпи '$findme' не хостится на SuperHub.  А жаль..";
} else {
    
    $host="Hosting Minecraft";
    $prr =  substr($mystring,0,-14);
    //echo$prr;
    echo"Имя сервера:",$prr,".";
    // print "Сервер с айпи '$findme' хостится на SuperHub. Оценка хостинга: 5/5. Владелец сервера знает что делает! ";
}
$findme   = 'minecraft-hosting.ru';
$pos = strpos($mystring, $findme);

// Заметьте, что используется ===.  Использование == не даст верного
// результата, так как 'a' находится в нулевой позиции.
if ($pos === false) {
    
    // print "Сервер с айпи '$findme' не хостится на SuperHub.  А жаль..";
} else {
    
    $host="Minecraft Hosting";
    $prr =  substr($mystring,0,-21);
    //echo$prr;
    echo"Имя сервера:",$prr,".";
    // print "Сервер с айпи '$findme' хостится на SuperHub. Оценка хостинга: 5/5. Владелец сервера знает что делает! ";
}
if ($host==="SuperHub" or $host=="BungeeHost" or $host==="Aternos" or $host==="Hosting Minecraft" or $host==="Minecraft Hosting")
{
   echo"Хостинг сервера:",$host;
}
else
{
    Echo"Мы не нашли ничего по вашему IP. Проверьте что вы ввели домен а не цифренный айпи!";
}


?>
