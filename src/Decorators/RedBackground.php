<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;

class RedBackground extends BackgroundColor {
    public function __construct(IComponent $component) {
        parent::__construct($component, "red");
    }
}