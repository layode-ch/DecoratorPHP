<?php
require_once __DIR__."/../vendor/autoload.php";

use DecoratorPHP\Components\Card;
use DecoratorPHP\Components\Button;
use DecoratorPHP\Components\CardForm;
use DecoratorPHP\Components\Component;
use DecoratorPHP\Components\ProductCard;
use DecoratorPHP\Decorators\AccentColor;
use DecoratorPHP\Decorators\Box;
use DecoratorPHP\Decorators\ComponentStyle;
use DecoratorPHP\Decorators\Cursor;
use DecoratorPHP\Decorators\Hover;
use DecoratorPHP\Decorators\RedBackground;
use DecoratorPHP\Enums\Sizes;
use DecoratorPHP\Enums\Theme;

Theme::$BASE_BORDER_RADIUS      = isset($_GET["base-border-radius"])    ? (int)$_GET["base-border-radius"] : 1;
Theme::$BASE_BORDER_SIZE        = isset($_GET["base-border-size"])      ? (int)$_GET["base-border-size"] : 1;

Theme::$INPUT_BORDER_RADIUS     = isset($_GET["input-border-radius"])   ? (int)$_GET["input-border-radius"] : 1;
Theme::$INPUT_BORDER_SIZE       = isset($_GET["input-border-size"])     ? (int)$_GET["input-border-size"] : 1;

Theme::$BASE_BACKGROUND_COLOR   = $_GET["base-bg"] ?? "neutral-200";
Theme::$ACCENT_BACKGROUND_COLOR = $_GET["accent-bg"] ?? "neutral-400";

/*
$component = new Cursor($component);
$component = new AccentColor($component);
$component = new Box($component, 10, 30);
*/

$card = new Card(3,1);
$card2 = new Card(4,1);

// $card->textContent = $component;
$card2->textContent = "Card Text";
$cardForm = new CardForm(2, 2);
$productCard = new ProductCard(2,3 );
$card2->textContent = '
<div class="flex flex-col justify-between max-w-sm w-full h-full p-6">
    <h1>Revenue</h1>
    <strong class="text-2xl">10.5 k chf</strong>
    <div class="flex mt-5">
        <svg class="m-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" />
        </svg>
        <p> 32% more than last month</p>
    </div>
</div>
';

$cardSlider = new Card(1,1);

$cardSlider->textContent = '
<div class="h-full w-full flex flex-col items-center gap-4">
    <h2 class="flex items-center justify-between">
        <span class="flex items-center gap-2 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 opacity-40"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path></svg> 
            Price range
        </span>
    </h2> 
    <div class="text-center text-5xl font-extralight">50</div> 
    <input type="range" class="range range-sm">
</div>
';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Decorator</title>
</head>
<body>
    <div class="flex w-[100vw] h-[100vh]">
        <div class="w-1/5 h-full bg-neutral-50">
            <form class="p-4 gap-4 flex flex-col">
                <h1 class="text-4xl font-semibold">Decorator 🐘</h1>

                <label for="font-size" class="text-lg">Font size</label>
                <select name="font-size" class="p-2 bg-neutral-200 rounded-sm" >
                    <option value="xs">Extra small</option>
                    <option value="sm">Small</option>
                    <option value="md">Medium</option>
                    <option value="lg">Large</option>
                    <option value="xl">Extra large</option>
                    <option value="2xl">Extra large</option>
                    <option value="3xl">3XL</option>
                    <option value="4xl">4XL</option>
                </select>

                <label for="base-border-radius" class="text-lg" >Base border radius</label>
                <input name="base-border-radius" type="range" min="0" max="8" value="<?= Theme::$BASE_BORDER_RADIUS ?>">

                <label for="base-border-size" class="text-lg" >Base border size</label>
                <input name="base-border-size" type="range" min="0" max="8" value="<?= Theme::$BASE_BORDER_SIZE ?>">

                <label for="input-border-radius" class="text-lg" >Input border radius</label>
                <input name="input-border-radius" type="range" min="0" max="4" value="<?= Theme::$INPUT_BORDER_RADIUS ?>">

                <label for="base-bg">Base color</label>
                <ul class="flex gap-4">
                    <input type="radio" name="base-bg" value="neutral-200" class="appearance-none w-10 h-10 bg-neutral-200 rounded-sm" <?= Theme::$BASE_BACKGROUND_COLOR == "neutral-200" ? "checked" : "" ?>>
                    <input type="radio" name="base-bg" value="neutral-400" class="appearance-none w-10 h-10 bg-neutral-400 rounded-sm" <?= Theme::$BASE_BACKGROUND_COLOR == "neutral-400" ? "checked" : "" ?>>
                    <input type="radio" name="base-bg" value="neutral-600" class="appearance-none w-10 h-10 bg-neutral-600 rounded-sm" <?= Theme::$BASE_BACKGROUND_COLOR == "neutral-600" ? "checked" : "" ?>>
                </ul>   

                <label for="accent-bg">Accent color</label>
                <ul class="flex gap-4">
                    <input type="radio" name="accent-bg" value="blue-300"   class="appearance-none w-10 h-10 bg-blue-300 rounded-sm"  <?= Theme::$ACCENT_BACKGROUND_COLOR == "blue-300" ? "checked" : "" ?>>
                    <input type="radio" name="accent-bg" value="red-300"    class="appearance-none w-10 h-10 bg-red-300 rounded-sm"   <?= Theme::$ACCENT_BACKGROUND_COLOR == "red-300" ? "checked" : "" ?>>
                    <input type="radio" name="accent-bg" value="green-300"  class="appearance-none w-10 h-10 bg-green-300 rounded-sm" <?= Theme::$ACCENT_BACKGROUND_COLOR == "green-300" ? "checked" : "" ?>>
                </ul>

                <button type="submit" class="bg-gray-200 p-3 rounded-sm">Generate</button>
            </form>
        </div>
        <div class="w-4/5 h-full bg-neutral-100 grid p-2
        gap-2
        grid-cols-8
        grid-rows-6"
        >
            <?= $card ?>
            <?= $card2 ?>

            <?= $cardForm ?>

            <div class="flex justify-between bg-white max-w-sm w-full p-6 border border-gray-200 rounded-xl shadow-sm col-span-2 row-span-1">
                <div>
                    <h1>Revenue</h1>
                    <strong class="text-2xl">10.5 k chf</strong>
                    <div class="flex mt-5">
                        <svg class="m-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" />
                        </svg>
                        <p> 32% more than last month</p>
                    </div>
                </div>
            </div>

           <?= $productCard ?>
        </div>
    </div>
</body>
</html>