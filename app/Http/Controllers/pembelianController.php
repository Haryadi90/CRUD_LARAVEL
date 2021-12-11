<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use Illuminate\Http\Request;

class pembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelians = pembelian::all(); 
        
   return view('post.indexpembelian',['pembelians' => $pembelians]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.formpembelian');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'No_po' => 'required|:pembelians|max:150',
            'Suplier' => 'required', 
            'Kode' => 'required', 
            'Nama_Barang' => 'required', 
            'Satuan' => 'required', 
            'Qty' => 'required', 
            'Harga_Satuan' => 'required', 

          ]);
            
          $input = $request->all();
        
          $post = pembelian::create($input);
         
          return back()->with('success',' Post baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = pembelian::findOrFail($id);
   
        return view('post.editpembelian', [
               'post' => $post
        ]);
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
        $request->validate([
            'No_po' => 'required:pembelians|max:150',
            'Suplier' => 'required', 
            'Kode' => 'required', 
            'Nama_Barang' => 'required', 
            'Satuan' => 'required', 
            'Qty' => 'required', 
            'Harga_Satuan' => 'required', 
          
         ]);
               
         $post = pembelian::find($id)->update($request->all()); 
                
         return back()->with('success',' Data telah diperbaharui!');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = pembelian::find($id);

        $post->delete();
     
        return back()->with('success',' Penghapusan berhasil.');
     
    }
    
}
