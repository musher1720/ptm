<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\TB_STAF_Export;
use App\Imports\TB_STAF_Import;

class ExcelController extends Controller
{
    //
    public function importExportView()
    {
       return view('excel.index');
    }

    public function exportExcel($type)
    {
        return \Excel::download(new TB_STAF_Export, 'transactions.'.$type);
    }

    public function importExcel(Request $request)
    {
        \Excel::import(new TB_STAF_Import,$request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');

        return back();
    }
}