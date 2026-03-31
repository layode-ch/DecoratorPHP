<?php
require_once __DIR__."/../vendor/autoload.php";

use DecoratorPHP\Components\Alert;
use DecoratorPHP\Components\Card;
use DecoratorPHP\Components\CardForm;
use DecoratorPHP\Components\CardStats;
use DecoratorPHP\Components\ProductCard;
use DecoratorPHP\Components\Button;
use DecoratorPHP\Components\CardSlider;
use DecoratorPHP\Decorators\BaseColor;
use DecoratorPHP\Decorators\AccentColor;
use DecoratorPHP\Decorators\ComponentStyle;
use DecoratorPHP\Enums\AlertType;
use DecoratorPHP\Enums\Theme;

Theme::$BASE_BORDER_RADIUS      = isset($_GET["base-border-radius"])    ? (int)$_GET["base-border-radius"] : 1;
Theme::$BASE_BORDER_SIZE        = isset($_GET["base-border-size"])      ? (int)$_GET["base-border-size"] : 1;

Theme::$INPUT_BORDER_RADIUS     = isset($_GET["input-border-radius"])   ? (int)$_GET["input-border-radius"] : 1;
Theme::$INPUT_BORDER_SIZE       = isset($_GET["input-border-size"])     ? (int)$_GET["input-border-size"] : 1;
Theme::$INPUT_BORDER_COLOR       = isset($_GET["input-border-color"])   ? $_GET["input-border-color"] : "blue-500";

Theme::$BASE_BACKGROUND_COLOR   = $_GET["base-bg"] ?? "neutral-200";    
Theme::$ACCENT_BACKGROUND_COLOR = $_GET["accent-bg"] ?? "neutral-400";

// $card->textContent = $component;
$cardForm = new CardForm(2, 2);
$productCard = new ProductCard(2,3);
$cardStats = new CardStats(2,1);
$cardSlider = new CardSlider(2,1);

//alert
$cardAlerts = new Card(2,2);
$cardAlerts = new ComponentStyle($cardAlerts, ["p-3"]);
$cardAlerts->textContent .= new Alert("Infos");
$cardAlerts->textContent .= new Alert("Warning", AlertType::WARNING);
$cardAlerts->textContent .= new Alert("Error", AlertType::ERROR);

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

                <label for="accent-bg">Input border color</label>
                <ul class="flex gap-4">
                    <input type="radio" name="input-border-color" value="blue-300"   class="appearance-none w-10 h-10 bg-blue-300 rounded-sm"  <?= Theme::$INPUT_BORDER_COLOR == "blue-300" ? "checked" : "" ?>>
                    <input type="radio" name="input-border-color" value="red-300"    class="appearance-none w-10 h-10 bg-red-300 rounded-sm"   <?= Theme::$INPUT_BORDER_COLOR == "red-300" ? "checked" : "" ?>>
                    <input type="radio" name="input-border-color" value="green-300"  class="appearance-none w-10 h-10 bg-green-300 rounded-sm" <?= Theme::$INPUT_BORDER_COLOR == "green-300" ? "checked" : "" ?>>
                </ul>

                <button type="submit" class="bg-gray-200 p-3 rounded-sm">Generate</button>
            </form>
        </div>
        <div class="w-4/5 h-full bg-neutral-100 grid p-2
        gap-2
        grid-cols-8
        grid-rows-6"
        >
            <?= $cardAlerts ?>
            <?= $cardForm ?>
            <?= $cardStats ?>

           <?= $productCard ?>
            <?= $cardSlider ?>
        </div>
    </div>
</body>
</html>