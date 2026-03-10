<?php
namespace DecoratorPHP;

class Button extends Component {
    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<button class='$classes'></button>";
    }
}