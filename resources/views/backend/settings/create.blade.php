@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/settings" class="btn btn-primary"><i class="fas fa-arrow-left"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/settings" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">School Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            @error('name')
                            <span class="text-danger">Please add your school name!!</span>
                            @enderror
 
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="email">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                    <input id="phone" class="form-control" type="text" name="phone">
                                </div>
                                @error('name')
                                <span class="text-danger">Please add your number!!</span>
                                @enderror

     
                                <div class="form-group col-md-6">
                                    <label for="location">Location <span class="text-danger">*</span></label>
                                    <input id="location" class="form-control" type="text" name="location">
                                </div>
                                @error('name')
                                <span class="text-danger">Please add your Location!!</span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="map">Google Map </label>
                                <textarea id="map" class="form-control" name="map" rows="3"></textarea>
                            </div>
                            @error('name')
                                <span class="text-danger">Please add your Email!!</span>
                            @enderror

                            <div class="form-group">
                                <label for="logo">School logo <span class="text-danger">*</span></label>
                                <input id="logo" class="form-control-file" type="file" name="logo">
                            </div>
                            @error('name')
                                <span class="text-danger">Please add your Location!!</span>
                                @enderror
 
                            <div class="my_2">
                                {{-- <img src="{{ asset($settings->logo) }}" width="120" alt=""> --}}
                            </div>
 
                            <button type="submit" class="btn btn-primary my-2">Save <i class="fas fa-save"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection