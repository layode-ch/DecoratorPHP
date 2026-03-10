<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;

class ComponentStyle implements IComponent {
    protected IComponent $component;
    public array $classList {
        get => $this->component->classList;
        set (array $value) => $this->component->classList = $value;
    }
    public string $textContent {
        get => $this->component->textContent;
        set(string $value) => $this->component->textContent = $value;
    }

    public function __construct(IComponent $component, array $classList) {
        $this->component = $component;
        $this->classList = array_merge($this->classList, $classList);
    }

    public function toHTML(): string {
        return $this->component->toHTML();
    }

    public function __toString() {
        return $this->toHTML();
    }
}