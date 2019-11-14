<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    private function ehRepetido($result, $numero)
    {
        foreach ($result as $element) {
            if ($numero == $element) {
                return true;
            }
        }
        return false;
    }

    public function gerarNumerosAleatorios(Request $request)
    {
        $qtdNumerosSimulados = $request->qtdNumeros;

        if ($qtdNumerosSimulados < 6 || $qtdNumerosSimulados > 15) { 
            $request->session()->flash('info', 'Você tem que jogar de 6 a 15 numeros');
            return redirect('/');
        }
        $result = [];
        while (count($result) < $qtdNumerosSimulados) {
            $numero = rand(1, 52);
            if (!$this->ehRepetido($result, $numero)) {
                array_push($result, $numero);
            }
        }
        return $result;
    }
}
