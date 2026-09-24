<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Sales;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends ModelResource<Sales>
 */
class SalesResource extends ModelResource
{
    protected string $model = Sales::class;

    protected string $title = 'Акции';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение', 'img'),
            Text::make('Заголовок', 'title'),
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
                Text::make('Заголовок', 'title'),
                Slug::make('Слаг', 'slug')->from('title'),
                Image::make('Изображение', 'img')->removable(),
                Textarea::make('Краткое описание', 'short_description'),
                TinyMce::make('Текст', 'description'),
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
            Text::make('Заголовок', 'title'),
            Slug::make('Слаг', 'slug')->from('title'),
            Image::make('Изображение', 'img')->removable(),
            Textarea::make('Краткое описание', 'short_description'),
            TinyMce::make('Текст', 'description'),
        ];
    }

    /**
     * @param  Sales  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'img' => [$item->exists ? 'sometimes' : 'nullable', 'image', 'max:5120'],
            'description' => ['required', 'string'],
            'short_description' => ['nullable', 'string'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
        ];
    }
}
