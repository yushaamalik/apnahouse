@extends('architect.layouts.admin')
@section('content')
<div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> Architect Dashboard | ApnaHouse </h2>
          <ol class="breadcrumb">
            <li> <a href="#">Home</a> </li>
          </ol>
        </div>
      </div>
     <div class="col-lg-3">
        <div class="widget red-bg box-shadow">
            <div class="row">
                <div class="col-xs-4 text-center">
                    {{-- <i class="fa fa-bank fa-5x"></i> --}}
                </div>
                <div class="col-xs-8 text-right">
                    <span>Plan</span>

                    <h2 class="font-bold">My Plan # 1</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- begin col-3 -->
    <div class="col-lg-3">
        <div class="widget aqua-bg box-shadow">
            <div class="row">
                <div class="col-xs-4">
                    {{-- <i class="fa fa-cloud fa-5x"></i> --}}
                </div>
                <div class="col-xs-8 text-right">
                    <span> Plan </span>

                    <h2 class="font-bold">My Plan # 2</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- begin col-3 -->
    <div class="col-lg-3">
        <div class="widget aqua-bg box-shadow">
            <div class="row">
                <div class="col-xs-4">
                    {{-- <i class="fa fa-line-chart fa-5x"></i> --}}
                </div>
                <div class="col-xs-8 text-right">
                    <span> Plan</span>

                    <h2 class="font-bold">My Plan # 3</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- begin col-3 -->
    <div class="col-lg-3">
        <div class="widget red-bg box-shadow">
            <div class="row">
                <div class="col-xs-4">
                    {{-- <i class="fa fa-shopping-cart fa-5x"></i> --}}
                </div>
                <div class="col-xs-8 text-right">
                    <span>Plan</span>

                    <h2 class="font-bold">My Plan # 4</h2>
                </div>
            </div>
        </div>
    </div>
      
  @endsection