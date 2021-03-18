<?php
require "CompteBancaire.php";
require "Titulaire.php";
$info = new Titulaire("Tablieh","Walid","1997-02-06","Strasbourg,67200");

$CompteBancaire1 = new CompteBancaire(" livret A ",3000.0,"$",$info);
$CompteBancaire2 = new CompteBancaire(" livret B ",700.0,"€",$info);
$CompteBancaire3 = new CompteBancaire(" livret C ",350.50,"$",$info);
$CompteBancaire4 = new CompteBancaire(" livret D ",1400.0,"€",$info);

echo $CompteBancaire1;
echo "_________________________________"."<br/>";

$CompteBancaire1->Crediter(100);
echo $CompteBancaire1;

echo "_________________________________"."<br/>";
$CompteBancaire1->effectuerUnVirement($CompteBancaire2,10000);
echo $CompteBancaire2;

echo "_________________________________"."<br/>";
echo $info->afficherBibliographie();

echo "_________________________________"."<br/>";