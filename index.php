<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>SilverJack</title>
    </head>
    
    <body><center>
        <h1>SilverJack</h1>
        <?php
            
            $player1 = array(
                'name' => 'Faith',
                'imgURL' => './img/user_pics/blue_jay.jpg',
                'hand' => array(),
                'points' => 0
                );
            $player2 = array(
                'name' => 'Gilbert',
                'imgURL' => './img/user_pics/mouse.jpg',
                'hand' => array(),
                'points' => 0
                );
            $player3 = array(
                'name' => 'Luis',
                'imgURL' => './img/user_pics/doggo.jpg',
                'hand' => array(),
                'points' => 0
                );
            $player4 = array(
                'name' => 'Pockets',
                'imgURL' => './img/user_pics/cat.jpeg',
                'hand' => array(),
                'points' => 0
                );
            
            $allPlayers = array(
                $player1,
                $player2,
                $player3,
                $player4
                );
            
            function printGameState($allPlayers) {
                foreach ($allPlayers as $player) {
                    echo "<img src='" . $player['imgURL'] . "' />";
                    echo $player['name'] . "<br>";
                }
            }
            
            printGameState($allPlayers);
        ?>
        
    </center></body>
</html>