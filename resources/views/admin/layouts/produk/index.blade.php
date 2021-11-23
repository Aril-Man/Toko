@extends('main')
 
@section('title', 'Produk')
 
@section('sidebar')
    @include('admin.layouts.aside')
@endsection
 
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.create') }}"> Tambah Produk</a>
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
                                  <th scope="col">ID Barang</th>
                                  <th scope="col">Nama Barang</th>
                                  <th scope="col">ID Merek</th>
                                  <th scope="col">ID Distributor</th>
                                  <th scope="col">Tanggal Masuk</th>
                                  <th scope="col">Harga Barang</th>
                                  <th scope="col">Stok Barang</th>
                                  <th scope="col">Keterangan</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                <tbody>
                @foreach ($data as $produk)
                <tr>
                        <td>{{ $produk->id }}</td>
                        <td>{{ $produk->nama_barang }}</td>
                        <td>{{ $produk->merek->nama_merek }}</td>
                        <td>{{ $produk->distributor->nama_distributor }}</td>
                        <td>{{ $produk->tanggal_masuk }}</td>
                        <td>{{ $produk->harga_barang }}</td>
                        <td>{{ $produk->stok_barang }}</td>
                        <td>{{ $produk->keterangan }}</td>
                        <td>
                            <form action="#" method="POST">
 
                               
 
                                <a class="btn btn-primary" href="{{route ('admin.edit',$produk->id) }}">Edit</a>
                                <a  class="btn btn-sm btn-danger" href="{{route('admin.destroy', $produk->id)}}" class="badge badge-danger">Delete</a>
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
