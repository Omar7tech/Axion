<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageGeneralSettings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'General Settings';

    protected static ?string $title = 'General Settings';
    protected static string $settings = GeneralSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->tabs([       
                        Tab::make('About Us')
                            ->schema([
                                RichEditor::make('about_us_page_content')                                    
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('WhatsApp')
                            ->schema([
                                Toggle::make('whatsapp_badge_visible')
                                    ->label('Show WhatsApp Badge')
                                    ->columnSpanFull(),
                                TextInput::make('whatsapp_phone_number')
                                    ->label('Phone Number')
                                    ->tel()
                                    ->placeholder('+1234567890')
                                    ->visibleJs(<<<'JS'
                                        $get('whatsapp_badge_visible')
                                        JS)
                                    ->requiredIf('whatsapp_badge_visible', true)
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('Contact Us')
                            ->schema([
                                Repeater::make('contact_phones')
                                    ->label('Phone Numbers')
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label')
                                            ->placeholder('e.g. Main, Sales')
                                            ->required(),
                                        TextInput::make('phone')
                                            ->label('Phone Number')
                                            ->tel()
                                            ->placeholder('+13473305000')
                                            ->required(),
                                    ])
                                    ->columns(2)
                                    ->reorderable()
                                    ->collapsible()
                                    ->itemLabel(fn(array $state): ?string => trim(($state['label'] ?? '') . ' ' . ($state['phone'] ?? '')) ?: null)
                                    ->columnSpanFull(),
                                Repeater::make('contact_emails')
                                    ->label('Email Addresses')
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label')
                                            ->placeholder('e.g. Sales, Support')
                                            ->required(),
                                        TextInput::make('email')
                                            ->label('Email Address')
                                            ->email()
                                            ->placeholder('sales@example.com')
                                            ->required(),
                                    ])
                                    ->columns(2)
                                    ->reorderable()
                                    ->collapsible()
                                    ->itemLabel(fn(array $state): ?string => trim(($state['label'] ?? '') . ' — ' . ($state['email'] ?? '')) ?: null)
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('Social Media')
                            ->schema([
                                Repeater::make('social_media')
                                    ->label('')
                                    ->schema([
                                        Select::make('platform')
                                            ->label('Platform')
                                            ->options([
                                                'facebook' => 'Facebook',
                                                'instagram' => 'Instagram',
                                                'x' => 'X (Twitter)',
                                                'linkedin' => 'LinkedIn',
                                                'youtube' => 'YouTube',
                                                'tiktok' => 'TikTok',
                                                'pinterest' => 'Pinterest',
                                                'snapchat' => 'Snapchat',
                                                'whatsapp' => 'WhatsApp',
                                                'telegram' => 'Telegram',
                                            ])
                                            ->required()
                                            ->searchable()
                                            ->columnSpanFull(),
                                        TextInput::make('url')
                                            ->label('URL')
                                            ->required()
                                            ->url()
                                            ->placeholder('https://')
                                            ->columnSpanFull(),
                                    ])
                                    ->reorderable()
                                    ->collapsible()
                                    ->itemLabel(fn(array $state): ?string => $state['platform'] ?? null)
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
