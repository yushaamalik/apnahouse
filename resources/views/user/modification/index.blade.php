@extends('layouts.admin')
@section('content')
<div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> User Dashboard | ApnaHouse </h2>
          <ol class="breadcrumb">
            <li> <a href="#">Home</a> </li>
            <li> <a href="#">Modification Request</a> </li>

          </ol>
        </div>
      </div>
      <div class="wrapper-content ">
        <div class="wrapper-content ">
          <div class="row">
            <div class="col-lg-12">
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <h5>Modification Request</h5>
                 
                <!-- / ibox-title -->
                
          <div class="row">
            <div class="col-lg-12">
              <div class="ibox">
                <div class="ibox-title">
                    <h2> Previous Messages </h2>
                    {{-- {{$planId}} | {{$architectId}}
                    | {{$modificationId}}
                    <ul> --}}
                    @foreach($messages as $message)
                    @if($message->modification_request_id == $modificationId)
                    @if($message->plan_id == $planId)
                    @if($message->sender_id == Auth::guard('web')->user()->id)
                        <li><strong>You </strong> : {{$message->body}} <div class="text-right"><small> Sent at : {{$message->created_at}}</small></div></li>
                        @else
                        <li><strong>Architect </strong> : {{$message->body}} <small> Received at :  {{$message->created_at}}</small></li>
                    @endif
                    @endif
                    @endif
                    @endforeach
                    </ul>
                </div>
                <form action="{{route('message.user.send')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="widgets-container">
                    <label>Message : </label>
                    <input type="hidden" name="receiver_id" value="{{$architectId}}">
                    <input type="hidden" name="plan_id" value="{{$planId}}">
                    <input type="hidden" name="modificationRequestId" value="{{$modificationId}}">

                    <input type="text"  class="form-control m-t-xxs" name="body" placeholder="Type Message....">
                    <br>
                    <button type="submit" class="btn btn-success">Send</button> 
                  
                </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      
@endsection