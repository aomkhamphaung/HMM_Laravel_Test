@extends('layouts.app')
@section('content')
    
    <main class="container">
        <main class="content">
            <div class="container-fluid p-0">
    
                <h1 class="h3 mb-3 text-dark"><strong>Registration</strong>Dashboard</h1>
    
                    
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered text-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Program Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($registrations as $registration)
                                    <form action="{{route('register.destroy', $registration->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <tr>
                                            <td>{{$registration->id}}</td>
                                            <td>{{$registration->name}}</td>
                                            <td>{{$registration->phone}}</td>
                                            <td>{{$registration->email}}</td>
                                            <td>{{$registration->address}}</td>
                                            <td>{{$registration->program->title}}</td>
                                            <td><a href="{{route('register.show', $registration->id)}}" class="btn btn-outline-success">Detail</a>
                                            <button class="btn btn-outline-danger">Delete</button></td>
                                        </tr>
                                    </form>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
    
            </div>
        </main>
    </main>
@endsection

