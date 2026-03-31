<?php

namespace DecoratorPHP\Components;

class CardStats extends Card
{
    public function __construct(int $cols = 1, int $rows = 1)
    {
        parent::__construct($cols, $rows);

        $this->classList[] = 'p-4';
        $this->classList[] = 'flex';
        $this->classList[] = 'flex-col';
        $this->classList[] = 'justify-between';

        $this->textContent = '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="flex items-center justify-between mb-1">
    <span class="text-xs font-semibold uppercase tracking-widest text-gray-400">Revenue</span>
    <i class="bi bi-currency-dollar text-gray-400"></i>
</div>
<strong class="text-3xl font-bold tracking-tight text-gray-800">10.5K <span class="text-base font-medium text-gray-400">CHF</span></strong>
<div class="flex items-center gap-1 mt-3">
    <i class="bi bi-graph-up-arrow text-green-500 text-sm"></i>
    <span class="text-sm font-medium text-green-500">+32%</span>
    <span class="text-sm text-gray-400">vs last month</span>
</div>
';
    }
}