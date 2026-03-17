<?php
require_once __DIR__."/../vendor/autoload.php";

use DecoratorPHP\Components\Button;
use DecoratorPHP\Components\Component;
use DecoratorPHP\Decorators\BackgroundColor;
use DecoratorPHP\Decorators\BorderRound;
use DecoratorPHP\Decorators\Box;
use DecoratorPHP\Decorators\ComponentStyle;
use DecoratorPHP\Decorators\Cursor;
use DecoratorPHP\Decorators\Hover;
use DecoratorPHP\Decorators\RedBackground;
use DecoratorPHP\Enums\Sizes;

$style = new RedBackground(new Component());
$style = new Box($style, 55);

$component = new Button("Bonjouuur");
$component = new Cursor($component);
$component = new BorderRound($component, Sizes::QUADRUPLE_EXTRA_LARGE);
$component = new BackgroundColor($component, "blue");
$component = new Box($component, 50);
$component = new Hover($component, $style);
$component = new ComponentStyle($component, ["duration-100"]);
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
    <div class="flex w-[100vw] h-[100vh]">
        <div class="w-1/5 h-full bg-red-100">

        </div>
        <div class="w-4/5 h-full bg-blue-100 grid p-2
        gap-2
        grid-cols-8
        grid-rows-6"
        >
            <div class="col-span-2 row-span-1 bg-green-100">

            </div>
            <div class="col-span-4 row-span-2 bg-green-100">

            </div>
            <div class="col-span-2 row-span-3 bg-green-100">

            </div>
            <div class="col-span-2 row-span-1 bg-green-100">

            </div>
            <div class="col-span-3 row-span-2 bg-green-100">

            </div>
            <div class="col-span-3 row-span-2 bg-green-100">

            </div>
            <div class="col-span-3 row-span-2 bg-green-100">

            </div>
            <div class="col-span-2 row-span-1 bg-green-100">

            </div>
        </div>
    </div>
</body>
</html>