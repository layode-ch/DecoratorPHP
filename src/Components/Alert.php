<?php

namespace DecoratorPHP\Components;

use DecoratorPHP\Decorators\BackgroundColor;
use DecoratorPHP\Decorators\Border;
use DecoratorPHP\Decorators\BorderRound;
use DecoratorPHP\Enums\AlertType;
use DecoratorPHP\Enums\Sizes;

class Alert extends Component
{

    public AlertType $type;
    public string $message;

    public function __construct(string $message = 'Alert', AlertType $type = AlertType::INFO)
    {
        parent::__construct();
        $this->type = $type;
        $this->message = $message;
        $component = new Border(new Component($this->textContent), 10, $type->value . '-500');
        $component = new BorderRound($component, Sizes::MEDIUM);
        $component = new BackgroundColor($component, $type->value, 500);
        $this->classList = array_merge($this->classList, $component->classList);
    }

    public function toHTML(): string
    {
        $js = 'console.log(this.parentElement.remove())';
        $classes = implode(' ', $this->classList);
        return "<div class='$classes z-40 absolute m-1 min-w-1/4 max-w-2/3 flex justify-between'><p> $this->message </p>
        <button onclick='$js'>

        <svg class='mt-1' xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-lg' viewBox='0 0 16 16'>
        <path d='M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z'/>
        </svg>
        
        </button>
        </div>";
    }
}
