<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;

class BackgroundColor extends ComponentStyle {
    public function __construct(IComponent $component, string $color) {
        parent::__construct($component, ["bg-$color"]);
    }
}