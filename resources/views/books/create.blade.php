@extends('books.layout')
@section('content')
    <div class="card" style="margin: 20px">
        <div class="card-header">Create New Books</div>
        <div class="card-body">

            <form action="{{url('book')}}" method="post">
                @csrf
               
               
                <label>nama Buku</label><br>
                <input type="text" name="nama" id="nama" class="form-control"><br>
                <label>penerbit</label><br>
                <input type="text" name="pengarang" id="pengarang" class="form-control"><br>
                <label>tahun terbit</label><br>
                <input type="text" name="terbit" id="terbit" class="form-control"><br>
                <label>Harga</label><br>
                <input type="text" name="harga" id="harga" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection