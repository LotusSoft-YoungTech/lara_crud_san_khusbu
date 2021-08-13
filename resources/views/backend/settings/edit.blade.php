@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/settings" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/settings/{{ $setting->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">School Name</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $setting->name }}">
                            </div>
 
                            <div class="form-group">
                                <label for="email">Email(optional)</label>
                                <input id="email" class="form-control" type="text" name="email" value="{{ $setting->email }}">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                    <input id="phone" class="form-control" type="text" name="phone" value="{{ $setting->phone }}">
                                </div>
     
                                <div class="form-group col-md-6">
                                    <label for="location">Location <span class="text-danger">*</span></label>
                                    <input id="location" class="form-control" type="text" name="location" value="{{ $setting->location }}">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="map">Google Map (optional)</label>
                                <textarea id="map" class="form-control" name="map" rows="3">{{ $setting->mapB }}</textarea>
                            </div>
 
                            <div class="form-group">
                                <label for="logo">School logo <span class="text-danger">*</span></label>
                                <input id="logo" class="form-control-file" type="file" name="logo">
                            </div>
 
                            <button type="submit" class="btn btn-primary my-2"><i class="fas fa-sync-alt"></i>Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection