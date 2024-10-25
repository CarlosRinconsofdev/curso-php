<?php
  $name = "Carlos";
  $isDev = true;
  $age =18;
  $newAge = $age . '1';
  $isOld = $age > 40;


  define('LOGO_URL','https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-png-transparent.png');


$output =  "Hola  $name, con una edad de $age . :D";
$outputAge = match(true){
  $age < 2 => "Eres un bebé, $name",
  $age < 10 => "Eres un niño, $name",
  $age == 18 => "Eres un adolescente, $name",
  $age <40 => "Eres un adulto joven, $name",
  $age <60 => "Eres un adulto viejo, $name",
  default => "Hueles mas a madera que a fruta, $name",

};

$bestLanguages =  ["PHP","JavaScript", "Python"];
$bestLanguages[] = "Java";
$bestLanguages[] = "TypeScript";

$person = [
  "name" => "Carlos",
  "age" => 36,
  "isDev" => true,
  "languages" => ["PHP", "javaScript", "Python"],
];
$person["name"] = "pheralb";
$person["languages"][]="Java";
  
?>

<ul>
  <?php foreach ($bestLanguages as $key => $language): ?>
    <li><?= $key . " " . $language ?></li>
  <?php endforeach; ?>
</ul>

<h3>
  El mejor lenguaje es <?= $bestLanguages[0] ?>
</h3>

<h2><?= $outputAge ?></h2>



<img src="<?= LOGO_URL ?>" alt="PHP logo" width="200">
<h1>
  <?= $output ?>
</h1>

<style>
  :root {
    color-scheme: light dark;
}

body {
    display: grid;
    place-content: center;
}
</style>