@extends('layouts.app')
@section('content')
    <main class="container">
        <main class="content">
            <div class="container-fluid p-0">
        
                <h1 class="h3 mb-3 text-dark "><strong>Registration</strong> Detail</h1>
                
                <div class="row">
                    <div class="col-md-2 my-4">
                        <a class="btn btn-primary" href="{{route('register.index')}}">Back</a>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered text-dark">
                            <tr>
                                <td>ID</td>
                                <td>{{$registrations->id}}</td>
                            </tr>
                            <tr>
                                <td>Student Name</td>
                                <td>{{$registrations->name}}</td>
                            </tr>
                            <tr>
                                <td>Program</td>
                                <td>{{$registrations->program->title}}</td>
                            </tr>
                            <tr>
                                <td>Academic Year</td>
                                <td>{{$registrations->academic->ac_year}}</td>
                            </tr>
                            <tr>
                                <td>Student NRC</td>
                                <td>{{$registrations->nrc}}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>{{$registrations->dob}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$registrations->email}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{$registrations->phone}}</td>
                            </tr>
                            <tr>
                                <td>Facebook profile</td>
                                <td>{{$registrations->profile}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{$registrations->address}}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>{{$registrations->city}}</td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>{{$registrations->state}}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{$registrations->country}}</td>
                            </tr>
                            <tr>
                                <td>Race</td>
                                <td>{{$registrations->race}}</td>
                            </tr>
                            <tr>
                                <td>Marital Status</td>
                                <td>{{$registrations->marital_sts}}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{$registrations->gender}}</td>
                            </tr>
                            <tr>
                                <td>Highest Education</td>
                                <td>{{$registrations->highest_edu}}</td>
                            </tr>
                            <tr>
                                <td>High School</td>
                                <td>{{$registrations->high_school}}</td>
                            </tr>
                            <tr>
                                <td>High School Graduate Year</td>
                                <td>{{$registrations->year}}</td>
                            </tr>
                            <tr>
                                <td>Degree</td>
                                <td>{{$registrations->degree}}</td>
                            </tr>
                            <tr>
                                <td>University</td>
                                <td>{{$registrations->uni_name}}</td>
                            </tr>
                            <tr>
                                <td>University start date</td>
                                <td>{{$registrations->start_date}}</td>
                            </tr>
                            <tr>
                                <td>University end date</td>
                                <td>{{$registrations->end_date}}</td>
                            </tr>
                            <tr>
                                <td>Work Experience</td>
                                <td>{{$registrations->work_experience}}</td>
                            </tr>
                            <tr>
                                <td>Experience year</td>
                                <td>{{$registrations->exp_year}}</td>
                            </tr>
                            <tr>
                                <td>Current Position</td>
                                <td>{{$registrations->current_position}}</td>
                            </tr>
                            <tr>
                                <td>Current Company</td>
                                <td>{{$registrations->current_company}}</td>
                            </tr>
                            <tr>
                                <td>Working start date</td>
                                <td>{{$registrations->working_start_date}}</td>
                            </tr>
                            <tr>
                                <td>Previous position</td>
                                <td>{{$registrations->previous_position}}</td>
                            </tr>
                            <tr>
                                <td>Previous company</td>
                                <td>{{$registrations->previous_company}}</td>
                            </tr>
                            <tr>
                                <td>Previous work start date</td>
                                <td>{{$registrations->previous_start_date}}</td>
                            </tr>
                            <tr>
                                <td>Previous work end date</td>
                                <td>{{$registrations->previous_end_date}}</td>
                            </tr>
                            <tr>
                                <td>NRC Photo</td>
                                <td>{{$registrations->nrc_img}}</td>
                            </tr>
                            <tr>
                                <td>Graduation Certificate</td>
                                <td>{{$registrations->grad_certi}}</td>
                            </tr>
                            <tr>
                                <td>Other document</td>
                                <td>{{$registrations->other_doc}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{$registrations->description}}</td>
                            </tr>

                            
                        </table>
            
                    </div>
                </div>
        
            </div>
        </main>
    </main>
@endsection