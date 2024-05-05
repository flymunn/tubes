@extends('books.layout')
@section('content')
    
    <div class="card" style="margin: 20px">
        <div class="card-header">Book Page</div>
        <div class="card-body">
            <div class="card-body">
                <h3 class="card-title">               {{$books->nama}}</h3>
                <p class="card-text">  Penerbit     :{{$books->pengarang}}</p>
                <p class="card-text">  Tahun terbit :{{$books->terbit}}</p>
                <p class="card-text">  Harga        :{{$books->harga}}</p>
                
            </div>
            <hr>
        </div>
    </div>


