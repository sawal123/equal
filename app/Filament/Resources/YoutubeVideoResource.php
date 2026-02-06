<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YoutubeVideoResource\Pages;
use App\Filament\Resources\YoutubeVideoResource\RelationManagers;
use App\Models\YoutubeVideo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YoutubeVideoResource extends Resource
{
    protected static ?string $model = YoutubeVideo::class;

    protected static ?string $navigationGroup = 'Page Home Settings';
    protected static ?string $navigationIcon  = 'heroicon-o-play-circle';


    protected static ?string $navigationLabel = 'Youtube Video';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul Video')
                    ->maxLength(255),

                Forms\Components\TextInput::make('youtube_url')
                    ->label('Link YouTube')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('youtube_embed', YoutubeVideo::convertToEmbed($state));
                    }),

                Forms\Components\TextInput::make('youtube_embed')
                    ->label('Embed URL')
                    ->disabled()
                    ->dehydrated(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->sortable(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),

                Tables\Columns\TextColumn::make('youtube_url')
                    ->label('URL')
                    ->limit(30),

                Tables\Columns\ViewColumn::make('youtube_embed')
                    ->label('Preview')
                    ->view('filament.tables.columns.youtube-preview'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('up')
                    ->label('')
                    ->icon('heroicon-o-arrow-up')
                    ->action(fn($record) => YoutubeVideo::moveUp($record))
                    ->visible(fn($record) => $record->sort > 1),

                // ⬇️ DOWN
                Tables\Actions\Action::make('down')
                    ->label('')
                    ->icon('heroicon-o-arrow-down')
                    ->action(fn($record) => YoutubeVideo::moveDown($record)),

                // ✏️ EDIT
                Tables\Actions\EditAction::make(),

                // 🗑️ DELETE
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListYoutubeVideos::route('/'),
            'create' => Pages\CreateYoutubeVideo::route('/create'),
            'edit' => Pages\EditYoutubeVideo::route('/{record}/edit'),
        ];
    }
}
