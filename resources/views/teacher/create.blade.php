@extends('app')
@section('content')
    <div class="container">
        <a href="/teacher" class="btn btn-primary">Back</a>
        <div my-2>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}

                </div>
            @endif

        </div>
            <form action="/teacher" method="post">
                @csrf
                <div class="form-group">
                    <label for="photo">Student Photo</label>
                    <input id="photo" class="form-control-file" type="file" name="photo">
                </div>
                <div class="form-group">
                    <label for="name">FullName</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                    
                @enderror
               
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}">
                </div>
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                    
                @enderror
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" value="{{ old('mobile') }}">
                </div>
                @error('mobile')
                <span class="text-danger">{{ $message }}</span>
                    
                @enderror
                <div class="form-group">
                    <label for="faculty_id">Faculty_id</label>
                    <select name="faculty_id" class="form-control" id="faculty_id">
                        @foreach ($faculties as $faculty)
                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                            
                        @endforeach
                    </select>

                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>


            </form>
        


    </div>

@endsection
