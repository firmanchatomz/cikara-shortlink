@extends('layouts.admin')

@section('title','Daftar Referer Site')

@section('container')
    
<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="{{ url('/cikara/home') }}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Referer Site</li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <header class="mb-3 text-right">
        </header>
        <div class="table-responsive">
            <table class="table table-hover bg-white table-bordered" id="data-table">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th scope="col">Link Referer</th>
                    <th scope="col">Total View</th>
                </tr>
            </thead>
            <tbody class="text-capitalize text-left">
                @foreach ($referer as $item)
                    <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }} </th>
                        <td><a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a></td>
                        <td>{{ $item->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>	



@endsection