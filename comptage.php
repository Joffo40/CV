<?php
$f=fopen('comptage.txt',r);
$n=fread($f,10);
fclose($f);
$n=string(int($n));
$f=fopen('compte.txt','w');
fwrite($f,$n);
fclose($f);
