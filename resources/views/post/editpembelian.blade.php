@extends('layouts.app')
@section('title', 'pembelian Edit')
@section('content')
<div class="wrapper">
  <h1>Edit pembelian</h1>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <a href="{{ route('pembelians.index')}}"><button style="background:blue; margin:5px; padding:10px 5px; border-radius:5px; cursor: pointer;">Kembali</button></a>

  <form method="POST" action="{{ url('pembelians',$post->id ) }}">
    @csrf
    @method('PUT')
    <p>
    <label>No_po:</label>
    <input name="No_po" value="{{ $post->No_po }}" type="text" placeholder="No_po..."> 
    </p>
    <p>
    <label>Suplier:</label>
    <input name="Suplier" value="{{ $post->Suplier }}" type="text" placeholder="Suplier...">
    </p>
    <p>
    <label>Kode:</label>
    <input name="Kode" value="{{ $post->Kode }}" type="text" placeholder="Kode...">
    </p>
    <p>
    <label>Nama_Barang:</label>
    <input name="Nama_Barang" value="{{ $post->Nama_Barang }}" type="text" placeholder="Nama_Barang...">
    </p>
    <p>
    <label>Satuan:</label>
    <input name="Satuan" value="{{ $post->Satuan }}" type="text" placeholder="Satuan...">
    </p>
    <p>
    <label>Qty:</label>
    <input name="Qty" value="{{ $post->Qty }}" type="text" placeholder="Qty...">
    </p>
    <p>
    <label>Harga_Satuan:</label>
    <input name="Harga_Satuan" value="{{ $post->Harga_Satuan }}" type="text" placeholder="Harga_Satuan...">
    </p>
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection

