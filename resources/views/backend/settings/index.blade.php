@extends('app')
 
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/settings/create" class="btn btn-primary">General Settings <i class="fas fa-wrench"></i></a>
                    </div>
 
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Logo</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $setting->id }}</td>
                                    <td><img src="{{ asset($setting->logo) }}" width='60' alt=""></td>
                                    <td>{{ $setting->name }}</td>
                                    <td>{{ $setting->email }}</td>
                                    <td>{{ $setting->phone }}</td>
                                    <td>{{ $setting->location }}</td>
                                    <td>
                                        <a href="/settings/{{ $setting->id }}/edit" class="badge bg-primary text-decoration-none">Edit <i class="fas fa-user-edit"></i></a>
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