<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Banner;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Banner>
 */
class BannerResource extends ModelResource
{
    protected string $model = Banner::class;

    protected string $title = 'Баннеры';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Image::make('Изображение', 'img'),
            Text::make('Название раздела', 'name'),
            Text::make('Заголовок', 'title'),
            Number::make('Порядок вывода', 'sort_order')->sortable(),
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
                Text::make('Название раздела', 'name'),
                Text::make('Заголовок', 'title'),
                Number::make('Порядок вывода', 'sort_order'),
                Image::make('Изображение', 'img')->removable(),
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
            Text::make('Название раздела', 'name'),
            Text::make('Заголовок', 'title'),
            Number::make('Порядок вывода', 'sort_order'),
            Image::make('Изображение', 'img')->removable(),
        ];
    }

    /**
     * @param  Banner  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'sort_order' => ['required', 'integer'],
            'img' => ['required', 'string', 'max:500'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Text::make('Название раздела', 'name'),
        ];
    }
}
