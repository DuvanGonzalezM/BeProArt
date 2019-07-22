<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /*
    {
    	// Crear un flujo
    	$opciones = array(
    	  'http'=>array(
    		'method'=>"GET",
    		'header'=>"Accept-language: es\r\n" .
    				  "Cookie: COUNTRY=CO;\r\n"
    	  )
    	);
    	$s = 'zapatos';
    	$contexto = stream_context_create($opciones);
    	$DominioAmazon = 'https://www.amazon.com';
    	$url = $DominioAmazon.'/s?k='.$s.'&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&ref=nb_sb_noss_1';
    	$página_inicio = file_get_contents($url, false, $contexto);
    	$crawler = new Crawler($página_inicio);
    	$a = 'div.a-section.a-spacing-medium';
    	$hrefs = $crawler->filter($a)->children();
    	// $hoja = file_get_contents($hrefs);
    	// $hrefs = $crawler->filter($a)->extract(['href']);
    	$imgs = $crawler->filter($a.'>div>img')->extract(['src']);
    	// $texts = $crawler->filter('span.a-size-base-plus.a-color-base.a-text-normal')->extract('_text');
    	$crawler->clear();


    	$divs = [];
    	// for($i = 0; $i < count($hrefs); $i++){
    	// 	// $item = file_get_contents($DominioAmazon.$hrefs[$i], false, $contexto);
    	// 	// $itemH = new Crawler($item);
    	// 	$divs[$i]['img'] = $imgs[$i];
    	// 	$divs[$i]['descript'] = $texts[$i];
    	// 	// $img = $itemH->filter('img#landingImage')->extract(['src']);
    	// 	$divs[] = $img[0];
    	// }
    	// return count($items).' '.$div.'<br>'.count($prices).' '.$price.'<br>'.count($imgs).' '.$img.'<br>'.count($texts).' '.$text;
    	// return count($imgs);
    	print_r( $hrefs );
    	return "hola";
    	// return $divs;
    	// return $url;
    	// return view('welcome', compact('imgs', 'hrefs', 'DominioAmazon', 'texts'));
    }
     */
}
