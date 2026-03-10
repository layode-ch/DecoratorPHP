<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Sizes;

class BorderRound extends ComponentStyle {
    public function __construct(IComponent $component, Sizes $radius = Sizes::EXTRA_SMALL) {
        parent::__construct($component, ["rounded-$radius->value"]);
    }
}