<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Price;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Price>
 */
class PriceResource extends ModelResource
{
    protected string $model = Price::class;

    protected string $title = 'Цены';

    protected string $column = 'service_name';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Наименование услуги', 'service_name'),
            Text::make('Цена', 'price'),
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
                Text::make('Код услуги', 'service_code'),
                Text::make('Наименование услуги', 'service_name'),
                Text::make('Цена', 'price'),
                Text::make('Единица измерения', 'unit'),
                Text::make('Раздел', 'section'),
                Number::make('Порядок вывода', 'sort_order'),
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
            Text::make('Код услуги', 'service_code'),
            Text::make('Наименование услуги', 'service_name'),
            Text::make('Цена', 'price'),
            Text::make('Единица измерения', 'unit'),
            Text::make('Раздел', 'section'),
            Number::make('Порядок вывода', 'sort_order'),
        ];
    }

    /**
     * @param  Price  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'service_code' => ['required', 'string', 'max:100'],
            'service_name' => ['required', 'string', 'max:400'],
            'price' => ['required', 'string', 'max:50'],
            'sort_order' => ['required', 'integer'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Наименование услуги', 'service_name'),
        ];
    }
}
