<?php
/* zad.4.1 */
$clorki = ["Blck", "yllow", "whte"];

echo $clorki[abs(-2)];

echo '<br>';
/* zad.4.2 */
$product = [
    'name' => 'jajko',
    'price' => 420,
    'in_stock' => 'tak'
];

echo $product['in_stock'];

echo '<br>';
/* zad.4.3 */
$numbers = [1, 2, 3, 4, 5, 6];
array_push($numbers,7, 8 ,9 );
echo $numbers[mt_rand(0,8)];

echo '<br>';

/* zad.4.4 */
$fruit = ['monkebanana', 'bajojaajo','trangleosus','hattakepomidor'];

if (in_array('monkebanana',$fruit)){
    echo 'Jest banaknka lolki bolki sekcja elo mordo eszker meszker';
} else {
    echo 'Nie ma elo mordo eszker meszker skibidi toilet goni mnie śpiewając tą piosenke jesteśmy nie pokonani';
};
echo '<br>';
// lubie małę dzieci lubie małę dzieci lubie małę dzieci lubie małę dzieci lubie małę dzieci
/* zad.4.5 */
$niemaprzebac = [
    'imie' => 'Imie',
    'nazwisko' => 'Nazwisko',
    'tak' => 'nie'
];
$kyjs = array_keys($niemaprzebac);
print_r($kyjs);
