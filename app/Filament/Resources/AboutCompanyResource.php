<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutCompanyResource\Pages;
use App\Filament\Resources\AboutCompanyResource\RelationManagers;
use App\Models\AboutCompany;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutCompanyResource extends Resource
{
    protected static ?string $model = AboutCompany::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function canCreate(): bool
    {
        return \App\Models\AboutCompany::count() === 0;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar Perusahaan')
                    ->image()
                    ->directory('about-company')
                    ->imageEditor()
                    ->nullable(),

                Forms\Components\RichEditor::make('about')
                    ->label('Tentang Perusahaan')
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('visi')
                    ->label('Visi')
                    ->rows(3)
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('misi')
                    ->label('Misi')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->height(60),

                Tables\Columns\TextColumn::make('about')
                    ->label('Tentang')
                    ->limit(40),

                Tables\Columns\TextColumn::make('visi')
                    ->limit(30),

                Tables\Columns\TextColumn::make('misi')
                    ->limit(30),
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
            'index' => Pages\ListAboutCompanies::route('/'),
            'create' => Pages\CreateAboutCompany::route('/create'),
            'edit' => Pages\EditAboutCompany::route('/{record}/edit'),
        ];
    }
}
