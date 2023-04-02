<?php
require_once 'vendor/autoload.php'; // Подключение библиотеки Twig
// Создание экземпляра шаблонизатора Twig
$loader = new \Twig\Loader\FilesystemLoader('templates'); // указание папки с шаблонами
$twig = new \Twig\Environment($loader);

// Замена меток на значения
$title = "Магазин автомобилей";
$url = 'contacts.twig';
// Отображение шаблона с замененными метками
echo $twig->render("base.twig", [
    'title' =>$title,
    'url' =>$url
]);
?>