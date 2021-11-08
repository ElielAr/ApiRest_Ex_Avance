<?php
function conectar(){
    $host="bb5qhugqsxd6s6cdpq8o-mysql.services.clever-cloud.com";
    $user="uwlgicigirwdtk4t";
    $pass="bItFpC8WdhRGKPv3TxG4";

    $bd="bb5qhugqsxd6s6cdpq8o";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>