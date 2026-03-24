<?php
namespace DecoratorPHP\Components;

use DecoratorPHP\Decorators\Border;
use DecoratorPHP\Decorators\BorderRound;
use DecoratorPHP\Decorators\InputBackground;

class Search extends Component {
    
    public string $type;

    public function __construct(string $type = "text") {
        parent::__construct();
        $this->type = $type;
        $component = new Border($this, 3, "black-500");
        $component = new BorderRound($component);
        $component = new InputBackground($component);
        $this->classList = array_merge($this->classList, $component->classList);
    }

    public function toHTML(): string {
        $classes = implode(" ", $this->classList);
    return "
    <div class='flex items-center border border-gray-300 rounded-full px-4 py-2 w-72 focus-within:ring-2 focus-within:ring-black'>
        <span class='mr-3 text-gray-400'><img src='https://svgsilh.com/svg/3331255.svg'></span>
        <input class='{$classes}' type='text' placeholder='Search...' class='flex-1 outline-none bg-transparent text-sm' />
        <button class='ml-3 bg-black text-white px-4 py-1.5 rounded-full text-sm hover:bg-gray-800'>
            Find
        </button>
    </div>
    ";
}
}