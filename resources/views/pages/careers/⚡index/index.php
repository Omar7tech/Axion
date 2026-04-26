<?php

use App\Models\Career;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    public int $perPage = 9;

    #[Computed]
    public function careers()
    {
        return Career::where('is_active', true)
            ->orderBy('sort')
            ->paginate($this->perPage);
    }

    #[Computed]
    public function totalCount()
    {
        return Career::where('is_active', true)->count();
    }
};