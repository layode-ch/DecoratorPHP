<?php
namespace DecoratorPHP\Components;

use DecoratorPHP\Decorators\Border;
use DecoratorPHP\Decorators\BorderRound;
use DecoratorPHP\Enums\Sizes;

class Card extends Component {

    public function __construct(int $cols = 1, int $rows = 1) {
        parent::__construct();

        $this->classList[] = "row-span-" . $rows;
        $this->classList[] = "row-span-" . $rows;

        $component = new BorderRound(new Component($this->textContent), Sizes::MEDIUM);

        $this->classList = array_merge($this->classList, $component->classList);
    }

    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<div class='$classes  bg-red-200'>". $this->textContent ."</div>";
    }
}
