<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialMediaResource\Pages;
use App\Filament\Resources\SocialMediaResource\RelationManagers;
use App\Models\SocialMedia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialMediaResource extends Resource
{
    protected static ?string $model = SocialMedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $iconMap = [
            'instagram' => 'fa-brands fa-instagram',
            'facebook'  => 'fa-brands fa-facebook',
            'twitter'   => 'fa-brands fa-x-twitter',
            'tiktok'    => 'fa-brands fa-tiktok',
            'youtube'   => 'fa-brands fa-youtube',
            'linkedin'  => 'fa-brands fa-linkedin',
        ];
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Sosial Media')
                    ->required(),

                Forms\Components\Select::make('type')
                    ->label('Tipe')
                    ->options([
                        'instagram' => 'Instagram',
                        'facebook'  => 'Facebook',
                        'twitter'   => 'Twitter / X',
                        'tiktok'    => 'TikTok',
                        'youtube'   => 'YouTube',
                        'linkedin'  => 'LinkedIn',
                    ])
                    ->reactive() // 🔥 wajib
                    ->afterStateUpdated(function ($state, callable $set) {
                        $icons = [
                            'instagram' => 'fa-brands fa-instagram',
                            'facebook'  => 'fa-brands fa-facebook',
                            'twitter'   => 'fa-brands fa-x-twitter',
                            'tiktok'    => 'fa-brands fa-tiktok',
                            'youtube'   => 'fa-brands fa-youtube',
                            'linkedin'  => 'fa-brands fa-linkedin',
                        ];

                        $set('icon', $icons[$state] ?? null);
                    })
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->label('Link URL')
                    ->url()
                    ->required()
                    ->helperText('Contoh: https://instagram.com/username'),

                Forms\Components\TextInput::make('icon')
                    ->label('Icon')
                    ->disabled()          // ❌ tidak bisa diedit
                    ->dehydrated()        // ✅ tetap tersimpan ke DB
                    ->helperText('Icon otomatis mengikuti tipe'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->sortable(),

                Tables\Columns\TextColumn::make('link')
                    ->limit(30)
                    ->url(fn($record) => $record->link, true),

                Tables\Columns\TextColumn::make('icon')
                    ->label('Icon Class'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSocialMedia::route('/'),
            'create' => Pages\CreateSocialMedia::route('/create'),
            'edit' => Pages\EditSocialMedia::route('/{record}/edit'),
        ];
    }
}
