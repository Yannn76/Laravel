@extends('templating.template')

@section('title', 'menu')
@section('nav')
<div class="container my-4">
 <div class="row">
     <div class="col-12">
         <a href="/menu/add">
            <div class="d-grid gap-2 col-6 mx-auto my-3" style="background-color: darkblue">
                <button class="btn text-light"  type="button">Tambah</button>
            </div>
         </a>
     </div>
 </div>
 <div class="row">
    <div class="col-12">
       <table class="table table-bordered border-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Keterangan</th>
                    <th style="max-widht: 200px"></th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $row ->kode_makanan }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->kategori }}</td>
                        <td>{{ $row->harga }}</td>
                        <td>{{ $row->ket }}</td>
                        <td>
                            <a href="/menu/{{ $row->kode_makanan }}/edit">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                            <a href="/menu/{{ $row->kode_makanan }}/delete">
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </a>
                        </td>
                    </tr>
               @endforeach  
            </tbody>
       </table>
    </div>
 </div>
</div> 
@endsection
@endsection 