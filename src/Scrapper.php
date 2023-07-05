<?php

namespace Belai\Rendu1;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

class Scrapper
{
    public function scrapeData()
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'https://www.pokebip.com/pokedex/rouge-bleu'
        );
        $content = $response->getContent();

        $html = $content;

        $crawler = new Crawler($html);
        $crawler->filter('strong')->each(function (Crawler $node, $i){
            var_dump($node->text());
        });

       

    }
}
