@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/teacher/create" class="btn btn-primary my-2">Add Teacher <i class="fas fa-user-plus"></i></a>
                </div>
                <div class="card-body">
                    <table class="table" id="tabledata">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Faculty</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $index => $teacher)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->address }}</td>
                                    <td>{{ $teacher->mobile }}</td>
                                    <td>{{ $teacher->faculty->name}}</td>
                                    
                                    <td>
                                        <form action="/teacher/{{ $teacher->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/teacher/{{ $teacher->id }}/edit" class="badge bg-primary text-decoration-none my-1">Edit <i class="fas fa-user-edit"></i></a>
                                        <button type="submit" class="btn badge bg-danger text-decoration-none my-1">Delete <i class="fas fa-user-minus"></i></button>
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
    
@endsection