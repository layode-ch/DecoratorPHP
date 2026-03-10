<?php
namespace DecoratorPHP;

class ComponentStyle implements IComponent {
    protected IComponent $component;
    public array $classList;
    public function __construct(IComponent $component) {
        $this->component = $component;
    }

    public function toHTML(): string {
        $this->component->classList = array_merge($this->component->classList, $this->classList);
        return $this->component->toHTML();
    }
}