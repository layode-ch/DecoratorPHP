<?php
namespace DecoratorPHP\Components;

use DecoratorPHP\Decorators\Border;
use DecoratorPHP\Decorators\BorderRound;
use DecoratorPHP\Decorators\BaseColor;
use DecoratorPHP\Enums\Sizes;

class Card extends Component {

    public function __construct(int $cols = 1, int $rows = 1) {
        parent::__construct();

        $this->classList[] = "col-span-" . $cols;
        $this->classList[] = "row-span-" . $rows;

        $component = new BaseColor(new Component($this->textContent));
        $component = new BorderRound($component);

        $this->classList = array_merge($this->classList, $component->classList);
    }

    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<div class='$classes'>". $this->textContent ."</div>";
    }
}