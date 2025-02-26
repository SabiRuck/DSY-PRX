<?php

// $znamky = [1, 2, 3, 1, 5, 5, 1];
// $sucet = 0;
// $dlzka= count($znamky)-1;

// for ($i=0; $i < $dlzka; $i++) { 
//     $sucet = $sucet + $znamky[$i];
// }
// echo($sucet/$dlzka);

$spolu=[1, 3, 3, 5, 1];
$spolu2 = [];

$spolu2[] = $spolu[0];
$z = 1;
for ($i=0; $i < count($spolu); $i++) { 
    for ($j=0; $j < count($spolu2); $j++) { 
        if($spolu2[$j] == $spolu[$i] && $z != 0)
        {
            
        }
        else
        {
            $spolu2[] = $spolu[$i];
            $z++;
            echo("j - $spolu2[$j]  i - $spolu[$i]<br>");
        }
        echo ("<br>");
    }
    
    $z = 0;
}

print_r($spolu2);

$najvacsie = $spolu2[0];
$najmensie = $spolu2[0];

for ($i=0; $i < count($spolu)-1; $i++) { 
    if($najvacsie < $spolu[$i])
    {
        $najvacsie = $spolu[$i];
    }
    if($najmensie > $spolu[$i])
    {
        $najmensie = $spolu[$i];
    }
}

echo("najvacsie: $najvacsie  najmensie: $najmensie<br>");


for ($i=0; $i < count($spolu2)-1; $i++) { 
    if($najvacsie < $spolu2[$i])
    {
        $najvacsie = $spolu2[$i];
    }
    if($najmensie > $spolu2[$i])
    {
        $najmensie = $spolu2[$i];
    }
}

$a = $najmensie;
$b = $najvacsie;
echo("$a, ");

for ($i=0; $i < count($spolu2)-1; $i++) { 
    for ($j=0; $j < count($spolu2); $j++) {
    	if($spolu2[$j]>$a && $spolu2[$j]<$b)
    	{
    		$b = $spolu2[$j];
    	}
        
    }
    
    
            
    echo("$b, ");
    $a = $b;
    $b = $najvacsie;
}
?>