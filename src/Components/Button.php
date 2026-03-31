<?php
namespace DecoratorPHP\Components;

use DecoratorPHP\Decorators\AccentColor;
use DecoratorPHP\Decorators\InputBorder;

class Button extends Component {
    
    public function __construct(string $textContent = "")
    {
        parent::__construct($textContent);
        $comp = new InputBorder(new AccentColor($this));
        $this->classList = array_merge($this->classList, $comp->classList);
    }

    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<button class='$classes'>$this->textContent</button>";
    }
}