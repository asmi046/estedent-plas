<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\LegalDocument;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<LegalDocument>
 */
class LegalDocumentResource extends ModelResource
{
    protected string $model = LegalDocument::class;

    protected string $title = 'Правовые документы';

    protected string $column = 'name';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Название', 'name'),
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
                Text::make('Название', 'name'),
                Number::make('Порядок', 'order'),
                Text::make('Файл', 'file'),
                Text::make('Ссылка', 'link'),
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
            Text::make('Название', 'name'),
            Number::make('Порядок', 'order'),
            Text::make('Файл', 'file'),
            Text::make('Ссылка', 'link'),
        ];
    }

    /**
     * @param  LegalDocument  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string', 'max:700'],
            'order' => ['required', 'integer'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Название', 'name'),
        ];
    }
}
