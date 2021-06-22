<?php 
session_start();
require('_info.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/stylekonec.css" rel="stylesheet">


    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <main>
        <section>
            <div><h1> Username:
                <?= $_SESSION['username']?> <br>
                    Wrong Answers:
             <?= ($_SESSION['points'])?>



                </h1>
            </div>
           <div>
               <div class="buttonback">
                   <a href="../index.php">Na hlavní stránku</a>
               </div>

           </div>
        </section>
    </main>
    <footer>

    </footer>



</body>
</html>