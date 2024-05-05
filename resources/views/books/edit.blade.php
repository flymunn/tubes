@extends('books.layout')
@section('content')
    <div class="card" style="margin: 20px">
        <div class="card-header">Edit buku</div>
        <div class="card-body">


            <form action="{{url('book/' .$books->id)}}" method="POST">
                @csrf   
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id">
                <label>Nama buku</label><br>
                <input type="text" name="nama" id="nama" value="{{$books->nama}}" class="form-control"><br>
                <label>Penerbit</label><br>
                <input type="text" name="penerbit" id="penerbit" value="{{$books->pengarang}}" class="form-control"><br>
                <label>Tahun terbit</label><br>
                <input type="text" name="tahun terbit" id="tahun terbit" value="{{$books->terbit}}" class="form-control"><br>
                <label>Harga</label><br>
                <input type="text" name="harga" id="harga" value="{{$books->harga}}" class="form-control"><br>
               
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>
    </div>
@endsection