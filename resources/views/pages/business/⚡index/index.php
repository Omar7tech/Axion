<?php

use App\Models\Business;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Businesses')] class extends Component {

    #[Computed]
    public function businesses(): Collection
    {
        return Business::get();
    }
};
