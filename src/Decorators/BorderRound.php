<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Sizes;

class BorderRound extends ComponentStyle {
    public function __construct(IComponent $component, Sizes|string|int $radius = Sizes::EXTRA_SMALL) {
        if (!($radius instanceof Sizes)){
            if (gettype($radius) === "int")
                $radius = Sizes::cases()[$radius];
            else
                $radius = Sizes::from($radius);
        }
        parent::__construct($component, ["rounded-$radius->value"]);
    }
}