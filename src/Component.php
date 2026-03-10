<?php
namespace DecoratorPHP;

class Component implements IComponent {
    public array $classList;
    public function __construct() {
        $this->classList = [];
    }

    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<div class='$classes' >";
    }
}