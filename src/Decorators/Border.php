<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Sizes;

class Border extends ComponentStyle {
    public function __construct(IComponent $component, int $size = 1, string $color = "indigo-500", Sizes|string|int $radius = Sizes::SMALL) {
        $radius = $this->parseRadius($radius);
        parent::__construct($component, ["border-$size", "border-$color", "rounded-$radius->value"]);
    }

    private function parseRadius(Sizes|string|int $radius) {
        if (!($radius instanceof Sizes)){
            if (gettype($radius) === "integer")
                $radius = Sizes::cases()[$radius];
            else
                $radius = Sizes::from($radius);
        }

        return $radius;
    }
} 