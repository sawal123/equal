<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Illuminate\Support\Facades\Hash;
use Filament\Notifications\Notification;

class Profile extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Profile';
    protected static ?string $title = 'Profile Saya';
    protected static ?int $navigationSort = 99;

    protected static string $view = 'filament.pages.profile';

    /** 🔥 STATE FORM */
    public array $data = [];

    public function mount(): void
    {
        $user = auth()->user();

        // 🔥 INI YANG SERING TERLEWAT
        $this->form->fill([
            'name'  => $user->name,
            'email' => $user->email,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required(),

                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),

                Forms\Components\TextInput::make('password')
                    ->label('Password Baru')
                    ->password()
                    ->revealable()
                    ->helperText('Kosongkan jika tidak ingin mengganti password')
                    ->dehydrated(fn($state) => filled($state)),
            ])
            ->statePath('data'); // ❗ WAJIB
    }

    public function save(): void
    {
        $user = auth()->user();

        $user->update([
            'name'  => $this->data['name'],
            'email' => $this->data['email'],
        ]);

        if (!empty($this->data['password'])) {
            $user->update([
                'password' => Hash::make($this->data['password']),
            ]);
        }

        Notification::make()
            ->title('Profile berhasil diperbarui')
            ->success()
            ->send();
    }
}
