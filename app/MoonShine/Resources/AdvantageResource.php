<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Advantage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\TinyMce;

/**
 * @extends ModelResource<Advantage>
 */
class AdvantageResource extends ModelResource
{
    protected string $model = Advantage::class;

    protected string $title = 'Преимущества';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Название', 'title'),
            Number::make('Порядок', 'sort_order')->sortable(),
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
                Text::make('Название', 'title'),
                TinyMce::make('Описание', 'description'),
                Text::make('Иконка', 'icon'),
                Number::make('Порядок', 'sort_order'),
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
            Text::make('Название', 'title'),
            TinyMce::make('Описание', 'description'),
            Text::make('Иконка', 'icon'),
            Number::make('Порядок', 'sort_order'),
        ];
    }

    /**
     * @param  Advantage  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'icon' => ['required', 'string', 'max:500'],
            'sort_order' => ['required', 'integer'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Название', 'title'),
        ];
    }
}
