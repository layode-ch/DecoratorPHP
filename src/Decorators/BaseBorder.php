<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Theme;

class BaseBorder extends Border {
    public function __construct(IComponent $component) {
        $size = Theme::$BASE_BORDER_SIZE;
        $color = Theme::$BASE_BORDER_COLOR;
        $radius = Theme::$BASE_BORDER_RADIUS;
        parent::__construct($component, $size, $color, $radius);
    }
}