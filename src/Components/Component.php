<?php
namespace DecoratorPHP\Components;

class Component implements IComponent {
    public array $classList;
    public string $textContent;


    public function __construct(string $textContent = "") {
        $this->classList = [];
        $this->textContent = $textContent;
    }

    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<div class='$classes'>$this->textContent</div>";
    }

    public function __toString() {
        return $this->toHTML();
    }
}