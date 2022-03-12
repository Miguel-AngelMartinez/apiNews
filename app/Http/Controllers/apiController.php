<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class apiController extends Controller
{
    public function api_GA(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('POST', 'https://mexi-news.herokuapp.com/api/view');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $news = [];
        foreach ($resultado['data'] as $new) {
            $news[] = [
                'id' => $new['id'],
                'name' => $new['name'],
                'author' => $new['autor'],
                'title' => $new['title'],
                'description' => $new['description'],
                'url' => $new['url'],
                'urlToImage' => $new['urlToImage'],
                'publishedAt' => $new['publishedAt'],
                'content' => $new['content'],
            ];
        }

        return $news;
    }

    public function apiNews(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://newsapi.org/v2/top-headlines?country=us&apiKey=cc31aa076ca642d682a5f897434548df');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $news = [];
        foreach ($resultado['articles'] as $new) {
            $news[] = [
                'id' => $new['source']['id'],
                'name' => $new['source']['name'],
                'author' => $new['author'],
                'title' => $new['title'],
                'description' => $new['description'],
                'url' => $new['url'],
                'urlToImage' => $new['urlToImage'],
                'publishedAt' => $new['publishedAt'],
                'content' => $new['content'],
            ];
        }

        return $news;
    }


    public function apiMarco(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('POST', 'https://notideportes.herokuapp.com/api/apiDeporte1');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $news = [];
        foreach ($resultado['Deporte'] as $new) {
            $news[] = [
                'titulo' => $new['titulo'],
                'contenido' => $new['contenido'],
                'autor' => $new['autor'],
                'imagen' => $new['imagen']
            ];
        }

        return $news;
    }


      public function jalar(){

        return view('apis1',['news'=>$this->apiNews()]);
    }
    public function jalar2(){

            return view('apis2',['news'=>$this->api_GA()]);
    }
    public function jalar3(){

        return view('apis3',['news'=>$this->apiMarco()]);
}

    public function creacion_api(){

        return response()->json(["estatus"=>"ok","unidades"=>$this->apiNews()]);
    }
}
