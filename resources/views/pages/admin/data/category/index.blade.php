<?php

use App\Livewire\Forms\Course\CategoryForm;
use function Livewire\Volt\{state, title, form};

title('Kelola Kategori');

state(['color']);

form(CategoryForm::class);

$save = function () {
    $this->form->store();
};
?>

<div>
    <h1>Ini adalah halaman kategori</h1>
    <form wire:submit="save">
        <x-input-text wire:model="form.name" />
        <div class="flex items-center space-x-4">
            <label for="color-picker" class="text-gray-700 font-medium">Choose Color:</label>
            <input type="color" wire:model="form.badgeColor" id="color-picker"
                class="w-12 h-12 p-1 border-2 border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <x-primary-button type="submit">Save</x-primary-button>
    </form>
</div>