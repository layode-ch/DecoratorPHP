<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Theme;

class InputBackground extends BackgroundColor {
    public function __construct(IComponent $component) {
        parent::__construct($component, Theme::$INPUT_BACKGROUND_COLOR, Theme::$INPUT_BACKGROUND_INTENSITY);
    }
}