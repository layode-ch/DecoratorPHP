<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;

class Color extends ComponentStyle {
    public function __construct(IComponent $component, string $bgColor, string $fgColor) {
        parent::__construct($component, ["bg-$bgColor text-$fgColor"]);
    }
}