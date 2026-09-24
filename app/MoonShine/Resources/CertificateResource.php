<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Certificate;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Certificate>
 */
class CertificateResource extends ModelResource
{
    protected string $model = Certificate::class;

    protected string $title = 'Сертификаты';

    protected string $column = 'name';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Наименование', 'name'),
            Image::make('Файл', 'file'),
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
                Text::make('Наименование', 'name'),
                Image::make('Файл', 'file')->removable(),
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
            Text::make('Наименование', 'name'),
            Image::make('Файл', 'file'),
            Number::make('Порядок вывода', 'sort_order'),
        ];
    }

    /**
     * @param  Certificate  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'sort_order' => ['required', 'integer'],
            'file' => [$item->exists ? 'sometimes' : 'required', 'image', 'max:5120'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Наименование', 'name'),
        ];
    }
}
