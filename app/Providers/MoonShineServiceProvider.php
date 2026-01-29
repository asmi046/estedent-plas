<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\SeoDataResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\AdvantageResource;
use App\MoonShine\Resources\BannerResource;
use App\MoonShine\Resources\ControlOrganizationResource;
use App\MoonShine\Resources\LegalDocumentResource;
use App\MoonShine\Resources\PriceResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\SpecialistResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                SeoDataResource::class,
                MenuResource::class,
                PageResource::class,
                ContactResource::class,
                AdvantageResource::class,
                BannerResource::class,
                ControlOrganizationResource::class,
                LegalDocumentResource::class,
                PriceResource::class,
                ServiceResource::class,
                SpecialistResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ]);
    }
}
