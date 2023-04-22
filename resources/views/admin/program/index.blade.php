@extends('layouts.app')
@section('content')
    
    <main class="container">
        <main class="content">
            <div class="container-fluid p-0">
    
                <h1 class="h3 mb-3 text-dark"><strong>Program</strong>Dashboard</h1>
    
                    <div class="row">
                        <div class="col-md-12 ms-auto my-3">
                            <a href="{{ route('program.create') }}" class="btn btn-outline-primary float-end">Add new program</a>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordred text-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($programs as $program)
                                    <form action="{{route('program.destroy',$program->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <tr>
                                            <td>{{$program->id}}</td>
                                            <td>{{$program->title}}</td>
                                            <td><a href="{{route('program.show', $program->id)}}" class="btn btn-outline-success">View</a>
                                            <a href="{{route('program.edit', $program->id)}}" class="btn btn-outline-warning">Edit</a>
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

