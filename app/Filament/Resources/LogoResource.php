<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogoResource\Pages;
use App\Filament\Resources\LogoResource\RelationManagers;
use App\Models\Logo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LogoResource extends Resource
{
    protected static ?string $model = Logo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function canCreate(): bool
    {
        return \App\Models\Logo::count() === 0;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('logo_1')
                    ->label('Logo Utama')
                    ->image()
                    ->directory('logos')
                    ->imageEditor()
                    ->helperText('Logo utama (header)')
                    ->nullable(),

                Forms\Components\FileUpload::make('logo_2')
                    ->label('Logo Alternatif')
                    ->image()
                    ->directory('logos')
                    ->imageEditor()
                    ->helperText('Logo alternatif (footer)')
                    ->nullable(),

                Forms\Components\FileUpload::make('logo_icon')
                    ->label('Logo Icon / Favicon')
                    ->image()
                    ->directory('logos')
                    ->imageEditor()
                    ->helperText('Ukuran kecil / favicon')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo_1')
                    ->label('Logo Utama')
                    ->height(40),

                Tables\Columns\ImageColumn::make('logo_2')
                    ->label('Logo Alternatif')
                    ->height(40),

                Tables\Columns\ImageColumn::make('logo_icon')
                    ->label('Icon')
                    ->height(40),
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
            'index' => Pages\ListLogos::route('/'),
            'create' => Pages\CreateLogo::route('/create'),
            'edit' => Pages\EditLogo::route('/{record}/edit'),
        ];
    }
}
