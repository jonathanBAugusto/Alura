<?php

namespace src;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $httpClient;
    private $crawler;
    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar($url): array
    {
        try {
            $resposta = $this->httpClient->request('GET', $url);

            $html = $resposta->getBody();

            $this->crawler->addHtmlContent($html);
            $elements = $this->crawler->filter('span.card-curso__nome');
            $cursos = [];
            foreach ($elements as $element) {
                $cursos[] = $element->textContent;
            }

            return $cursos;
        } catch (\Exception $ex) {
            return [];
        }
    }
}
