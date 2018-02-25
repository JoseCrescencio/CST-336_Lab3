<?php
    include 'inc/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>SilverJack</title>
    </head>
    
    <body>
        <center>
            <h1>SilverJack</h1>
            <?php
                $deck = generateDeck();
                generateHand($deck);
                printGameState($allPlayers);
            ?>
        </center>
    </body>
</html>