@extends('books.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Data Buku</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url ('/book/create') }}" class="btn btn-success btn-sm" title="Add new Student">
                            Tambah
                        </a>
                        {{ csrf_field() }}
                        <div class="table-resvonsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Nama Buku</th>
                                        <th>Penerbit</th>
                                        <th>Tahun terbit</th>
                                        <th>Harga</th>
                                        
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($books as $item)

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->pengarang}}</td>
                                    <td>{{$item->terbit}}</td>
                                    <td>{{$item->harga}}</td>
                                    

                                    <td>
                                        <a href="{{url('/book/'.$item->id)}}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true">View</i></button></a>
                                        <a href="{{url('/book/'.$item->id .'/edit')}}" title="Edit Book"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i></button></a>
                                      
                                      
                                    <form method="POST" action="{{url('/book' .'/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return condirm("apakah setuju mau dihapus?") "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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

    </div>
@endsection