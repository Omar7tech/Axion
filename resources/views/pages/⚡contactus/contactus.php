<?php

use App\Models\InquiryTerm;
use Livewire\Component;

new class extends Component
{
    public function contactEmails(): array
    {
        return app(\App\Settings\GeneralSettings::class)->contact_emails;
    }

    public function contactPhones(): array
    {
        return app(\App\Settings\GeneralSettings::class)->contact_phones;
    }

    public function socialMedia(): array
    {
        return app(\App\Settings\GeneralSettings::class)->social_media;
    }

    public function inquiryTerms()
    {
        return InquiryTerm::all();
    }

    public function with(): array
    {
        return [
            'contactEmails' => $this->contactEmails(),
            'contactPhones' => $this->contactPhones(),
            'socialMedia' => $this->socialMedia(),
            'inquiryTerms' => $this->inquiryTerms(),
        ];
    }
};