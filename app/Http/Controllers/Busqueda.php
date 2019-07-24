<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class Busqueda extends Controller
{
	public function result(){
		$busqueda = $_GET['seeker'];
		// Crear un flujo
		$opciones = array(
		  'http'=>array(
			'method'=>"GET",
			'header'=>"Accept-language: es\r\n" .
					  "Cookie: COUNTRY=CO;\r\n"
		  )
		);
		// $s = 'zapatos';
		$contexto = stream_context_create($opciones);
		$UrlAmazon = 'https://www.amazon.com/s?k='.$busqueda.'&s=price-asc-rank&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1563986782&ref=sr_st_price-asc-rank';
		$BusquedaAma = file_get_contents($UrlAmazon, false, $contexto);
		$AmaHtml = new Crawler($BusquedaAma);
		$items = $AmaHtml->filter('div.sg-col-4-of-24 > div > div:nth-child(1) > div:nth-child(1) > div:nth-child(2)');

		$divs = [];
		for($i = 0; $i < count($items); $i++){
			$imgs = $AmaHtml->filter('div.s-result-item:nth-child('.($i+1).') > div > div:nth-child(1) > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > span:nth-child(1) > a:nth-child(1) > div:nth-child(1) > img:nth-child(1)')->extract(['src']);
			$price1 = $AmaHtml->filter('div.sg-col-4-of-24:nth-child('.($i+1).') > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > div:nth-child(2) > div:nth-child(3) > div:nth-child(1) > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > a:nth-child(1) > span:nth-child(1) > span.a-offscreen')->extract('_text');
			$price2 = $AmaHtml->filter('div.sg-col-4-of-24:nth-child('.($i+1).') > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > div:nth-child(2) > div:nth-child(3) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > a:nth-child(1) > span:nth-child(1) > span.a-offscreen')->extract('_text');
			$text = $AmaHtml->filter('div.s-result-item:nth-child('.($i+1).') > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > div:nth-child(2) > div:nth-child(2) > div:nth-child(1) > div:nth-child(1) > h2:nth-child(1) > a:nth-child(1) > span:nth-child(1)')->extract('_text');
			$hrefs = $AmaHtml->filter('div.s-result-item:nth-child('.($i+1).') > div > div:nth-child(1) > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > span:nth-child(1) > a:nth-child(1)')->extract(['href']);
			$divs[$i]['img'] = $imgs[0];
			$divs[$i]['descript'] = $text[0];
			$divs[$i]['link'] = 'https://www.amazon.com'.$hrefs[0];
			if(isset($price1[0])){
				$divs[$i]['price'] = $price1[0];
			}
			elseif(isset($price2[0])){
				$divs[$i]['price'] = $price2[0];
			}
			else{
				$divs[$i]['price'] = "No se dio precio";
			}
		}
		$AmaHtml->clear();
		return view('busqueda', compact('divs'));
	}
}
