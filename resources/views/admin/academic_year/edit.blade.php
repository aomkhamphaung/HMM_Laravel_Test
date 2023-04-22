@extends('layouts.app')
@section('content')
    <main class="container">
        <main class="content">
            <div class="container-fluid p-0">
        
                <h1 class="h3 mb-3 text-dark"><strong>Edit</strong> Program</h1>
        
                <div class="row">
                    <div class="col-md-12 my-4">
                        <a class="btn btn-primary" href="{{route('academic.index')}}">Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-dark">
        
                        <form action="{{route('academic.update', $academic->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="ac_year" id="name"  class="form-control" placeholder="ac_year" value="{{$academic->ac_year}}">
                                        <label for="floatingInput">Academic Year</label>
                
                                        @error('ac_year')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                
                                    </div>
                                </div>
                                
                            </div>                  
        
                            
        
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </div>
                    
                        </form>
                    </div>
                </div>
        
                
            </div>
        </main>
    </main>
@endsection