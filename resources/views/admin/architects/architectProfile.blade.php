@extends('admin.layouts.admin')
@section('content')
<div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> Architect # {{$architect->id}} </h2>
          <ol class="breadcrumb">
            <li> <a href="{{route('admin.dashboard')}}">Home</a> </li>
          </ol>
        </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h1>{{$architect->name}}</h1>
                <div class="ibox-tools"> 
                    <button class="btn btn-primary" style="width: 8%" type="button">Edit</button>
                    <form method="POST" action="#">
                        @method('DELETE')
                        @csrf
                    <button class="btn btn-danger" style="width: 8%" type="submit">Delete</button>
                    </form>
              </div>
              <!-- / ibox-title -->
              <div id="demo1" class="ibox-content collapse in">
                <div class="widgets-container">
                    <img class="image_fade"  src="{{ asset('/storage/company_logos/'. $architect->architectProfile()->first()->logo)}}" alt="Standard Post with Image" height="250px;" width="350px;">
                  <h3>Description</h3>
                    <p> {!! $architect->architectProfile()->first()->description !!} </p>
                    <hr>
                </div>
              </div>
              
                </div>
                <div class="ibox-footer"> <span class="pull-right"> Last updated at : <strong> {{$architect->updated_at->format('F-d')}} </strong> </span> Created At : <strong>{{$architect->created_at->format('F-d')}}</strong> </div>
              </div>
            </div>
          </div>
        </div>
@endsection