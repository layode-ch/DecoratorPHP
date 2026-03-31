<?php

namespace DecoratorPHP\Components;

use DecoratorPHP\Decorators\BaseBorder;
use DecoratorPHP\Decorators\Color;
use DecoratorPHP\Decorators\ComponentStyle;
use DecoratorPHP\Enums\AlertType;

class Alert extends Component {
    public AlertType $type;
    public string $message;

    public function __construct(string $message = 'Alert', AlertType $type = AlertType::INFO)
    {
        parent::__construct();
        $this->type = $type;
        $this->message = $message;
        $component = new BaseBorder($this); 
        $component = new Color($component, $type->value. '-200', "black");
        $component = new ComponentStyle($component, ["h-fit", "w-full", "p-2", "flex", "justify-between", "mb-2"]);
        $this->classList = array_merge($this->classList, $component->classList);
    }

    public function toHTML(): string {
        $js = 'this.parentElement.remove()';
        $classes = implode(' ', $this->classList);
        return "
            <div class='$classes'>
                <p>$this->message</p>
                <button onclick='$js'>
                    <i class='bi bi-x-lg'></i>
                </button>
            </div>
        ";
    }
}