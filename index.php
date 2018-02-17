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
                'imgURL' => './img/user_pics/Faith.jpg',
                'hand' => array(),
                'points' => 0
                );
            $player2 = array(
                'name' => 'Eros',
                'imgURL' => './img/user_pics/Eros.JPG',
                'hand' => array(),
                'points' => 0
                );
            $player3 = array(
                'name' => 'JoseC',
                'imgURL' => './img/user_pics/corgo.jpg',
                'hand' => array(),
                'points' => 0
                );
            $player4 = array(
                'name' => 'Brandon',
                'imgURL' => './img/user_pics/Brandon.JPG',
                'hand' => array(),
                'points' => 0
                );
            
            $player5 = array(
                'name' => 'Maria',
                'imgURL' => './img/user_pics/Maria.JPG',
                'hand' => array(),
                'points' => 0
                );
            
            
            $allPlayers = array(
                $player1,
                $player2,
                $player3,
                $player4,
                $player5
                );
            
            function printGameState($allPlayers) {
                foreach ($allPlayers as $player) {
                    echo "<img width='200' src='" . $player['imgURL'] . "' />";
                    echo $player['name'] . "<br>";
                }
            }
            
            //pseudocode:
            //create an array of 52 cards
            //each card an associative array ==? suit, rank, imgURL, points
            //shuffle the array
            //pop off one card a time to generate the hand
            
            function getImgURLForCardIndex($index) {
                //get a number from 0 to 51
                //return an image url
                
                $suitIndex = floor($index/13);
                echo "suitIndex: $suitIndex";
                
                $randomValue1 = rand(1, 4);
                
                switch($randomValue1) {
                    case 1:
                        $cardSuit = "clubs";
                        break;
                    case 2:
                        $cardSuit = "diamonds";
                        break;
                    case 3:
                        $cardSuit = "hearts";
                        break;
                    case 4:
                        $cardSuit = "spades";
                        break;
                }
                
                return "<img src='img/cards/$cardSuit/$suitIndex' />"
            }
            
            function generateDeck() {
                for($i = 0; $i < 51; $i++) {
                    $card = array(
                        'imgURL' => getImgURLForCardIndex($i);
                        );
                }
            }
            
            printGameState($allPlayers);
            getImgURLForCardIndex(51);
        ?>
        
    </center></body>
</html>

