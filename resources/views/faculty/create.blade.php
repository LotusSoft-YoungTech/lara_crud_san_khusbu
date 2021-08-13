@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/faculty" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div>
                    <div class="card-header">
                        <form action="/faculty" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Faculty Name</label>
                                <input id="my-input" class="form-control" type="text" name="name">
                            </div>
                            
                            <div>
                                <button type="submit" class="ms-2 btn btn-primary">Save <i class="fas fa-save"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection