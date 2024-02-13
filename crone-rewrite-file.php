<?php
$srcfile='/home/m/mrdmproc/ooptom.ru/public_html/backup/include.php'; //резервный файл, который будет скопирован
$dstfile='/var/www/www-root/data/www/azbuka-skidok.ru/bitrix/modules/main/include.php'; //нужное местоположение куда записывать

unlink($dstfile); //удаление файла перед копированием
copy($srcfile, $dstfile); //копирование резервного файла, в нужное местоположение
?>