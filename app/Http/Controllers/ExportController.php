<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\produccion;
use App\Exports\embarques;
use App\Exports\ordenes;
use App\Exports\calidad;


use App\Models\production;

//modificar esta madre
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportar_produccion()
    {
        return Excel::download(new produccion, 'production.xlsx');
    }

    public function exportar_ordenes()
    {
        return Excel::download(new ordenes, 'ordenes.xlsx');
    }

    public function exportar_embarques()
    {
        return Excel::download(new embarques, 'embarques.xlsx');
    }
}
