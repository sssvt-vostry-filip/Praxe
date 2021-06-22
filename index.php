<?php session_start();
if(isset($_POST['username'])){
    $_SESSION['username'] = $_POST['username']; 
    $_SESSION['points'] = 0;
    header('Location: /src/hra.php?id=0');
    exit;
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úniková hra</title>


</head>
<body>
    <header>
     
    </header>
    <main>
        <section class="Intro">
            <div class="Intro-Box">
                <h4><a>Výtejte na stránce s únikovou hrou! Jedna z mála her, která je v hodná pro všechny věkové kategorie!</a></h4>
            </div>
            <div class="Intro-Box1">
                <h4>Vyzkoušejte svoje myšlení a svou zvědavost a ponořte se do této unikové hry! V této hře si vás otestujeme jestli na to máte!</h4>
            </div>
        </section>
        <section  class="Main">
                <div class="logoflex">
                    <div class="corners">
                        <div class="top left"></div>
                        <div class="top right"></div>
                        <div class="bottom right"></div>
                        <div class="bottom left"></div>
                        <h1>
                            Úniková Hra
                        </h1>
                    </div>
                    <div class="buttonflex">
                        <form action="" method="post" >

                            <input autocomplete="off" class="inputedit" required type="text" name="username" placeholder="Jméno">
                         <!--<input autocomplete="off" class="inputedit" type="email" name="email" placeholder="Email"><br>-->
                            <button class="buttonedit" type="submit"><a>
                                    Hrát!</a></button>

                        </form>
                    </div>
                </div>

        </section>
        <section  class="Play">
                <div class="gamerules">
                    <h2>Pravidla</h2>
                    <h4>Máte pouze 2 šance na to, uhádnout správnou odpověd!</h4>
                    <h4>Čas je neomezený</h4>
                    <h4>Hodně štěstí!</h4>
                </div>
                <div>

                </div>


        </section>
    </main>


<footer>
    <div>

    </div>
</footer>
</body>
</html>