<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Certificate;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CertificateResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Resources\CertificateResource\RelationManagers;

class CertificateResource extends Resource
{
    protected static ?string $model = Certificate::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static ?string $navigationGroup = 'Treści';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->label('Certyfikat')
                ->directory('certificates')
                ->getUploadedFileNameForStorageUsing(
                    fn (TemporaryUploadedFile $file): string => 'podaj-lapsie-certyfikaty' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                )
                ->image()
                ->maxSize(8192)
                ->optimize('webp')
                ->imageEditor()
                ->imageEditorAspectRatios([
                    null,
                    '16:9',
                    '4:3',
                    '1:1',
                ])
                ->required()
                ->columnSpanFull(),

                Toggle::make('horizontal')->label('Zjdęcie pionowe')->onIcon('heroicon-o-star'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
         ->reorderable('sort')
            ->defaultSort('sort', 'asc')
        ->columns([
            Stack::make([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Miniaturka')
                       ->width(190)
                       ->height(150)
                
            ]),
        ])
        ->contentGrid([
            'md' => 2,
            'xl' => 4,
        ])
          
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListCertificates::route('/'),
            'create' => Pages\CreateCertificate::route('/create'),
            'edit' => Pages\EditCertificate::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Certyfikaty');
    }
    public static function getPluralLabel(): string
    {
        return ('Certyfikaty');
    }

    public static function getLabel(): string
    {
        return ('Certyfikat');
    }
}
