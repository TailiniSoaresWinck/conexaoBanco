<?php
$mysqli= new mysqli ('127.0.0.1', 'root', 'c108');

$sql=$mysqli->query('SHOW DATABASES;');


while($ver=mysqli_fetch_assoc($sql)){
    $string = implode(",", $ver);
    echo '<div class="bancos">'.$string.'</br></div>';
}
   


