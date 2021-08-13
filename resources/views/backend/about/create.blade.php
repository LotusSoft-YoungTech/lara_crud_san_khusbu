@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/about" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/about" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" class="form-control" type="text" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                            </div>
 
                             
 
                            <button type="submit" class="btn btn-primary my-2">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection