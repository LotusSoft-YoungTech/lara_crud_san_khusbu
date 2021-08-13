@extends('app')
 
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/about/create" class="btn btn-primary">About Us</a>
                    </div>
 
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title/th>
                                    <th>Description</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $about->id }}</td>
                                    <td>{{ $about->title }}</td>
                                    <td>{{ $about->description }}</td>
                                    <td>
                                        <a href="/about/{{ $about->id }}/edit">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection