<?php
require_once __DIR__."/../vendor/autoload.php";

use DecoratorPHP\Components\Card;
use DecoratorPHP\Components\Button;
use DecoratorPHP\Components\Component;
use DecoratorPHP\Decorators\AccentColor;
use DecoratorPHP\Decorators\BorderRound;
use DecoratorPHP\Decorators\Box;
use DecoratorPHP\Decorators\ComponentStyle;
use DecoratorPHP\Decorators\Cursor;
use DecoratorPHP\Decorators\Hover;
use DecoratorPHP\Decorators\RedBackground;
use DecoratorPHP\Enums\Sizes;
use DecoratorPHP\Enums\Theme;

Theme::$BORDER_RADIUS = (int)$_GET["border-radius"] ?? 1;
Theme::$BASE_BACKGROUND_COLOR = $_GET["base-bg"] ?? "neutral-200";
Theme::$ACCENT_BACKGROUND_COLOR = $_GET["accent-bg"] ?? "neutral-400";

$component = new Button("Bonjouuur");
$component = new Cursor($component);
$component = new BorderRound($component, Sizes::QUADRUPLE_EXTRA_LARGE);
$component = new AccentColor($component);
$component = new Box($component, 10, 30);

$card = new Card(3,1);
$card2 = new Card(4,1);

$card->textContent = $component;
$card2->textContent = "Card Text";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Decorator</title>
</head>
<body>
    <div class="flex w-[100vw] h-[100vh]">
        <div class="w-1/5 h-full bg-neutral-50">
            
            <form class="p-4 gap-4 flex flex-col">

                <label for="font-size">Font size</label>

                <select name="font-size">
                    <option value="xs">Extra small</option>
                    <option value="sm">Small</option>
                    <option value="md">Medium</option>
                    <option value="lg">Large</option>
                    <option value="xl">Extra large</option>
                    <option value="2xl">Extra large</option>
                    <option value="3xl">3XL</option>
                    <option value="4xl">4XL</option>
                </select>

                <label for="base-border-radius" >Base border radius</label>
                <input name="base-border-radius" type="range" min="0" max="8" value="<?= Theme::$BORDER_RADIUS ?>">

                <label for="input-border-radius" >Base border width</label>
                <input name="input-border-radius" type="range" min="0" max="4" value="<?= Theme::$BORDER_WIDTH ?>">

                <label for="base-bg">Base color</label>
                <ul class="flex gap-4">
                    <input type="radio" name="base-bg" value="neutral-200" class="appearance-none w-10 h-10 bg-neutral-200" <?= Theme::$BASE_BACKGROUND_COLOR == "neutral-200" ? "checked" : "" ?>>
                    <input type="radio" name="base-bg" value="neutral-400" class="appearance-none w-10 h-10 bg-neutral-400" <?= Theme::$BASE_BACKGROUND_COLOR == "neutral-400" ? "checked" : "" ?>>
                    <input type="radio" name="base-bg" value="neutral-600" class="appearance-none w-10 h-10 bg-neutral-600" <?= Theme::$BASE_BACKGROUND_COLOR == "neutral-600" ? "checked" : "" ?>>
                </ul>   

                <label for="accent-bg">Accent color</label>
                <ul class="flex gap-4">
                    <input type="radio" name="accent-bg" value="blue-300"   class="appearance-none w-10 h-10 bg-blue-300"  <?= Theme::$ACCENT_BACKGROUND_COLOR == "blue-300" ? "checked" : "" ?>>
                    <input type="radio" name="accent-bg" value="red-300"    class="appearance-none w-10 h-10 bg-red-300"   <?= Theme::$ACCENT_BACKGROUND_COLOR == "red-300" ? "checked" : "" ?>>
                    <input type="radio" name="accent-bg" value="green-300"  class="appearance-none w-10 h-10 bg-green-300" <?= Theme::$ACCENT_BACKGROUND_COLOR == "green-300" ? "checked" : "" ?>>
                </ul>

                <button type="submit" class="bg-gray-200 p-3">Generate</button>
            </form>
        </div>
        <div class="w-4/5 h-full bg-neutral-100 grid p-2
        gap-2
        grid-cols-8
        grid-rows-6"
        >
            <?= $card ?>
            <?= $card2 ?>
        </div>
    </div>
</body>
</html>