<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class ReciboController extends Controller
{
    public function index()
    {
        return view('recibo.index');
    }

    public function create(Request $request)
    {
        
        $dataExtenso = $this->qualData($request->tData);
        return PDF::loadView('recibo.impressao', compact(['request', 'dataExtenso']))->setPaper('a6', 'landscape')->stream('invoice.pdf');   
    }

    public function qualData(string $data = null) : string
    {
        $mes = date('m', strtotime($data));
        switch ($mes) {
            case '01':
                $nomeMes = "Janeiro";
                break;
            case '02':
                $nomeMes = "Fevereiro";
                break;
            case '03':
                $nomeMes = "Março";
                break;
            case '04':
                $nomeMes = "Abril";
                break;
            case '05':
                $nomeMes = "Maio";
                break;
            case '06':
                $nomeMes = "Junho";
                break;
            case '07':
                $nomeMes = "Julho";
                break;
            case '08':
                $nomeMes = "Agosto";
                break;
            case '09':
                $nomeMes = "Setembro";
                break;
            case '10':
                $nomeMes = "Outubro";
                break;
            case '11':
                $nomeMes = "Novembro";
                break;
            case '12':
                $nomeMes = "Dezembro";
                break;
            
            default:
                $nomeMes = "Sem mês de referencia";
                break;
        }
        $dataExtenso = date('d', strtotime($data))." de ".$nomeMes." de ".date('Y', strtotime($data));
        return $dataExtenso;
    }
}
