<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{

     public array $social_media = [];

    public ?string $about_us_page_content = 'Axion About Us';

    public ?string $hero_ecosystem_blurb = 'A unified ecosystem where advanced tech meets global trade. We architect the future of industrial synergy.';

    public array $contact_emails = [];

    public array $contact_phones = [];

    public bool $whatsapp_badge_visible = false;

    public ?string $whatsapp_phone_number = '';

    public static function group(): string
    {
        return 'general';
    }
}