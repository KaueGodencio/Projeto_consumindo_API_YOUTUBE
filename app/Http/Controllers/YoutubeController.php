<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class YoutubeController extends Controller
{
    public function index()
    {
        // Verifica se há uma consulta de pesquisa na sessão
        $searchQuery = session('search_query');

        // Se houver uma consulta na sessão, usa-a para obter a lista de vídeos
        if ($searchQuery) {
            $videoLists = $this->_videoLists($searchQuery);
        } else {
            // Caso contrário, define uma consulta padrão (pode ser 'laravel' ou outra)
            $videoLists = $this->_videoLists('icasei');
        }

        return view('index', compact('videoLists'));
    }


    public function favoritos()
    {
        // Verifica se há uma consulta de pesquisa na sessão
        $searchQuery = session('search_query');

        // Se houver uma consulta na sessão, usa-a para obter a lista de vídeos
        if ($searchQuery) {
            $videoLists = $this->_videoLists($searchQuery);
        } else {
            // Caso contrário, define uma consulta padrão (pode ser 'laravel' ou outra)
            $videoLists = $this->_videoLists('icasei');
        }

        return view('index', compact('videoLists'));
    }

    public function results(Request $request)
    {
        // Define a consulta de pesquisa na sessão
        session(['search_query' => $request->search_query]);
    
        // Obtém a lista de vídeos com base na consulta de pesquisa
        $videoList = $this->_videoLists($request->search_query);
    
        // Verifica se há resultados válidos
        $items = [];
        if ($videoList && isset($videoList->items)) {
            $items = $videoList->items;
        }
    
        return view('results', compact('items'));
    }
    
    public function watch($id)
    {
        // Obtém informações sobre o vídeo específico com base no ID fornecido
        $singleVideo = $this->_singleVideo($id);
    
        // Verifica se há uma consulta de pesquisa na sessão
        $searchQuery = session('search_query');
    
        // Se houver uma consulta na sessão, usa-a para obter a lista de vídeos
        if ($searchQuery) {
            $videoLists = $this->_videoLists($searchQuery);
        } else {
            // Caso contrário, define uma consulta padrão (pode ser 'laravel' ou outra)
            $videoLists = $this->_videoLists('laravel');
        }
    
        return view('watch', compact('singleVideo', 'videoLists'));
    }
    

    // Método para obter os resultados da pesquisa
    protected function _videoLists($keywords)
    {
        $part = 'snippet';
        $country = 'BR'; // Defina o código correto para o país desejado
        $apiKey = config('services.youtube.api_key');
        $maxResults = 12;
        $youTubeEndPoint = 'https://www.googleapis.com/youtube/v3/search';
    
        $response = Http::get($youTubeEndPoint, [
            'part' => $part,
            'maxResults' => $maxResults,
            'regionCode' => $country,
            'type' => 'video', // Ajuste conforme necessário
            'key' => $apiKey,
            'q' => $keywords,
        ]);
    
        if ($response->successful()) {
            return json_decode($response->body());
        } else {
            // Tratar o erro de acordo com a resposta da API
            return null;
        }
    }
    
    protected function _singleVideo($id)
    {
        $apiKey = config('services.youtube.api_key');
        $part = 'snippet';
        $url = "https://www.googleapis.com/youtube/v3/videos?part=$part&id=$id&key=$apiKey";

        $response = Http::get($url);

        if ($response->successful()) {
            $results = json_decode($response->body());
            File::put(storage_path('app/public/single.json'), $response->body());
            return $results;
        } else {
            // Tratar o erro de acordo com a resposta da API
            return null;
        }
    }
}
