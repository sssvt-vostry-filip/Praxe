
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Sass/styleutek.css">
    <title>Útek</title>
</head>
<body>
    <header>
        <H1>Kapitola první: Útěk</H1>
    </header>
    <main>
        <section class="left">

        </section>
        <section class=mid>
            <h1>Příběh</h1>
            <h4>Jste ve vězení jménem „Homins“. Jste v cele a vůbec nic si nepamatujete. Přijde najednou dozorčí a křičí „vstávej ty jedna líná kryso!“. Vy se leknete a zeptáte se ho proč jste tady.
                On vám poví „to nikdo neví na začátku, ale zachvíli to poznáš!“. Dotal jsi dopis, kde se píše „Promiň, ale tohle sis zasloužil, ale možná se ti to hodí „HDN + OIY“. Pavel“. Z ničeho nic spolubydlící na tebe jenom celou dobu kouká a asi nemá v plánu se s tebou bavit. Začíná večerka a ty by sis měl už jít lehnout. Ráno se probudíš a jdeš na snídani. Přijde za tebou jeden člověk, vypadá jako blázen a opakuje „ťiká to sakra, tikáto. Víš ?“
            </h4>
            <form action="utek.php" method="get">
                <label>
                    <input type="text" name="answer">
                    <button type="submit">Potrvdit</button>
                </label>
            </form>


            <?php


            if($_GET["answer"] == "HODINY"){
                ?> <button class="answerbutton" onclick="window.location.href='/pratele.php'">Další kapitola!</button>
                <?php
            }else{


                ?>
                    <div><h2 style="color: red">Toto není správná odpověď!</h2></div>
                <?php
            }?>
        </section>
        <section class="right">
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>