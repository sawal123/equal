<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function canCreate(): bool
    {
        return \App\Models\Contact::count() === 0;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('perusahaan')
                    ->label('Nama Perusahaan')
                    ->required(),

                Forms\Components\Textarea::make('alamat')
                    ->rows(3)
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('whatsapp')
                    ->label('Nomor WhatsApp')
                    ->tel()
                    ->helperText('Contoh: 628123456789'),

                Forms\Components\TextInput::make('telepon')
                    ->label('Nomor Telepon')
                    ->tel(),

                Forms\Components\TextInput::make('email')
                    ->email(),

                Forms\Components\Textarea::make('google_maps')
                    ->label('Link Google Maps (Embed / Share)')
                    ->rows(3)
                    ->columnSpanFull()
                    ->helperText('Contoh: https://maps.google.com/?q=...'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('perusahaan')->searchable(),
                Tables\Columns\TextColumn::make('alamat')->limit(30),
                Tables\Columns\TextColumn::make('whatsapp'),
                Tables\Columns\TextColumn::make('telepon'),
                Tables\Columns\TextColumn::make('email'),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
