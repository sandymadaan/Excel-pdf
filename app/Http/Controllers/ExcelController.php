<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use PDF;

class ExcelController extends Controller
{
    public function importView()
    {
       return view('import');
    }

    public function import(Request $request) 
    {
       if($request->hasFile('file')){
           $path = $request->file('file')->getRealPath();
           $data = \Excel::load($path)->get();
            if($data->count()){
                $i = 1;
                foreach ($data as $value) {
                    $html = '';
                    $view = view('pdf.employee')->with(compact('value'));
                    $html .= $view->render();
                    PDF::loadHTML($html)->save(public_path().'/bulk_invoices/'.$i.'.pdf');
                    $i++;
                }
            }
        } 
        return back()->with('success','PDFs created successfully!');
    }
}
