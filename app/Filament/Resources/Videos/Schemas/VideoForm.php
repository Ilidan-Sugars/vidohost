<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('video_name')
                    ->label('Video name')
                    ->required(),
                RichEditor::make('video_description')
                    ->label('Video description'),

                FileUpload::make('video_thumbnail')
                    ->label('Video thumbnail')
                    ->image()
                    ->visibility('public')
                    ->imageEditor()
                    ->imageEditorMode(3)
                    ->imageEditorAspectRatios([
                        '16:9'
                    ])
                    ->imageCropAspectRatio('16:9')
                    ->maxFiles(1),

                Repeater::make('url_hosts')
                    ->schema([
                        TextInput::make('links')->required()
                            ->label('Url Video')
                            ->placeholder('link'),
                        Select::make('source')
                            ->options([
                                'youtube' => 'YouTube',
                                'vk' => 'VK',
                                'rutube' => 'RuTube',
                            ])
                            ->required(),
                    ])
                    ->columns(2)
                    ->label('Video Sources')
                    ->addActionLabel('Add source'),
                Select::make('status')
                    ->options([
                        'hide' => 'Hide',
                        'shared_access' => 'Shared access'
                    ])
                    ->default('hide')
            ]);
    }

}
