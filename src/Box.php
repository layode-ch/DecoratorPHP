<?php
namespace DecoratorPHP;

class Box extends ComponentStyle {
    public function __construct(IComponent $component) {
        parent::__construct($component);
        $this->classList = ["h-20", "w-20"];
    }
} 