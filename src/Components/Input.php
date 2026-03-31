<?php
namespace DecoratorPHP\Components;

use DecoratorPHP\Decorators\BaseBorder;
use DecoratorPHP\Decorators\Border;
use DecoratorPHP\Decorators\BorderRound;
use DecoratorPHP\Decorators\InputBorder;
use DecoratorPHP\Decorators\InputColor;

class Input extends Component {
    
    public string $type;

    public function __construct(string $type = "text") {
        parent::__construct();
        $this->type = $type;
        $component = new InputBorder($this);
        $component = new InputColor($component);
        $this->classList = array_merge($this->classList, $component->classList);
    }

    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<input class='$classes' value='$this->textContent' type='$this->type' >";
    }
}