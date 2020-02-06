<?php 


    echo "Hoeveel landen ga je toevoegen? " .PHP_EOL;
    $vraag = readLine("");

    for ($i = 1; $i <= $vraag; $i ++) {
        echo "Welk land wil je toevoegen? " .PHP_EOL;
        $land = readLine("");

        echo "Wat is de hoofdstad van {$land} ? " .PHP_EOL;
        $hoofdstad = readLine("");
        $array[$land] = $hoofdstad;
    }
    if($vraag != is_numeric($vraag)) {
        echo "Voer een getal in ! ";
        exit;
    }
    echo "De volgende landen en steden zitten in de database" .PHP_EOL;
    foreach($array as $land2 => $hoofdstad2) {
        echo ($land2. ", " .$hoofdstad2) .PHP_EOL;
    }
  
    
?>