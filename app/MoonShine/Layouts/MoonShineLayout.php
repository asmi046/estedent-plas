<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\SeoDataResource;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\MenuManager\MenuItem;
use MoonShine\UI\Components\Layout\Layout;
use App\MoonShine\Resources\AdvantageResource;
use App\MoonShine\Resources\BannerResource;
use App\MoonShine\Resources\ControlOrganizationResource;
use App\MoonShine\Resources\LegalDocumentResource;
use App\MoonShine\Resources\PriceResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\SpecialistResource;

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {

        return [
            MenuItem::make(
                static fn () => __('SEO'),
                SeoDataResource::class,
            )->icon('chart-bar-square'),
            MenuItem::make('Меню', MenuResource::class)->icon('bars-3-bottom-left'),
            MenuItem::make('Страницы', PageResource::class)->icon('document-text'),
            MenuItem::make('Контакты', ContactResource::class)->icon('chat-bubble-bottom-center-text'),
            ...parent::menu(),
            MenuItem::make('Advantages', AdvantageResource::class),
            MenuItem::make('Banners', BannerResource::class),
            MenuItem::make('ControlOrganizations', ControlOrganizationResource::class),
            MenuItem::make('LegalDocuments', LegalDocumentResource::class),
            MenuItem::make('Prices', PriceResource::class),
            MenuItem::make('Services', ServiceResource::class),
            MenuItem::make('Specialists', SpecialistResource::class),
        ];
    }

    /**
     * @param  ColorManager  $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}
