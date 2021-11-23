<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Produk;



class KasirController extends Controller
{
    public function index()
    {
        return view('kasir.layouts.main');
    } 

    //Transaksi
    public function index_transaksi()
    {
       
        $data  = Transaksi::orderBy('created_at', 'DESC')->get();
        //dd($data);
        //$merek = Merek::all();
        return view('kasir.layouts.transaksi.index', compact('data'));//->withData($data);
 
    } 

    public function create_transaksi()
    {   
        $data  = Produk::where('stok_barang', '>', 0)->get();
        $transaksi = Transaksi::all();

        return view('kasir.layouts.transaksi.create', compact('data', 'transaksi'));
    }
 
    public function store_transaksi(Request $request)
    {
            
            $this->validate($request, [
                'id_transaksi'=>'required|string',
                'id_barang'=>'required',
                'id_user'=>'required',
                'jumlah_beli'=>'required',
                'total_harga'=>'required',
                'tanggal_beli'=>'required',
                ]);
        $data = Produk::find($request->id_barang);
        $total_harga = $request->jumlah_beli * $data->harga_barang;

        $sisa_stok = $data->stok_barang - $request->jumlah_beli;
        
        $data->update([
            'stok_barang' => $sisa_stok
        ]);
                Transaksi::create([
                    'id_transaksi' => $request->id_transaksi,
                    'id_barang' => $request->id_barang,
                    'id_user' => $request->id_user,
                    'jumlah_beli' => $request->jumlah_beli,
                    'total_harga' => $request->total_harga,
                    'tanggal_beli' => $request->tanggal_beli,
                ]);
    
            return redirect()->route('kasir.transaksi')
                            ->with('success','Produk Berhasil Ditambah');
    
        } 
       
}
