<?php

namespace DecoratorPHP\Components;

class CardForm extends Card
{
    public function __construct(int $cols = 1, int $rows = 1)
    {
        parent::__construct($cols, $rows);

        $this->classList[] = 'p-4';
        $this->classList[] = 'flex';
        $this->classList[] = 'flex-col';
        $this->classList[] = 'gap-3';

        $this->textContent = '
<label class="h-10 flex items-center gap-2 w-full bg-gray-100 border border-gray-200 rounded-lg px-3 py-2 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500 transition-all duration-200">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
    </svg>
    <input type="search" placeholder="Search" class="flex-1 text-sm text-gray-700 placeholder-gray-400 outline-none border-none bg-transparent" />
    <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-3 py-1.5 rounded-md transition-all duration-150">
        Find
    </button>
</label>

<label class="flex items-center h-10 gap-2 w-full bg-gray-100 border border-gray-200 rounded-lg px-3 py-2 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500 transition-all duration-200">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
    </svg>
    <input type="text" placeholder="Username" class="flex-1 text-sm text-gray-700 placeholder-gray-400 outline-none border-none bg-transparent" />
</label>

<label class="flex items-center h-10 gap-2 w-full bg-gray-100 border border-gray-200 rounded-lg px-3 py-2 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500 transition-all duration-200">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
    </svg>
    <input type="password" placeholder="Password" class="flex-1 text-sm text-gray-700 placeholder-gray-400 outline-none border-none bg-transparent" />
</label>

<label class="flex items-start gap-2 w-full bg-gray-100 border border-gray-200 rounded-lg px-3 py-2 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500 transition-all duration-200 flex-1">
    <textarea placeholder="Entrer votre text ici" class="flex-1 h-full text-sm text-gray-700 placeholder-gray-400 outline-none border-none bg-transparent resize-none"></textarea>
</label>
';
    }
}