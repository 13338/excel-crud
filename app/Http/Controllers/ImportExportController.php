<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportExportController extends Controller
{
    /**
     * Show the form for importing a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import()
    {
        return view('import');
    }

    /**
     * Store a newly created resources in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function importation(Request $request)
    {
        $workers = (new FastExcel)->import($request->file('file')->getPathName(), function ($line) {
            return Worker::create([
                'secondname' => $line['Фамимлия'],
                'firstname' => $line['Имя'],
                'middlename' => $line['Отчество'],
                'birth_year' => $line['Год. рождения'],
                'position' => $line['Должность'],
                'salary' => $line['Зп в год.']
            ]);
        });
        return redirect()->route('worker.index');
    }

    /**
     * Generate export file
     *
     * @return \Illuminate\Http\Response
     */
    public function export()
    {
        //
    }

}
