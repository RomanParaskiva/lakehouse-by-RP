<? 

if(!defined('ABSPATH')){
    exit;
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;

$slider_labels = array(
    'plural_name' => 'Слайды',
    'singular_name' => 'Слайд',
);

$services_labels = array(
    'plural_name' => 'Услуги',
    'singular_name' => 'Услуга',
);

Container::make( 'post_meta', __( 'Опции страницы' ) )
->show_on_post_type('page')
->add_tab('Первый экран', [
    Field::make_text('button_text', 'Кнопка')->set_width(50),
    Field::make( 'complex', 'hero_slider', __( 'Слайдер' ) )
    ->setup_labels( $slider_labels )
    ->add_fields( array(
        Field::make( 'text', 'title', __( 'Заголовок' ) )->set_width(50)
        ->set_default_value( 
            [
                'title' => 'Дом у озера'
            ]),
        Field::make( 'image', 'photo', __( 'Изображение' ) )->set_width(50)
        ->set_value_type( 'url' )
    ) )
 ] )
 ->add_tab('О нас', [
    Field::make( 'text', 'about_title', __( 'Заголовок' ) )->set_width(50),
    Field::make('rich_text', 'about_text', __( 'Текст' ))->set_width(50),
    Field::make( 'text', 'about_subtitle', __( 'Подзаголовок' ) )->set_width(50),
    Field::make('rich_text', 'about_checkmark', __( 'Преимущества"' )),
    Field::make( 'rich_text', 'about_subtext', __( 'Мелким шрифтом' ) )->set_width(50)
 ] )
 ->add_tab('Новости', [
     Field::make_text('news_title', 'Заголовок')->set_width(50),
    Field::make_media_gallery('news_slider', 'Слайдер новостей')->set_width(50)
 ] )
 ->add_tab('Номера', [
     Field::make_text('rooms_title', 'Заголовок')->set_width(50),
    Field::make_rich_text('rooms_description', 'Описание')
] )
->add_tab('Услуги', [
    Field::make_text('services_title', 'Заголовок')->set_width(50),
    Field::make_rich_text('services_items', 'Список бесплатных услуг')
] )
->add_tab('Платные услуги', [
    Field::make_text('services_paid_title', 'Заголовок'),
    Field::make_rich_text('services_paid_items', 'Список платных услуг')
] )
->add_tab('Группы', [
    Field::make_text('group_title', 'Заголовок')->set_width(50),
    Field::make_text('group_subtitle', 'Подзаголовок')->set_width(50),
    Field::make_rich_text('group_items', 'Список услуг для групп')
] )
->add_tab('Галерея', [
    Field::make_text('gallery_title', 'Заголовок')->set_width(50),
    Field::make_media_gallery('gallery', 'Галерея')->set_width(50)
] )
->add_tab('Контакты', [
    Field::make_text('contacts_title', 'Заголовок')->set_width(50),
    Field::make_text('contacts_subtitle', 'Подзаголовок')->set_width(50)
] );

Container::make( 'post_meta', __( 'Опции номера' ) )
->show_on_post_type('room')
->add_tab('Опции номера', [
    Field::make_text('room_price', 'Стоимость')->set_required(true)->set_width(50)->set_attribute('type', 'number'),
    Field::make_media_gallery('room_gallery', 'Изображения номера')->set_width(50)->set_required(true),
    Field::make_rich_text('room_description', 'Описание комнаты')
]);

