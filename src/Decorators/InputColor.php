<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Theme;

class InputColor extends Color {
    public function __construct(IComponent $component) {
        parent::__construct($component, Theme::$INPUT_BACKGROUND_COLOR, Theme::$BASE_FOREGROUND_COLOR);
    }
}