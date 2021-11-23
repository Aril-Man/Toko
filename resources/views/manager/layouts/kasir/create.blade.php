@extends('main')

@section('title', 'Create Kasir')

@section('sidebar')
    @include('manager.layouts.aside')
@endsection

@section('create')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Input Produk<small><code></code></small>
        </div>
        <form action="{{ route('manager.store_kasir') }}" method="POST">
            @csrf
        <div class="card-body card-block">
            <form action="" method="post" class="form-horizontal">
                <div class="row form-group">
               
                    <div class="col-6"><label for="name" class="form-control-label">Nama</label><input name="name" id="name" type="text" placeholder="Masukan Nama Kasir" class="form-control"></div>
                    <div class="col-6"><label for="email" class="form-control-label">Email</label><input name="email" id="email" type="email" placeholder="Masukan Email Kasir " class="form-control"></div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    <a class="btn btn-success" href="{{route ('manager.kasir') }}">Back</a>
                </div>
            </form>
        </div>   
    </div>
</div>
@endsection



