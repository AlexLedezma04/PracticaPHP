<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre'),
                TextInput::make('price')
                    ->label('Precio'),
                Toggle::make('adquired')
                    ->label('¿Adquirido?'),
            ]);
    }
}
