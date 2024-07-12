<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?string $navigationGroup = 'Treści';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Tytuł oraz treść')
                    ->icon('heroicon-o-pencil')
                    ->collapsible()
                    ->collapsed()
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Tytuł')
                            ->unique(ignoreRecord: true)
                            ->required()
                            ->minLength(3)
                            ->maxLength(255)
                            ->live(debounce: 1000)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->readonly()
                            ->label('Slug')
                            ->required()
                            ->minLength(3)
                            ->maxLength(255)
                            ->helperText('Przyjazny adres url który wygeneruje się automatycznie na podstawie nazwy apartamentu.'),

                        RichEditor::make('content')
                            ->label('Treść posta')
                            ->required()
                            
                            ->disableToolbarButtons([
                                'codeBlock',
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Miniaturka')
                    ->icon('heroicon-o-photo')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->label('Miniaturka')
                            ->directory('blog-thumbnails')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'podaj-lapsie-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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
                    ]),
                Section::make('Publikacja')
                    ->icon('heroicon-o-clock')
                    ->collapsible()
                    ->collapsed()
                    ->columns(3)
                    ->schema([
                        DateTimePicker::make('published_at')
                            ->label('Data publikacji')
                            ->default(now())
                            ->columns(1)
                            ->required(),
                            
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->defaultSort('published_at', 'desc')
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->searchable()
                    ->sortable()
                    ->description(function (Post $record) {
                        return Str::limit(strip_tags($record->content), 40);
                    }),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Data publikacji')
                    ->badge()
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y H:i');
                    })
                    ->color(function ($state) {
                        if ($state <= Carbon::now()) {
                            return 'success';
                        } else {
                            return 'danger';
                        }
                    })
                    ->sortable(),
            

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Posty');
    }
    public static function getPluralLabel(): string
    {
        return ('Posty');
    }

    public static function getLabel(): string
    {
        return ('Post');
    }
}
