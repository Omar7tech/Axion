<?php

use App\Models\Business;
use Livewire\Component;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

new class extends Component {

    public Business $business;

    public function mount(): void
    {
        if (!$this->business->is_active || !$this->business->is_published) {
            throw new NotFoundHttpException();
        }
    }

};