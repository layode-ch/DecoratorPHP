<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;

class Cursor extends ComponentStyle {
    public function __construct(IComponent $component, string $cursor = "pointer") {
        parent::__construct($component, ["cursor-$cursor"]);
    }
}