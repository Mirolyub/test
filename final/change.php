<?php

include 'func.php';


 var_dump($_POST);
 exit();

if (!empty($_POST)) {
    update($_POST);
} else {
    header('Location http://schooll.local/index.php');
    exit();
}


?>