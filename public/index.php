<?php
require_once __DIR__."/../vendor/autoload.php";

use DecoratorPHP\Box;
use DecoratorPHP\Component;
use DecoratorPHP\RedBackground;

$component = new Component();
$component = new RedBackground($component);
$component = new Box($component);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <?= $component->toHTML() ?>
</body>
</html>