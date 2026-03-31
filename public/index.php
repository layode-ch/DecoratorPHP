<?php
require_once __DIR__."/../vendor/autoload.php";

use DecoratorPHP\Components\Card;
use DecoratorPHP\Components\CardForm;
use DecoratorPHP\Components\CardStats;
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
$cardForm = new CardForm(2, 2);
$cardStats = new CardStats(2,1);
// $card->textContent = $component;
$card2->textContent = "Card Text";

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
            <?= $cardForm ?>
            <?= $cardStats ?>

            <div class="flex justify-between bg-white max-w-sm w-full p-6 border border-gray-200 rounded-xl shadow-sm col-span-2 row-span-3 ">
                <div>
                    <img class="rounded-lg" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="">
                    <div class="flex justify-between mt-5">
                        <h3 class="text-xl">Nike Shoes</h3>
                        <p class="bg-green-500 px-2 py-1 rounded-full">En stock</p>
                    </div>
                    <p class="mt-3 mb-3 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero accusamus qui nisi officia corporis distinctio porro ipsa necessitatibus .</p>
                    <div class="flex align-center justify-between">
                        <p class=" text-xl">56 CHF</p>
                        <div class="w-fit">
                            <button class="bg-red-500 px-4 py-1 rounded-sm" >Buy</button>
                            <button class="bg-red-500 px-4 py-1 rounded-sm" >Sell</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>