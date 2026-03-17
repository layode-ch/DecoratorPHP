<?php
namespace DecoratorPHP\Decorators;

use DecoratorPHP\Components\IComponent;
use DecoratorPHP\Enums\Sizes;
use DecoratorPHP\Enums\Theme;

class BorderRound extends ComponentStyle {
    public function __construct(IComponent $component) {
        $radius = Theme::$BORDER_RADIUS;
        if (!($radius instanceof Sizes)){
            if (gettype($radius) === "int")
                $radius = Sizes::cases()[$radius];
            else
                $radius = Sizes::from($radius);
        }
        parent::__construct($component, ["rounded-$radius->value"]);
    }
}