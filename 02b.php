<?php
$lines=file("input2.txt");
$sum=0;
foreach($lines as $line_num => $line){
        $red=0;
        $green=0;
        $blue=0;
        list($game,$data)=explode(":", $line);
        $ziehungen=explode(";",$data);
        foreach($ziehungen as $ziehung){
                $wuerfel=explode(",",$ziehung);
                foreach($wuerfel as $auswertung){
                        list($anzahl,$farbe)=explode(" ",trim($auswertung));
                        if($farbe=="red" and $anzahl>$red) $red=$anzahl;
                        if($farbe=="blue" and $anzahl>$blue) $blue=$anzahl;
                        if($farbe=="green" and $anzahl>$green) $green=$anzahl;
                }
        }
        list($str,$gamenr)=explode(" ",trim($game));
        $sum=$sum+$red*$blue*$green;
                print "$sum $gamenr $red $blue $green $line\n";
}
?>
