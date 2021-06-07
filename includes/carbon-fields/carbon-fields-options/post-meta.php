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
->show_on_
->add_tab('Первый экран', [
    Field::make_text('button_text', 'Кнопка'),
    Field::make( 'complex', 'hero_slider', __( 'Слайдер' ) )
    ->setup_labels( $slider_labels )
    ->add_fields( array(
        Field::make( 'text', 'title', __( 'Заголовок' ) )
        ->set_default_value( 
            [
                'title' => 'Дом у озера'
            ]),
        Field::make( 'image', 'photo', __( 'Изображение' ) )
        ->set_value_type( 'url' )
    ) )
 ] )
 ->add_tab('О нас', [
    Field::make( 'text', 'about_title', __( 'Заголовок' ) ),
    Field::make('rich_text', 'about_text', __( 'Текст' )),
    Field::make( 'text', 'about_subtitle', __( 'Подзаголовок' ) ),
    Field::make('rich_text', 'about_checkmark', __( 'Преимущества"' )),
    Field::make( 'rich_text', 'about_subtext', __( 'Мелким шрифтом' ) )
 ] )
 ->add_tab('Новости', [
     Field::make_text('news_title', 'Заголовок'),
    Field::make_media_gallery('news_slider', 'Слайдер новостей')
 ] )
 ->add_tab('Номера', [
     Field::make_text('rooms_title', 'Заголовок'),
    Field::make_rich_text('rooms_description', 'Описание')
] )
->add_tab('Услуги', [
    Field::make_text('services_title', 'Заголовок'),
    Field::make_rich_text('services_items', 'Список бесплатных услуг')
] )
->add_tab('Платные услуги', [
    Field::make_text('services_paid_title', 'Заголовок'),
    Field::make_rich_text('services_paid_items', 'Список платных услуг')
] )
->add_tab('Группы', [
    Field::make_text('group_title', 'Заголовок'),
    Field::make_text('group_subtitle', 'Подзаголовок'),
    Field::make_rich_text('group_items', 'Список услуг для групп')
] )
->add_tab('Галерея', [
    Field::make_text('gallery_title', 'Заголовок'),
    Field::make_media_gallery('gallery', 'Галерея')
] )
->add_tab('Контакты', [
    Field::make_text('contacts_title', 'Заголовок'),
    Field::make_text('contacts_subtitle', 'Подзаголовок')
] );

