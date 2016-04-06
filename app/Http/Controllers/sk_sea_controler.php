<?php

namespace App\Http\Controllers;

use Request;
use App\sk;
use App\Http\Requests;
use App\import_by_sea;
use DB;
use Excel;

class sk_sea_controler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $row=DB::table('import_by_seas')
        ->join('sks','import_by_seas.id','=','sks.id')
        ->select('import_by_seas.name','sks.*')
        ->get();
        return view('page.sk',compact('row'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row_last=import_by_sea::all()->last();
        return view('page.create_sk',compact('row_last'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        sk::create(Request::all());
        return redirect('import/sk_sea');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      function DateToIndo($date) {
      $romawi=[null,'I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII'];
      $BulanIndo = array("Januari", "Februari", "Maret",
						   "April", "Mei", "Juni",
						   "Juli", "Agustus", "September",
						   "Oktober", "November", "Desember");
      $tahun = substr($date, 0, 4);
      $bulan = substr($date, 5, 2);
      $tgl   = substr($date, 8, 2);
      $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
      $result_romawi = $romawi[(int)$bulan-1];
      return($result);
      }
      function Romawi($date) {
      $romawi=[null,'I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII'];
      $bulan = substr($date, 5, 2);
      $result = $romawi[(int)$bulan];
      return($result);
      }

      Excel::load('file/format_sk.xlsx',function($doc) use($id) {
          $row=DB::table('sks')
          ->join('import_by_seas','sks.id','=','import_by_seas.id')
          ->where('sks.id', $id)
          ->select('import_by_seas.name','sks.*')
          ->get();
          $sheet = $doc->setActiveSheetIndex(0);
          foreach ($row as $rows) {
            $sheet->setCellValue('G7', $rows->id);
            $sheet->setCellValue('H7', '/ SKU / AIIA /'.' '.Romawi(date('Y-m-d')).' '.'/'.' '.date('Y',strtotime($rows->date_bl)));
            $sheet->setCellValue('E31', $rows->name);
            $sheet->setCellValue('E33', $rows->kapal.' '.'/'.' '.$rows->voy);
            $sheet->setCellValue('E34', $rows->bl.' '.'/'.' '.DateToIndo($rows->date_bl));
            $sheet->setCellValue('E35', $rows->jumlah_barang.' '.$rows->satuan);
          }
      })->download('xlsx');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=sk::FindOrFail($id);
        $row_last=import_by_sea::FindOrFail($id);
        return view('page.edit_sk',compact(['row','row_last']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        sk::FindOrFail($id)->update(Request::all());
        return redirect('import/sk_sea');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_get($id)
    {
      sk::FindOrFail($id)->delete();
      return redirect('import/sk_sea');
    }
}
