<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Theme;

class InputBorder extends Border {
    public function __construct(IComponent $component)
    {
        parent::__construct($component, Theme::$INPUT_BORDER_SIZE, Theme::$INPUT_BORDER_COLOR, Theme::$INPUT_BORDER_RADIUS);
    }
}