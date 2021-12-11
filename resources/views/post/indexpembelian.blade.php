@extends('layouts.app')
@section('title', 'Semua Post')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Semua Post</h1>
  <a href="{{ route('pembelians.create')}}"><button style="background:blue; margin:5px; padding:10px 5px; border-radius:5px; cursor: pointer;">Tambah</button></a>

  <table style="width:100%">
    <thead>
      <tr>
        <th>No_po</th>
        <th>Suplier</th>
        <th>Kode</th>
        <th>Nama_Barang</th>
        <th>Satuan</th>
        <th>Qty_Po</th>
        <th>Harga_Satuan</th>  
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pembelians as $post)
      <tr>
        <td style="width: 200px" >{{ $post->No_po}}</td>
        <td style="width: 500px" >{{ $post->Suplier }}</td>
        <td style="width: 500px" >{{ $post->Kode }}</td>
        <td style="width: 500px" >{{ $post->Nama_Barang }}</td>
        <td style="width: 500px" >{{ $post->Satuan }}</td>
        <td style="width: 500px" >{{ $post->Qty }}</td>
        <td style="width: 500px" >{{ $post->Harga_Satuan }}</td>
    
    
    
        <td style="width: 100px"> <a href= "http://localhost:8000/pembelians/{{ $post->id}}/edit"><button class="btn-green">Edit</button></a></td>
        <form method="POST" action="{{ url('pembelians', $post->id ) }}"> 
        @csrf
        @method('DELETE')
        <td style="width: 100px">   
        <a href= "http://localhost:8000/pembelians/{{ $post->id}}"><button class="btn-red">Hapus</button></td>
        </form>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection

