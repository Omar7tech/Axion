<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {

        $this->migrator->add('general.contact_emails', []);
        $this->migrator->add('general.contact_phones', []);
        $this->migrator->update('general.contact_emails', fn() => [
            ['label' => 'Sales', 'email' => 'info@axion.com'],
        ]);
        $this->migrator->update('general.contact_phones', fn() => [
            ['label' => 'Main', 'phone' => '+13473305000'],
        ]);
        $this->migrator->add('general.whatsapp_badge_visible', false);
        $this->migrator->add('general.whatsapp_phone_number', '');
        $this->migrator->add('general.social_media', []);
        $this->migrator->add('general.about_us_page_content', '');
        $this->migrator->add('general.hero_ecosystem_blurb', 'A unified ecosystem where advanced tech meets global trade. We architect the future of industrial synergy.');
    }
};
