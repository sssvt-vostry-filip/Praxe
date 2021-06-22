<?php 

require ('_connect.php');
$sql = 'INSERT into stats(name, email, points) values("Roman", "kakabus@cau.cz", 20)';
if($con -> query($sql)=== true ){

    echo 'povedlo se kamo';
}else {
    echo 'nefunguje';
}
