@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/galleries" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="/galleries" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">gallery Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $gallery->name }}">
                        </div>
                        <div class="form-group">
                            <label for="images">Upload Image</label>
                            <input type="file" name="images[]" id="name" class="form-control-file" multiple>
                        </div>
                        
                        <button type="submit">Save Record <i class="fas fa-save"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection