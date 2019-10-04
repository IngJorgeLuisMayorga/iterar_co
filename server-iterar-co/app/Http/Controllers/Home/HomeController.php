<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller {

    public function index(){

    }

    public function view()
    {

        SEOMeta::setTitle("ITERAR CO | HOME ");
        SEOMeta::setDescription(" DESCRIPTION ");
        SEOMeta::setKeywords(["SDF","SDFSD","sDFSDF"]);

        SEOMeta::setRobots("NOINDEX, FOLLOW");
        SEOMeta::setCanonical("");

        SEOMeta::setPrev("");
        SEOMeta::setNext("");

        SEOMeta::addMeta("geo.region", "CO-DC");
        SEOMeta::addMeta("geo.placename", "Chapinero");
        SEOMeta::addMeta("geo.position", "4.683216;-74.048345");
        SEOMeta::addMeta("ICBM", "4.683216, -74.048345");

        OpenGraph::setTitle("TITULO");
        OpenGraph::setUrl("RUL");
        OpenGraph::setSiteName("ITERAR");
        OpenGraph::setDescription("DESCRIPTION");
        OpenGraph::addImage("ASDFASDFASD");
        OpenGraph::addImages([]);
        OpenGraph::addProperty("","");
        OpenGraph::addProperty("","");
        OpenGraph::addProperty("","");
        OpenGraph::addProperty("","");
        OpenGraph::addProperty("","");

        TwitterCard::setTitle("");
        TwitterCard::setType("");
        TwitterCard::setSite("");
        TwitterCard::setDescription("");
        TwitterCard::setUrl("");
        TwitterCard::setImage("");
        TwitterCard::addValue("", "");
        TwitterCard::addValue("", "");
        TwitterCard::addValue("", "");
        TwitterCard::addValue("", "");
        TwitterCard::addValue("", "");

        JsonLd::setTitle('Homepage');
        JsonLd::setDescription('This is my page description');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');

        return view('home.index');
    }


}
