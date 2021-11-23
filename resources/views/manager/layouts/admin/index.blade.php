@extends('main')
 
@section('title', 'User Admin')
 
@section('sidebar')
    @include('manager.layouts.aside')
@endsection
 
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('manager.create_admin') }}"> Tambah User</a>
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
                                  <th scope="col">No</th>
                                  <th scope="col">Nama </th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                <tbody>
                @foreach ($data as $produk)
                <tr>
                        <td>{{ $produk->id }}</td>
                        <td>{{ $produk->name}}</td>
                        <td>{{ $produk->email }}</td>
                        <td>
                            <form action="#" method="POST">
 
                               
 
                                <a class="btn btn-sm btn-danger" href="{{route('manager.destroy_admin', $produk->id)}}" class="badge badge-danger">Delete</a>
                               
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
