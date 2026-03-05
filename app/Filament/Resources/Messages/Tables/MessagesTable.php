<?php

namespace App\Filament\Resources\Messages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MessagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),

                TextColumn::make('kritik')
                    ->label('Kritik')
                    ->limit(50) 
                    ->html()
                    ->wrap()
                    ->searchable(),

                TextColumn::make('curhat')
                    ->label('Curhat')
                    ->limit(50)
                    ->html()
                    ->wrap()
                    ->searchable(),

                TextColumn::make('saran')
                    ->label('Saran')
                    ->limit(50)
                    ->html()
                    ->wrap()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Date')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}