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
                    ->label('Название видео')
                    ->required(),
                RichEditor::make('video_description')
                    ->label('Описание видео'),

                FileUpload::make('video_thumbnail')
                    ->label('Превью видео')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->imageEditor()
                    ->imageEditorMode(3)
                    ->imageEditorAspectRatios([
                        '16:9'
                    ])
                    ->imageCropAspectRatio('16:9')
                    ->maxFiles(1),

                Select::make('category')
                    ->label('Категории')
                    ->multiple()
                    ->relationship('categories', 'name')
                    ->searchable()
                    ->preload(),
                Repeater::make('url_hosts')
                    ->schema([
                        TextInput::make('links')->required()
                            ->label('Ссылка на видео')
                            ->placeholder('link'),
                        Select::make('source')
                        ->label('Источники видео')
                            ->options([
                                'youtube' => 'YouTube',
                                'vk' => 'VK',
                                'rutube' => 'RuTube',
                            ])
                            ->required(),
                    ])
                    ->columns(2)
                    ->addActionLabel('Добавить источник'),
                Select::make('status')
                    ->options([
                        'hide' => 'Скрыть',
                        'shared_access' => 'Открыть доступ'
                    ])
                    ->default('hide')
                    ->label('Статус')
            ]);
    }

}
