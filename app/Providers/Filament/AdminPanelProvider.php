<?php

namespace App\Providers\Filament;

use App\Filament\Resources\CertificateResource\Widgets\CertificateCountWidget;
use App\Filament\Resources\GalleryResource\Widgets\GalleryCountWidget;
use App\Filament\Resources\PostResource\Widgets\PostStatWidget;
use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Blade;
use Filament\Navigation\NavigationItem;
use Filament\Http\Middleware\Authenticate;
use Filament\Support\Facades\FilamentView;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('/pajdekRedaktor')
            ->login()
            ->passwordReset()
            ->brandLogo('/assets/logo/logo.webp')
            ->favicon('/assets/favicon/favicon.ico')
            ->brandLogoHeight(fn () => auth()->check() ? '40px' : '100px')
            ->colors([
                'primary' => Color::hex('#3facaa'),
                'gray' => Color::Slate
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
          
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                PostStatWidget::class,
                CertificateCountWidget::class,
                GalleryCountWidget::class,


            ])
            ->pages([
                Pages\Dashboard::class,
            ])
            ->navigationItems([
                NavigationItem::make('Blog')
                    ->url('https://podajlapsie.pl/blog', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-book-open'),
                NavigationItem::make('Edytor zdjęć')
                    ->url('https://www.iloveimg.com/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-scissors'),
                NavigationItem::make('Chat GPT')
                    ->url('https://chatgpt.com/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-cpu-chip'),
                NavigationItem::make('Analityka')
                    ->url('https://analytics.google.com/analytics/web/#/p449467389/reports/reportinghub?params=_u..nav%3Dmaui', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-chart-pie'),

            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    public function register(): void
    {
        parent::register();
        FilamentView::registerRenderHook('panels::body.end', fn (): string => Blade::render("@vite('resources/js/app.js')"));
    }
}
