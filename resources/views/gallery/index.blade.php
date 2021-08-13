@extends('app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/galleries/create" class="btn btn-primary">Add Gallary <i class="fas fa-camera"></i></a>
                </div>
                <div class="card-body">
                    <table class="table" id="tabledata">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gallary Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $index => $gallery)
                            <tr> 
                                <td>{{ ++$index }}</td>
                                <td>{{ $gallery->name}}</td>
                                
                                <td>
                                    
                                    <form action="/galleries/{{ $gallery->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/galleries/{{ $gallery->id }}/edit" class="badge bg-primary">Edit <i class="fas fa-user-edit"></i></a>
                                        <button type="submit" onclick="return confirm('Are your sure you want to delete?')" class="btn badge bg-danger text-decoration-none">Delete <i class="fas fa-user-minus"></i></button >
                                    <a href="/galleries/{{ $gallery->id }}" class="badge bg-info">View Images <i class="fas fa-eye"></i></a>
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