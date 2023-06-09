<?php
require_once 'vendor/autoload.php'; // Подключение библиотеки Twig
// Создание экземпляра шаблонизатора Twig
$loader = new \Twig\Loader\FilesystemLoader('templates'); // указание папки с шаблонами
$twig = new \Twig\Environment($loader);

// Замена меток на значения
$title = "Магазин автомобилей";
$url = 'main_page.twig';
$arrival_cars = [
    [
        'image' => 'https://avatars.mds.yandex.net/get-verba/3587101/2a00000186371facfbe93727d461bd1c4381/cattouchret',
        'name' => 'BMW X5',
        'price' => 'Цена: $50,000',
        'description' => 'Спортивный внедорожник премиум класса. Габаритные размеры новой генерации составляют: длина 4922 мм,
                ширина 2004 мм, высота 1745 мм, а колесная база- 2975 мм. Что касается дорожного просвета, то он
                ожидаемо велик и составляет целых 214 миллиметров.'
    ],
    [
        'image' => 'https://avatars.mds.yandex.net/get-verba/1604130/2a0000017f6f0d9fc86002cd5db3ef657769/cattouchret',
        'name' => 'Audi Q7',
        'price' => 'Цена: $55,000',
        'description' => 'Среднеразмерный кроссовер, выпускаемый компанией Audi. Его премьера состоялась в сентябре 2005 года на
                Международном автосалоне во Франкфурте. Audi Q7 базируется на концепте Audi Pikes Peak quattro,
                представленном в 2003 году на автосалоне в Детройте. Audi Q7 создан на платформе "E".'
    ],
    [
        'image' => 'https://avatars.mds.yandex.net/get-verba/997355/2a00000172941c6c3790d9dd90368d94242a/cattouchret',
        'name' => 'Mercedes-Benz GLS',
        'price' => 'Цена: $60,000',
        'description' => 'Можно назвать внедорожной версией S-класса. Это флагманский внедорожник премиального сегмента с тремя
                рядами сидений. Со сменой поколения, он ощутимо прибавил в размерах. Его длина увеличилась на 77 мм и
                составляет 5207 мм, а ширина- 1956 мм, что на 22 мм больше чем у предшественника.'
    ]
];

$cars = [
    [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/2018_Toyota_Camry_LE_front_6.13.18.jpg/1200px-2018_Toyota_Camry_LE_front_6.13.18.jpg',
        'name' => 'Toyota Camry',
        'price' => 'Цена: $30,000',
        'description' => 'Просторный салон Toyota Camry, позволяющий комфортно разместиться и водителю и пассажирам, передовые
                технологии, мультимедийная система с поддержкой Apple Carplay© и Android Auto©, а также специальная
                акценты в интерьере в Camry GR SPORT позволят вам раствориться в комфорте и наслаждаться каждой минутой
                своего пути.'
    ],
    [
        'image' => 'http://avatars.mds.yandex.net/get-verba/216201/2a00000160980ca5bec115545a8d2e75dd38/cattouchretcr',
        'name' => 'Honda Civic',
        'price' => 'Цена: $25,000',
        'description' => 'Honda Civic одиннадцатого поколения представлен весной 2021 года в кузове седан. Автомобиль претерпел
                серьезные стилистические изменения по сравнению с «космическим» предшественником. Формы стали более
                традиционными и понятными, интерьер – строгим и привычным. Одно остается неизменным – острая и
                интересная управляемость Хонды, которую в новой модели создатели попытались вывести на новый уровень.
                Японцы заявляют, что новая машина будет не только лучше рулиться, но и приобретет в комфорте и
                звукоизоляции салона.'
    ],
    [
        'image' => 'https://avatars.mds.yandex.net/get-verba/997355/2a0000016eb273ff6dd826c5442bfb75440e/cattouchret',
        'name' => 'Nissan Altima',
        'price' => 'Цена: $28,000',
        'description' => 'Новая серия Nissan U 13 для североамериканского рынка получила название Altima. Она увидела свет в 1993
                году. Округлый дизайн Altima с ниспадающей линией багажника получился весьма запоминающимся и хотя бы
                уже одним этим делал автомобиль непохожим на прочие японские авто. Трансмиссия является передне- или
                полноприводной. Гамма двигателей включает в себе: 1,8 л./ 125 л.с., 2,4 л./150 л.с., 2 л/ 145 л.с. Этот
                двигатель с турбонаддувом развивает мощность до 210 л.с. (только на полноприводной версии).'
    ]
];

// Отображение шаблона с замененными метками
echo $twig->render("base.twig", [
    'title' =>$title,
    'url' =>$url,
    'arrival_cars' => $arrival_cars,
    'cars' => $cars
]);
?>