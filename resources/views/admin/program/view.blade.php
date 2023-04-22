@extends('layouts.app')
@section('content')
    <main class="container">
        <main class="content">
            <div class="container-fluid p-0">
        
                <h1 class="h3 mb-3 text-dark "><strong>Program</strong> View</h1>
                
                <div class="row">
                    <div class="col-md-2 my-4">
                        <a class="btn btn-primary" href="{{route('program.index')}}">Back</a>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered text-dark">
                            <tr>
                                <td>ID</td>
                                <td>{{$programs->id}}</td>
                            </tr>
                            <tr>
                                <td>Program Name</td>
                                <td>{{$programs->title}}</td>
                            </tr>
                            
                        </table>
            
                    </div>
                </div>
        
            </div>
        </main>
    </main>
@endsection