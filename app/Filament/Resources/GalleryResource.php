<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GalleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GalleryResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Treści';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->label('Zdjęcie')
                ->directory('gallery')
                ->getUploadedFileNameForStorageUsing(
                    fn (TemporaryUploadedFile $file): string => 'podaj-lapsie-zdjecia' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                )
                ->image()
                ->maxSize(4096)
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Galeria');
    }
    public static function getPluralLabel(): string
    {
        return ('Galeria');
    }

    public static function getLabel(): string
    {
        return ('Galeria');
    }
}
