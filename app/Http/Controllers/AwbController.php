<?php

namespace App\Http\Controllers;

use App\Models\Awb;
use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;

class AwbController extends Controller
{
    // Menampilkan semua AWB (Read)
    public function index()
    {
        $awbs = Awb::all();
        return view('awbs.index', compact('awbs'));
    }

    // Menampilkan form untuk membuat AWB baru (Create)
    public function create()
    {
        return view('awbs.create');
    }

    // Menyimpan AWB baru ke database (Store)
    public function store(Request $request)
    {
        $request->validate([
            'airline' => 'required',
            'awb' => 'required',
            'hawb' => 'required',
            'destination' => 'required',
            'origin' => 'required',
            'total' => 'required|numeric'
        ]);

        Awb::create($request->all());
        return redirect()->route('awbs.index')->with('success', 'AWB created successfully.');
    }

    // Menampilkan detail AWB tertentu (Show)
    public function show(Awb $awb)
    {
        $generatorHTML = new BarcodeGeneratorHTML();
        $barcodeHTMLawbbc = $generatorHTML->getBarcode($awb->awbbc, $generatorHTML::TYPE_CODE_128);
        $barcodeHTMLhawb = $generatorHTML->getBarcode($awb->hawb, $generatorHTML::TYPE_CODE_128);

        $generatorPNG = new BarcodeGeneratorPNG();
        $barcodePNG = 'data:image/png;base64,' . base64_encode($generatorPNG->getBarcode($awb->awbbc, $generatorPNG::TYPE_CODE_128));

        return view('awbs.show', compact('awb', 'barcodeHTMLawbbc', 'barcodeHTMLhawb', 'barcodePNG'));
    }

    // Menampilkan form untuk edit AWB (Edit)
    public function edit(Awb $awb)
    {
        return view('awbs.edit', compact('awb'));
    }

    // Mengupdate AWB di database (Update)
    public function update(Request $request, Awb $awb)
    {
        $request->validate([
            'airline' => 'required',
            'awb' => 'required',
            'hawb' => 'required',
            'destination' => 'required',
            'origin' => 'required',
            'total' => 'required|numeric'
        ]);

        $awb->update($request->all());
        return redirect()->route('awbs.index')->with('success', 'AWB updated successfully.');
    }

    // Menghapus AWB dari database (Delete)
    public function destroy(Awb $awb)
    {
        $awb->delete();
        return redirect()->route('awbs.index')->with('success', 'AWB deleted successfully.');
    }

    public function print(Awb $awb)
    {
        $generatorHTML = new BarcodeGeneratorHTML();
        $barcodeHTMLawbbc = $generatorHTML->getBarcode($awb->awbbc, $generatorHTML::TYPE_CODE_128);
        $barcodeHTMLhawb = $generatorHTML->getBarcode($awb->hawb, $generatorHTML::TYPE_CODE_128);


        $generatorPNG = new BarcodeGeneratorPNG();
        $barcodePNG = 'data:image/png;base64,' . base64_encode($generatorPNG->getBarcode($awb->awbbc, $generatorPNG::TYPE_CODE_128));

        return view('awbs.print', compact('awb', 'barcodeHTMLawbbc', 'barcodeHTMLhawb', 'barcodePNG'));
    }


}
