<?php
namespace DecoratorPHP\Components;

use DecoratorPHP\Decorators\BaseBorder;
use DecoratorPHP\Decorators\BaseColor;

class Card extends Component {

    public function __construct(int $cols = 1, int $rows = 1) {
        parent::__construct();

        $this->classList[] = "col-span-" . $cols;
        $this->classList[] = "row-span-" . $rows;

        $component = new BaseColor($this);
        $component = new BaseBorder($component);

        $this->classList = array_merge($this->classList, $component->classList);
    }

    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<div class='$classes'>". $this->textContent ."</div>";
    }
}