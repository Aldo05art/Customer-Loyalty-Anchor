@extends('layouts.content')
@section('content')
<div class="container d-flex justify-content-center align-items-center mt-4">
    <div class="row w-100">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h2>Data Transaksi</h2>
                <a href="{{ route('transaksi.create') }}" class="btn btn-primary" style="border-radius: 20px; color: white;">
                    + Tambah Data
                </a>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <table class="table table-bordered table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">nomor HP</th>
                                <th scope="col" class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $i)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $i->nama }}</td>
                                    <td>{{ $i->email }}</td>
                                    <td>{{ $i->no_hp }}</td>
                                    <td>
                                        <a href="{{ route('transaksi.edit', $i) }}" class="btn btn-warning btn-sm" style="border-radius: 20px; color: white;">
                                            Update
                                        </a>
                                        <form action="{{ route('transaksi.destroy', $i) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 20px;">
                                                Hapus
                                            </button>
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
</div>

@endsection
