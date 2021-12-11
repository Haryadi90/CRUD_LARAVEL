@extends('layouts.app')
@section('title', 'Buat Post Baru')
@section('content')
<div class="wrapper">
  <h1>Buat Post Baru</h1>
  <a href="{{ route('pembelians.index')}}"><button style="background:blue; margin:5px; padding:10px 5px; border-radius:5px; cursor: pointer;">Kembali</button></a>

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
  
  <form method="POST" action="{{ url('pembelians') }}">
    @csrf
    <label for="No_po">No_po</label>
    <input name="No_po" type="text" placeholder="No_po..."> <br><br>      
    <label for="Suplier">Suplier</label>
    <input name="Suplier" type="text" placeholder="Suplier..."><br><br>
    <label for="Kode">Kode</label>
    <input name="Kode" type="text" placeholder="Kode..."><br><br>
    <label for="Nama_Barang">Nama_Barang</label>
    <input name="Nama_Barang" type="text" placeholder="Nama_Barang..."><br><br>
    <label for="Satuan">Satuan</label>
    <input name="Satuan" type="text" placeholder="Satuan..."><br><br>
    <label for="Qty">Qty</label>
    <input name="Qty" type="text" placeholder="Qty..."><br><br>
    <label for="Harga_Satuan">Harga_Satuan</label>
    <input name="Harga_Satuan" type="text" placeholder="Harga_Satuan..."><br><br>
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
