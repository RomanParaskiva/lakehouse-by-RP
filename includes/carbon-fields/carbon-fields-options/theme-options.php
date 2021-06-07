<? 

if(!defined('ABSPATH')){
    exit;
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки сайта' ) )
->add_tab('Общие настройки', [
    Field::make( 'image', 'site_logo', 'Логотип' )
    ->set_width( 150 )
 ] )

 ->add_tab('Контакты', [
    Field::make( 'text', 'site_phone', 'Контактный телефон' ),
    Field::make( 'text', 'site_phone_digits', 'Телефон в формате +79999999999' ),
    Field::make( 'text', 'site_email', 'Контактный email' ),
    Field::make( 'text', 'site_vk_link', 'Ссылка на ВК' ),
    Field::make( 'text', 'site_in_link', 'Ссылка на Инстаграм' ),
    Field::make( 'text', 'site_fb_link', 'Ссылка на FB' ),
    Field::make( 'text', 'site_adress', 'Адрес' ),
 ] )
 
 ->add_tab('Слайдер на главной', [
    Field::make( 'media_gallery', 'hero_slider', __( 'Изображения для слайдера' ) )
    ->set_type([ 'image'] )
 ] );

