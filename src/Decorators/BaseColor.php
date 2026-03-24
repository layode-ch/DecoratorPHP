<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Theme;

class BaseColor extends Color {
        public function __construct(IComponent $component) {
        parent::__construct($component, Theme::$BASE_BACKGROUND_COLOR, Theme::$BASE_FOREGROUND_COLOR);
    }
}