<?php
define('Host','127.0.0.1:3306');
define('DB','todo');
define('User','root');

define('CONFIG',[
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXPERTION,
    PDO::ATTR_DEFEULT_FETCH_MODE =>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARE => false,



]);
