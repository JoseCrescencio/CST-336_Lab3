<?php
    include 'inc/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>SilverJack</title>
          <link rel="stylesheet" href="css/styles.css">
    </head>
    
    <body>
      <div id="page-wrap">

            <h1>SilverJack</h1>
            <?php
                $deck = generateDeck();
                initializePlayers();
                generateHand($deck);
                calcPoints($allPlayers);
                
                printGameState($allPlayers);
            ?>
        </div>
    </body>
</html>