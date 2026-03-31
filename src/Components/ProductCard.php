<?php
namespace DecoratorPHP\Components;

class ProductCard extends Card {
    public function __construct(int $cols = 1, int $rows = 1)
    {
        parent::__construct($cols, $rows);
        $this->classList[] = "p-4";
        $this->textContent = '
            <div>
                <img class="rounded-lg" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="">
                <div class="flex justify-between mt-5">
                    <h3 class="text-xl">Nike Shoes</h3>
                    <p class="bg-green-500 px-2 py-1 rounded-full">En stock</p>
                </div>
                <p class="mt-3 mb-3 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero accusamus qui nisi officia corporis distinctio porro ipsa necessitatibus .</p>
                <div class="flex align-center justify-between">
                    <p class=" text-xl">56 CHF</p>
                    <div class="w-fit">
                        <button class="bg-red-500 px-4 py-1 rounded-sm" >Buy</button>
                        <button class="bg-red-500 px-4 py-1 rounded-sm" >Sell</button>
                    </div>
                </div>
            </div>
        ';
    }
}