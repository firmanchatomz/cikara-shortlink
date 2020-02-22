@extends('layouts.admin')

@section('title','Daftar Shortlink')

@section('container')
    
<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="{{ url('/cikara/home') }}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Shortlink</li>
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
                    <th scope="col">Shortlink</th>
                    <th scope="col">Total View</th>
                    <th scope="col">Link Tujuan</th>
                </tr>
            </thead>
            <tbody class="text-capitalize text-left">
                @foreach ($slink as $item)
                    <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }} </th>
                        <td>{{ $item->link_short }}</td>
                        <td>{{ $item->view }}</td>
                        <td class="text-lowercase">{{ $item->link_original }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>	


    <!-- model -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-primary" id="exampleModalLabel"><i class="mdi mdi-file-plus"></i> Tambah Jurnal</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ url('/pedagang') }}">
            @csrf
            <table width="100%" class="font-weight-bold">
              <tr>
                <td width="150">
                  <div class="form-group">
                    <label for="">Nama Pedagang</label>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" required>
                  </div>
                </td>
              </tr>
               <tr>
                <td width="150">
                  <div class="form-group">
                    <label for="">Email</label>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <input type="email" name="email" placeholder="masukkan email" class="form-control" required>
                  </div>
                </td>
              </tr>
              <tr>
               <td width="150">
                 <div class="form-group">
                   <label for="">Password</label>
                 </div>
               </td>
               <td>
                 <div class="form-group">
                   <input type="password" name="password" placeholder="********" class="form-control" required>
                 </div>
               </td>
             </tr>
               <tr>
                <td width="150">
                  <div class="form-group">
                    <label for="">Nama Lapak</label>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <input type="text" name="nama" placeholder="masukkan nama lapak" class="form-control" required>
                  </div>
                </td>
              </tr>
            </table>
            <p><sup class="text-danger font-weight-bold">*</sup> <strong>Wajib diisi ! </strong></p>
            <div class="form-group text-right">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
       </form>
      </div>
    </div>
  </div>
  

@endsection