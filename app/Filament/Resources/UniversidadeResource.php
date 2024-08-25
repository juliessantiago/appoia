<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UniversidadeResource\Pages;
use App\Filament\Resources\UniversidadeResource\RelationManagers;
use App\Models\Universidade;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UniversidadeResource extends Resource
{
    protected static ?string $model = Universidade::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome'), 
                Tables\Columns\TextColumn::make('sigla'), 
                Tables\Columns\TextColumn::make('codigo'), 
                Tables\Columns\TextColumn::make('cidade'), 



                
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListUniversidades::route('/'),
            'create' => Pages\CreateUniversidade::route('/create'),
            'edit' => Pages\EditUniversidade::route('/{record}/edit'),
        ];
    }    
}
