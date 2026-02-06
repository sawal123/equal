<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoResource\Pages;
use App\Filament\Resources\SeoResource\RelationManagers;
use App\Models\Seo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeoResource extends Resource
{
    protected static ?string $model = Seo::class;

    protected static ?string $navigationGroup = 'Marketing';
    protected static ?string $navigationIcon  = 'heroicon-o-magnifying-glass-circle';

    protected static ?string $navigationLabel = 'SEO';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('page')
                    ->options([
                        'home' => 'Home',
                        'produk' => 'Produk',
                        'produk-detail' => 'Detail Produk',
                        'about' => 'About',
                        'contact' => 'Contact',
                    ])
                    ->required()
                    ->unique(ignoreRecord: true),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(60),

                Forms\Components\Textarea::make('meta_description')
                    ->rows(3)
                    ->maxLength(160),

                Forms\Components\TextInput::make('meta_keywords')
                    ->helperText('Pisahkan dengan koma'),

                Forms\Components\Section::make('Open Graph')
                    ->schema([
                        Forms\Components\TextInput::make('og_title'),
                        Forms\Components\Textarea::make('og_description')->rows(2),
                        Forms\Components\FileUpload::make('og_image')
                            ->image()
                            ->directory('seo'),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page')->badge(),
                Tables\Columns\TextColumn::make('title')->limit(30),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSeos::route('/'),
            'create' => Pages\CreateSeo::route('/create'),
            'edit' => Pages\EditSeo::route('/{record}/edit'),
        ];
    }
}
