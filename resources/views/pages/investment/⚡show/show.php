<?php

use App\Models\Investment;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public Investment $investment;

    #[Computed]
    public function coverImage()
    {
        return $this->investment->hasMedia('images')
            ? $this->investment->getFirstMediaUrl('images', 'webp')
            : asset('covers/investment-defualt.jpg');
    }

    #[Computed]
    public function galleryImages()
    {
        return $this->investment->getMedia('images')->skip(1);
    }

    #[Computed]
    public function hasCoverImage()
    {
        return $this->investment->hasMedia('images');
    }

    #[Computed]
    public function hasGallery()
    {
        return $this->investment->getMedia('images')->count() > 1;
    }
};