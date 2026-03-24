<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Theme;

class AccentColor extends Color {
        public function __construct(IComponent $component) {
        parent::__construct($component, Theme::$ACCENT_BACKGROUND_COLOR, Theme::$ACCENT_FOREGROUND_COLOR);
    }
}