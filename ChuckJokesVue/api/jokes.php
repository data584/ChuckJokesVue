<?php
/**
 * API endpoint que devuelve las bromas de Chuck Norris en formato JSON.
 * Este archivo es consumido por la app Vue mediante fetch().
 *
 * Rutas:
 *   GET /ChuckJokesVue/api/jokes.php
 */

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Cache-Control: no-cache, no-store, must-revalidate");

$chuck = [
    [
        "icon_url" => "https://assets.chucknorris.host/img/avatar/chuck-norris.png",
        "value"    => "Chuck Norris can skydive into outer space."
    ],
    [
        "icon_url" => "https://assets.chucknorris.host/img/avatar/chuck-norris.png",
        "value"    => "The chief export of Chuck Norris is pain."
    ],
    [
        "icon_url" => "https://assets.chucknorris.host/img/avatar/chuck-norris.png",
        "value"    => "Chuck Norris doesn't read books. He stares them down until he gets the information he wants."
    ],
    [
        "icon_url" => "https://assets.chucknorris.host/img/avatar/chuck-norris.png",
        "value"    => "Time waits for no man. Unless that man is Chuck Norris."
    ],
    [
        "icon_url" => "https://assets.chucknorris.host/img/avatar/chuck-norris.png",
        "value"    => "If you spell Chuck Norris in Scrabble, you win. Forever."
    ],
];

echo json_encode([
    "status" => "ok",
    "count"  => count($chuck),
    "chuck"  => $chuck
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
