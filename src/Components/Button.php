<?php
namespace DecoratorPHP\Components;

class Button extends Component {
    
    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
        return "<button class='$classes'>$this->textContent</button>";
    }
}