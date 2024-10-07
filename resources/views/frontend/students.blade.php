@extends('layouts.frontend')
@section('title','Students')
@section('content')
@include('includes.banner',['title'=>'Students','details'=>'This is a page. This is a demo paragraph.This is a demo
senten.'])
<section id="page-content-wrap">
    <div class="directory-page-content-warp section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="directory-text-wrap">
                        <h2>Now we have <strong class="funfact-count">{{count($students)}}</strong> member </h2>
                        <div class="table-search-area">
                            <form action="{{route('student.search')}}">
                                <input type="hidden" name="category" value="{{$category}}">
                                <select name="department">
                                    <option selected>Dept</option>
                                    <option value="ICE">ICE</option>
                                    <option value="ES">ES</option>
                                </select>
                                <button type="submit" class="btn btn-brand">Search</button>
                            </form>
                        </div>

                        <div class="directory-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Faculty</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Batch</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)

                                    @if($student->activeUser)
                                    <tr>
                                        <td><img src="{{asset('images/'.$student->image)}}"
                                                alt="table">{{$student->activeUser->name}}</td>
                                        <td>{{$student->activeUser->email}}</td>
                                        <td>{{$student->faculty}}</td>
                                        <td>{{$student->department}}</td>
                                        <td>{{$student->batch}}</td>
                                        <td><a href="{{route('student.profile',$student->user_id)}}">View Full
                                                Profile</a></td>
                                    </tr>
                                    @endif
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-lg-2">
                    {{$students->links()}}
                    {{-- <div class="pagination-wrap text-center">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                </li>
                                <li ><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection