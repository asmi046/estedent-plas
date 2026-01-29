<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Specialist;
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
 * @extends ModelResource<Specialist>
 */
class SpecialistResource extends ModelResource
{
    protected string $model = Specialist::class;

    protected string $title = 'Специалисты';

    protected string $column = 'fio';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Image::make('Фото', 'photo'),
            Text::make('ФИО', 'fio'),
            Text::make('Должность', 'position'),
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
                Text::make('ФИО', 'fio'),
                Image::make('Фото', 'photo')->removable(),
                Slug::make('Слаг', 'slug')->from('fio'),
                Text::make('Должность', 'position'),
                TinyMce::make('Описание', 'description'),
                Number::make('Порядок', 'sort_order'),
                Json::make('Сертификаты', 'certificates')->fields([
                    Position::make(),
                ])->removable(),
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
            Text::make('ФИО', 'fio'),
            Image::make('Фото', 'photo')->removable(),
            Slug::make('Слаг', 'slug')->from('fio'),
            Text::make('Должность', 'position'),
            TinyMce::make('Описание', 'description'),
            Number::make('Порядок', 'sort_order'),
            Json::make('Сертификаты', 'certificates')->fields([
                Position::make(),
            ])->removable(),
        ];
    }

    /**
     * @param  Specialist  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'fio' => ['required', 'string'],
            'position' => ['required', 'string', 'max:150'],
            'sort_order' => ['required', 'integer'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('ФИО', 'fio'),
        ];
    }
}
