Для ресурсов  админ панели moonshine которые описанны в таблице ниже проставь поля опираясь на соответствующие миграции из этой же таблицы.

| Ресурс moonshine | Миграция |
| -- | -- |
| app/MoonShine/Resources/AdvantageResource.php | database/migrations/2025_11_20_130045_create_advantages_table.php |
| app/MoonShine/Resources/BannerResource.php | database/migrations/2025_11_20_130044_create_banners_table.php |
| app/MoonShine/Resources/ControlOrganizationResource.php | database/migrations/2025_11_25_145147_create_control_organizations_table.php |
| app/MoonShine/Resources/LegalDocumentResource.php | database/migrations/2026_01_22_000000_create_legal_documents_table.php |
| app/MoonShine/Resources/PriceResource.php | database/migrations/2025_11_20_130044_create_prices_table.php |
| app/MoonShine/Resources/ServiceResource.php | database/migrations/2025_12_11_125903_create_services_table.php |
| app/MoonShine/Resources/SpecialistResource.php | database/migrations/2025_11_20_130030_create_specialists_table.php |

В класс ресурса добавь поле $title и присвой ему значение соответствующее по смыслу назначению ресурса.

Так же в класс ресурса добавь поле $column если в ресурсе есть поле title то присвой $column = 'title' если нет топ одбери поле идентифицирующее элемент модели ресурса.

В метод indexFields вынеси поля:

'title'
'order' (если есть)

В методах formFields и detailFields распиши все поля кроме created_at и updated_at

При формировании полей используй ->comment в миграции в качестве имени поля. Пример: Text::make("Заголовок", 'title') если нет такого назови поле по смыслу,
Для полей миграции с именами img, image, picture используй компонент Image так же добавляй ->removable().  Пример: Image::make('Изображение', 'img')->removable(),
Для полей миграции с именем slug используй компонент Slug.  Пример: Slug::make("Ссылка", 'slug'),
Для полей миграции с типом boolean используй компонент Switcher.  Пример: Switcher::make('По умолчанию', 'is_default'),
Для полей миграции с именем description, comment, text используй компонент TinyMce.  Пример: TinyMce::make('Описание', 'description'),
Для полей миграции с типом оson используй компонент Json, с модификаторм ->fields в котором по умолчанию должно быть поле Position::make(). Обязательно добавляй модификатор ->removable() для обеспечения возможности удаления записи. Пример:
Json::make('Галерея', 'images')->fields([
    Position::make(),
])->removable(),

Так же опираясь на миграцию заполни метод rules, при этом не включай поля которые в миграции помеченны nullable(), так же не включай поле slug

Так же добавь метод filters по следующему шаблону

    protected function filters(): iterable
    {
        return [

        ];
    }

В этом методе должны быть следующие поля:
 'title'
