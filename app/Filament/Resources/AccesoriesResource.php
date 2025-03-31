<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccesoriesResource\Pages;
use App\Filament\Resources\AccesoriesResource\RelationManagers;
use App\Models\Accesories;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Accesory;
use Filament\Forms\Components\TextInput;

class AccesoriesResource extends Resource
{
    protected static ?string $model = Accesory::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Accesorios';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre'),

                TextInput::make('name'),

                TextInput::make('price')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                $query->where('category', "Accesorios");
            })
            ->columns([
                Tables\Columns\TextColumn::make("nombre")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make("price")
                    ->sortable()
                    ->searchable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAccesories::route('/'),
        ];
    }
}
