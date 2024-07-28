<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class ValorUf extends Component
{
    public $valor;

    public function __construct()
    {
        $response = Http::get('https://api.sbif.cl/api-sbifv3/recursos_api/uf?apikey=YOUR_API_KEY&formato=json');
        $this->valor = $response->json()['UFs'][0]['Valor'];
    }

    public function render()
    {
        return view('components.valor-uf');
    }
}
