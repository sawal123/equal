<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeSectionResource\Pages;
use App\Filament\Resources\HomeSectionResource\RelationManagers;
use App\Models\HomeSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeSectionResource extends Resource
{
    protected static ?string $model = HomeSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->options([
                        'hero' => 'Hero / Video',
                        'product' => 'Produk',
                        'about' => 'Tentang Perusahaan',
                        'cta' => 'Call To Action',
                    ])
                    ->reactive()
                    ->required(),

                Forms\Components\TextInput::make('title')
                    ->visible(fn($get) => in_array($get('type'), ['product', 'about', 'cta'])),

                Forms\Components\TextInput::make('subtitle')
                    ->visible(fn($get) => in_array($get('type'), ['hero', 'product'])),

                Forms\Components\RichEditor::make('content')
                    ->columnSpanFull()
                    ->visible(fn($get) => in_array($get('type'), ['product', 'about', 'cta'])),

                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('home-sections')
                    ->visible(fn($get) => in_array($get('type'), ['hero', 'product', 'about'])),

                Forms\Components\TextInput::make('video_url')
                    ->label('Video URL (Embed)')
                    ->visible(fn($get) => $get('type') === 'hero'),

                Forms\Components\TextInput::make('button_text')
                    ->visible(fn($get) => in_array($get('type'), ['product', 'about', 'cta'])),

                Forms\Components\TextInput::make('button_link')
                    ->url()
                    ->visible(fn($get) => in_array($get('type'), ['product', 'about', 'cta'])),

                Forms\Components\Toggle::make('is_active')
                    ->default(true),

                Forms\Components\Hidden::make('urutan')
                    ->default(fn() => \App\Models\HomeSection::max('urutan') + 1),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('urutan')
            ->reorderable('urutan')
            ->columns([
                Tables\Columns\TextColumn::make('type')->badge(),
                Tables\Columns\TextColumn::make('title')->limit(30),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
                Tables\Columns\TextColumn::make('urutan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListHomeSections::route('/'),
            'create' => Pages\CreateHomeSection::route('/create'),
            'edit' => Pages\EditHomeSection::route('/{record}/edit'),
        ];
    }
}
