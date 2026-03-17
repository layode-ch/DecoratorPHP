<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Sizes;

class BorderRound extends ComponentStyle {
    public function __construct(IComponent $component, Sizes|string $radius = Sizes::EXTRA_SMALL) {
        if (gettype($radius) == "string")
            $radius = Sizes::from($radius);
        parent::__construct($component, ["rounded-$radius->value"]);
    }
}