@extends('templating.template')

@section('nav')
@section('content')
 <form action="/save" method="post">
    @csrf
    <div>
      <label for="nama">Nama</label>
      <input type="text" name="nama">
    </div>
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama">
    </div> 
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama">
    </div>  
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama">
    </div> 

    <button type="submit">Simpan</button>
 </form>


@endsection 