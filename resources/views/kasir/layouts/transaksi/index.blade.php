@extends('main')
 
@section('title', 'Transaksi')
 
@section('sidebar')
    @include('kasir.layouts.aside')
@endsection
 
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('kasir.create_transaksi') }}"> Tambah Transaksi</a>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
 
 
            <div class="card-body">
                <table class="table">
                <thead>
                                <tr>
                                  <th scope="col">ID Transaksi</th>
                                  <th scope="col">ID Barang</th>
                                  <th scope="col">ID User</th>
                                  <th scope="col">Jumlah Beli</th>
                                  <th scope="col">Total Harga</th>
                                  <th scope="col">Tanggal Beli</th>
                                  
                              </tr>
                          </thead>
                <tbody>
                @foreach ($data as $produk)
                <tr>
                        <td>{{ $produk->id }}</td>
                        <td>{{ $produk->id_transaksi }}</td>
                        <td>{{ $produk->id_user}}</td>
                        <td>{{ $produk->jumlah_beli }}</td>
                        <td>{{ $produk->total_harga }}</td>
                        <td>{{ $produk->tanggal_beli }}</td>
                        <td>
                            <form action="#" method="POST">
 
                               
 
                                
                                
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
