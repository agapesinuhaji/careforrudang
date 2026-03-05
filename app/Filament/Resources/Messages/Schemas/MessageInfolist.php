<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MessageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Pengirim')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Nama')
                            ->badge()
                            ->color('primary'),

                        TextEntry::make('created_at')
                            ->label('Tanggal Kirim')
                            ->dateTime('d M Y - H:i')
                            ->icon('heroicon-o-calendar'),

                    ])
                    ->columns(2),

                Section::make('Isi Kritik')
                    ->schema([
                        TextEntry::make('kritik')
                            ->label('')
                            ->html()
                            ->placeholder('Tidak ada kritik yang disampaikan.')
                            ->columnSpanFull(),
                    ])
                    ->collapsible(),

                Section::make('Isi Curhat')
                    ->schema([
                        TextEntry::make('curhat')
                            ->label('')
                            ->html()
                            ->placeholder('Tidak ada curhat yang disampaikan.')
                            ->columnSpanFull(),
                    ])
                    ->collapsible(),

                Section::make('Isi Saran')
                    ->schema([
                        TextEntry::make('saran')
                            ->label('')
                            ->html()
                            ->placeholder('Tidak ada saran yang disampaikan.')
                            ->columnSpanFull(),
                    ])
                    ->collapsible(),

            ]);
    }
}