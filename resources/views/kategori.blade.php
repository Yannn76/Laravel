@extends('templating.template')

@section('title', 'kategori')

@section('nav')
<div class="container my-4">
 <div class="row">
     <div class="col-12">
         <a href="/kategori/add">
            <div class="d-grid gap-2 col-6 mx-auto my-3" style="background-color: darkblue">
                <button class="btn text-light"  type="button">Tambah</button>
            </div>
         </a>
     </div>
 </div>
 <div class="row">
    <div class="col-12">
       <table class="table table-bordered border-dark">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Keterangan</th>
                    <th style="max-widht: 200px"></th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $row ->kode_kategori }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->ket }}</td>
                        <td>
                            
                            <button type="button" class="btn btn-primary">
                                <a class="text-light" href="/kategori/{{ $row->kode_kategori }}/edit">Edit</a>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <a class="text-light" href="/kategori/{{ $row->kode_kategori }}/delete">Hapus</a>
                            </button>
                      
                            
                        </td>
                    </tr>
               @endforeach  
            </tbody>
       </table>
    </div>
 </div>
</div> 
@endsection 