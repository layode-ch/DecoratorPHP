<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;

class Box extends ComponentStyle {
    public function __construct(IComponent $component, int $size = 20) {
        parent::__construct($component, ["h-$size", "w-$size"]);
    }
} 