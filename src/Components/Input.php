<?php
namespace DecoratorPHP\Components;

use DecoratorPHP\Decorators\Border;
use DecoratorPHP\Decorators\BorderRound;
use DecoratorPHP\Enums\Sizes;

class Input extends Component {
    
    public string $type;

    public function __construct(string $type = "text") {
        parent::__construct();
        $this->type = $type;
        $component = new Border(new Component($this->textContent), 10, "indigo-500");
        $component = new BorderRound($component, Sizes::MEDIUM);
        $this->classList = array_merge($this->classList, $component->classList);
    }

    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<input class='$classes' value='$this->textContent' type='$this->type' >";
    }
}