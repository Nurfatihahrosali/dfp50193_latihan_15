<?php

/*
$nama = test_input($_POST['nama']);


echo "[$nama]";

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
*/

$kata = $_POST['kata'];
   echo 'maaf , kata laluan terlalu pendek';
if (strlen($kata) <6) {


}else if(....){
   #mesti ada huruf besar
   #mesti ada huruf kecil
   #mesti ada nombor
   #mesti ada simbol

} else {
    echo 'kata laluan diterima';
}