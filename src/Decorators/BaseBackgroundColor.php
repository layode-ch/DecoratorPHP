<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Theme;

class BaseBackgroundColor extends BackgroundColor {
        public function __construct(IComponent $component) {
        parent::__construct($component, Theme::$BASE_BACKGROUND_COLOR);
    }
}