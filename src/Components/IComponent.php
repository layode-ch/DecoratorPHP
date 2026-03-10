<?php
namespace DecoratorPHP\Components;

interface IComponent {
    public array $classList { get; set; }
    public string $textContent { get; set; }

    public function toHTML() : string;
}
