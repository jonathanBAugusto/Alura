<?php
require('./vendor/autoload.php');
header ('Content-type: text/html; charset=UTF-8');

use GuzzleHttp\Client;
use src\Buscador;
use Symfony\Component\DomCrawler\Crawler;
echo '<pre>';

$client = new Client(['base_uri'=>'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');
foreach ($cursos as $curso) {
    showMsg($curso);
}