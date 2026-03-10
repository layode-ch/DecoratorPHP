<?php
namespace DecoratorPHP;

interface IComponent {
    public array $classList {get; set;}

    public function toHTML() : string;
}
