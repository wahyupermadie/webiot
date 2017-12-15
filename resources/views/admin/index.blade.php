@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="green">
                        <h4 class="title">Daftar Kedatangan Burung</h4>
                        <p class="category">Disini Dapat Dilihat Gambar Keadaan Sawah</p>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Waktu</th>
                            </thead>
                            <tbody>
                            @php($no = 1)
                            @foreach($data as $value)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td><img src="{{asset('images/'.$value->image)}}" style="width:200px" alt=""></td>
                                    <td>{{$value->time}}</td>
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