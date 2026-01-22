<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\ControlOrganization;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<ControlOrganization>
 */
class ControlOrganizationResource extends ModelResource
{
    protected string $model = ControlOrganization::class;

    protected string $title = 'Органы контроля';

    protected string $column = 'name';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Наименование организации', 'name'),
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
                Text::make('Наименование организации', 'name'),
                Text::make('Адрес', 'address'),
                Text::make('Телефоны', 'phones'),
                Text::make('Электронная почта', 'email'),
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
            Text::make('Наименование организации', 'name'),
            Text::make('Адрес', 'address'),
            Text::make('Телефоны', 'phones'),
            Text::make('Электронная почта', 'email'),
            Number::make('Порядок вывода', 'sort_order'),
        ];
    }

    /**
     * @param  ControlOrganization  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'phones' => ['required', 'string'],
            'sort_order' => ['required', 'integer'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Наименование организации', 'name'),
        ];
    }
}
