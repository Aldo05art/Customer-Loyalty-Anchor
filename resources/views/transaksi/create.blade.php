@extends('layouts.content')
@section('content')
   <div class="container d-flex justify-content-center align-items-center mt-4" >
      <div class="row w-100">
         <div class="col-md-8 mx-auto">
            <div class="card shadow">
               <form class="form-horizontal" action="{{ route('transaksi.store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                     <h4 class="card-title text-center mb-4">Menambahkan Produk</h4>
                     <div class="form-group row">
                        <label for="nama" class="col-sm-3 text-end control-label col-form-label">Nama</label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" id="nama" name="nama"
                              placeholder="Masukkan Nama" value="{{ old('nama') }}" />
                           @error('nama')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                     </div>
                     <div class="form-group row mt-3">
                        <label for="email" class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                           <input type="email" class="form-control" id="email" name="email"
                              placeholder="Masukkan Harga..." value="{{ old('email') }}" />
                           @error('email')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                     </div>
                     <div class="form-group row mt-3">
                        <label for="no_hp" class="col-sm-3 text-end control-label col-form-label">Nomor Hp</label>
                        <div class="col-sm-9">
                           <input type="number" class="form-control" id="no_hp" name="no_hp"
                              placeholder="Masukkan Harga..." value="{{ old('no_hp') }}" />
                           @error('no_hp')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                     </div>
                     <div class="border-top mt-4">
                        <div class="card-body text-center">
                           <button type="submit" class="btn btn-primary px-4 py-2" style="border-radius: 20px;">
                              Submit
                           </button>
                           <a href="{{ route('sales.index') }}" class="btn btn-secondary px-4 py-2"
                              style="border-radius: 20px;">
                              Kembali
                           </a>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection
