Для ModelResource админ панели moonshine который находится в файле app\MoonShine\Resources\AdvantageResource.php проставь поля опираясь на миграцию database\migrations\2025_05_21_152823_create_advantages_table.php.

В класс ресурса добавь следующие поля:

protected string $title = 'Преимущества';
protected string $column = 'title';

В метод indexFields вынеси поля:

'title'
'order'

В методах formFields и detailFields распиши все поля кроме created_at и updated_at

При формировании полей используй ->comment в миграции в качестве имени поля. Пример: Text::make("Заголовок", 'title'),
Для полей миграции с именем img используй компонент Image так же добавляй ->dir(''), строку внутри оставляй пустой.  Пример: Image::make('Изображение', 'img')->dir(''),
Для полей миграции с именем slug используй компонент Slug.  Пример: Slug::make("Ссылка", 'slug'),
Для полей миграции с типом boolean используй компонент Switcher.  Пример: Switcher::make('По умолчанию', 'is_default'),
Для полей миграции с именем description используй компонент TinyMce.  Пример: TinyMce::make('Описание', 'description'),
Для полей миграции с типом оson используй компонент Json, с модификаторм ->fields в котором по умолчанию должно быть поле Position::make().  Пример:
Json::make('Галерея', 'images')->fields([
    Position::make(),
]),

Так же опираясь на миграцию заполни метод rules, при этом не включай поля которые в миграции помеченны nullable(), так же не включай поле slug

Так же добавь метод filters по следующему шаблону

    protected function filters(): iterable
    {
        return [

        ];
    }

В этом методе должны быть следующие поля:
 'title'
