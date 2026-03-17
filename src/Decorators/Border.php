<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;

class Border extends ComponentStyle {
    public function __construct(IComponent $component, int $size = 1, string $color = "indigo-500") {
        parent::__construct($component, ["border-$size", "border-$color"]);
    }
} 