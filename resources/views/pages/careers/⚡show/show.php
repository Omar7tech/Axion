<?php

use App\Models\Career;
use Livewire\Attributes\Route;
use Livewire\Component;

new class extends Component
{
    #[Route]
    public Career $career;

    public function with(): array
    {
        return [
            'career' => $this->career,
        ];
    }
};