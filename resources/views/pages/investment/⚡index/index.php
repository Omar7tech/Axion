<?php

use App\Models\Investment;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    public int $perPage = 9;

    #[Computed]
    public function investments()
    {
        return Investment::active()
            ->latest('created_at')
            ->paginate($this->perPage);
    }

    #[Computed]
    public function totalCount()
    {
        return Investment::active()->count();
    }
};