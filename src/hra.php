<?php
session_start();
require('_info.php');
$textid = $_GET['id'];
$answer = isset($_POST['answer'])? $_POST['answer'] : '';
if($textid > count($Utek)-1){
    header('Location: konec.php');
    exit;
}
if($_SESSION['points'] > 2){
    header('Location: konec.php');
   
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/stylehra.css">
    <title></title>
</head>
<body>

    <header>
        <H1>Kapitola <?=$Utek[$textid]['kapitola']?></H1>
    </header>
    <main>
        <section class="left">
        
        </section>
        <section class=mid>
            <h1>Příběh</h1>
            <h4>
            <?= $Utek[$textid]['lore']
            ?>
            </h4>
        
        </section>
        <section class="right">
        <h3></h3>           
        <form action="hra.php?id=<?=$textid?>" method="post">
                <label>
                    <input class="inputedit" required type="text" placeholder="Zde zadejte slovo" name="answer" autocomplete="off">
                    <button type="submit">Potrvdit</button>
                </label>
            </form>


            <?php


            if(strtolower($answer) == strtolower($Utek[$textid]['answer'])){
                ?><h3 style="text-align:center; color:#1aff1a   ">Super práce! Můžete na další kapitolu</h3>
                <a class="answerbutton" href="hra.php?id=<?=$textid+1?>">Další kapitola!</a>
                
                <?php
            }else if($answer != ''){
                $_SESSION['points'] += 1;
                ?>

                    <div><h2 style="color: red; text-align: center">Toto není správná odpověď!</h2></div>
                <?php
            }?>
        </section>
    </main>

</body>
</html>