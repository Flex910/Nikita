<?php
require 'lab one.html';
$Segodna=$_POST['Segodna'];
    $proshlom=$_POST['proshlom'];
    $Tarif=$_POST['Tarif'];
    $a="/[0-9]/";
    if (preg_match($a,$Segodna)&&preg_match($a,$proshlom)&&preg_match($a,$Tarif))
    {


        $sum = ("$Segodna" - "$proshlom") * "$Tarif";
            echo "$sum";
            }


            else{
            echo "Ошибка";
                        }









?>
