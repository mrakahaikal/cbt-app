<?php

namespace App\Livewire\Forms\Course;

use Livewire\Form;
use App\Models\Category;
use Livewire\Attributes\Validate;

class CategoryForm extends Form
{
    #[Validate('required|string|max:255')]
    public ?string $name;

    #[Validate('required|string|max:255')]
    public ?string $badgeColor;

    public function store()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
            'badge_color' => $this->badgeColor,
        ]);

        $this->reset();
    }
}
