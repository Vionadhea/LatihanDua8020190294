@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <h3>Ini Halaman User</h3>
                   <table class="table table-light table-hover table-bordered">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>Judul</th>
                               <th>Pengarang</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($objek as $item )
                           <tr>
                               <td>{{ $loop->iteration }}</td>
                               <td>{{ $item->id }}</td>
                               <td>{{ $item->judul }}</td>
                               <td>{{ $item->pengarang }}</td>
                               <td>{{ $item->created_at }}</td>
                               <td>
                                   <a href="{{ url('admin/user/edit/'.$item->id,[]) }}" class="btn btn-info btn-sm">
                                    Edit
                                   </a>
                                   <a href="{{ url('admin/user/hapus/'.$item->id,[]) }}" class="btn btn-danger btn-sm"
                                    onlick="return confirm('Apakah anda yakin mau menghapus data ini?')">
                                    Hapus 
                                   </a>
                                   <a href="{{ url('admin/user/tambah/'.$item->id,[]) }}" class="btn btn-info btn-sm">
                                    Tambah
                                   </a>
                                   <a href="{{ url('admin/user/simpan/'.$item->id,[]) }}" class="btn btn-danger btn-sm"
                                    onlick="return confirm('Apakah anda yakin menyimpan data ini?')">
                                    Simpan  
                                   </a>
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
