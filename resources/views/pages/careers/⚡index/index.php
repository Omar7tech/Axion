<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Career;
use Livewire\Attributes\Reactive;

new class extends Component {
    use WithPagination;
    #[Reactive]
    public ?int $limit = null;

    public function with(): array
    {
        $query = Career::where('is_active', true)->orderBy('sort');

        if ($this->limit) {
            $query->limit($this->limit);
        }

        return [
            'careers' => $query->paginate(9),
            'totalCount' => Career::where('is_active', true)->count(),
            'hasMore' => $this->limit && Career::where('is_active', true)->count() > $this->limit,
        ];
    }
};