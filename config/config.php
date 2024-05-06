<?php
$PastaInterna="mvc/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}"); 
}else{
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/$PastaInterna");
}

#Diretorios Especifico
define('DIRIMG',DIRPAGE."public/admin/img");
define('DIRCSS',DIRPAGE."public/admin/css");
define('DIRJS',DIRPAGE."public/admin/js");

#Acesso ao banco de dados
define('HOST','localhost');
define('DB','ipvx');
define('USER','root');
define('PASS','');   