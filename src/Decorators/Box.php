<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;

class Box extends ComponentStyle {
    public function __construct(IComponent $component, int $height = 20, $width = 20) {
        parent::__construct($component, ["h-$height", "w-$width"]);
    }
} 