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
            
            
            function generateDeck() { //Shuffling deck, randomizing
                $cards = array();
                for($i = 1; $i < 53; $i++) {
                    array_push($cards, getImgURLForCardIndex($i));
                }
                shuffle($cards);
               // echo $cards;
              
                return $cards; 
            }
             printGameState($allPlayers);
            $deck = generateDeck();
            
    
            function generateHand($allPlayers,$deck) { //Generating players hand of 5 cards
            $deckMarker = 51; //Placeholder for deck
           
                foreach ($allPlayers as $player) {
                    
                    for($i = 0; $i < 5 ; $i++)
                    {
                        array_push($player['hand'],$deck[$deckMarker-$i]);
                    }
                    $deckMarker = $deckMarker - 5; //next hand
                    for($x = 0; $x < 5; $x++)
                    {
                         echo $player['hand'][$x];
                    }
                   
                    echo $player['name'] . "<br>";
                  
                }
                        
            }
            echo generateHand($allPlayers,$deck);
           
        ?>
        
    </center></body>
</html>