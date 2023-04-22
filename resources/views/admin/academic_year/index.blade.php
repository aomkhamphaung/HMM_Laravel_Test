@extends('layouts.app')
@section('content')
    <main class="container">
        <main class="content">
            <div class="container-fluid p-0">
    
                <h1 class="h3 mb-3 text-dark"><strong>Academic Year</strong>Dashboard</h1>
    
                    <div class="row">
                        <div class="col-md-12 ms-auto my-3">
                            <a href="{{ route('academic.create') }}" class="btn btn-outline-primary float-end">Add new academic year</a>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordred text-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Academic year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($academics as $academic)
                                    <form action="{{route('academic.destroy',$academic->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <tr>
                                            <td>{{$academic->id}}</td>
                                            <td>{{$academic->ac_year}}</td>
                                            <td><a href="{{route('academic.show', $academic->id)}}" class="btn btn-outline-success">View</a>
                                            <a href="{{route('academic.edit', $academic->id)}}" class="btn btn-outline-warning">Edit</a>
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
