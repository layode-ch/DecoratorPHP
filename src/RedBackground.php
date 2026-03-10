<?php
namespace DecoratorPHP;

class RedBackground extends ComponentStyle {
    public function __construct(IComponent $component) {
        parent::__construct($component);
        $this->classList = ["bg-red-500"];
    }
}