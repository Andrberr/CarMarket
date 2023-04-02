<?php
require_once 'vendor/autoload.php'; // Подключение библиотеки Twig
// Создание экземпляра шаблонизатора Twig
$loader = new \Twig\Loader\FilesystemLoader('templates'); // указание папки с шаблонами
$twig = new \Twig\Environment($loader);

// Замена меток на значения
$title = "Магазин автомобилей";
$url = 'about_page.twig';

$parts = [
    [
        'image' => '../images/logo.png',
        'head' => 'О нас',
        'fir_descr' => 'Магазин автомобилей предоставляет широкий выбор автомобилей от ведущих мировых производителей.',
        'sec_descr' => 'Наша миссия - предложить нашим клиентам лучшие автомобили по доступной цене и предоставить
                высококачественный сервис.',
    ],
    [
        'image' => '../images/commercial_car.png',
        'head' => 'Наша история',
        'fir_descr' => 'Магазин автомобилей был основан в 1995 году и с тех пор стал лидером на рынке продаж автомобилей.',
        'sec_descr' => 'Наш опыт и профессионализм позволяют нам предоставлять нашим клиентам самый лучший сервис и качественные
                автомобили.',
    ],
    [
        'image' => '',
        'head' => 'Наша команда',
        'fir_descr' => 'Мы работаем только с лучшими профессионалами своего дела, которые помогут вам выбрать автомобиль, который
                подходит именно вам.',
        'sec_descr' => 'Наша команда состоит из высококвалифицированных продавцов, сервисных инженеров и менеджеров по продажам,
                которые всегда готовы помочь вам.',
    ]
];

// Отображение шаблона с замененными метками
echo $twig->render("base.twig", [
    'title' => $title,
    'url' => $url,
    'parts' => $parts
]);
?>