<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Slug;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\TinyMce;

/**
 * @extends ModelResource<Service>
 */
class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Услуги';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Image::make('Изображение', 'img'),
            Text::make('Название услуги', 'title'),
            Number::make('Порядок', 'order')->sortable(),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Название услуги', 'title'),
                Text::make('Краткое название услуги', 'short_title'),
                Slug::make('Слаг', 'slug')->from('title'),
                Image::make('Изображение', 'img')->removable(),
                Number::make('Порядок', 'order'),
                Text::make('Шаблон лендинга', 'template'),
                Text::make('Цена', 'price'),
                Text::make('Время выполнени', 'time'),
                Json::make('Секции страницы', 'sections')->fields([
                    Position::make(),
                ])->removable(),
                TinyMce::make('Описание раздела', 'description'),
            ]),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Название услуги', 'title'),
            Text::make('Краткое название услуги', 'short_title'),
            Slug::make('Слаг', 'slug')->from('title'),
            Image::make('Изображение', 'img')->removable(),
            Number::make('Порядок', 'order'),
            Text::make('Шаблон лендинга', 'template'),
            Text::make('Цена', 'price'),
            Text::make('Время выполнени', 'time'),
            Json::make('Секции страницы', 'sections')->fields([
                Position::make(),
            ])->removable(),
            TinyMce::make('Описание раздела', 'description'),
        ];
    }

    /**
     * @param  Service  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string'],
            'short_title' => ['required', 'string'],
            'order' => ['required', 'integer'],
            'price' => ['required', 'string'],
            'time' => ['required', 'string'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Название услуги', 'title'),
        ];
    }
}
