<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;

class Hover extends ComponentStyle {
    public function __construct(IComponent $component, ComponentStyle $style) {
        $classList = [];
        foreach ($style->classList as $class) {
            $classList[] = "hover:$class";
        }
        parent::__construct($component, $classList);
    }
}