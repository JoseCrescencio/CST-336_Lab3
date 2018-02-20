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
                'name' => 'Evelin',
                'imgURL' => './img/user_pics/Evelin.jpg',
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
            
            function calcPoints($allPlayers){
                foreach ($allPlayers as $player) {
                    foreach ($hand as $num){
                        $player['points'] += floor($num/13);
                    }
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
                
                if($index > 0 && $index < 14) {
                    $cardSuit = "clubs";
                } else if($index > 13 && $index < 27) {
                    $cardSuit = "diamonds";
                } else if($index > 26 && $index < 41) {
                    $cardSuit = "hearts";
                } else if($index > 40 && $index < 53) {
                    $cardSuit = "spades";
                }
                
                $suitIndex = floor(($index%13) + 1);
                
                //echo "<img src='img/cards/$cardSuit/$suitIndex.png' >";
                return "<img src='img/cards/$cardSuit/$suitIndex.png' />";
            }
            
            
            function generateDeck() {
                $cards = array();
                for($i = 1; $i < 53; $i++) {
                    array_push($cards, getImgURLForCardIndex($i));
                }
                shuffle($cards);
                return $cards;
            }
             
            printGameState($allPlayers);

            $deck = generateDeck();
            
            
            //echo $deck;
        ?>
        