@extends('user.layouts.admin')

@section('css')
  <style>
    .count-container {
      padding: 20px;
      box-shadow: 0 1px 16px 0 rgba(0, 0, 0, 0.3);
      background: #8d8dd4;
      color: white;
      border-radius: 6px;
      margin: 20px auto;
    }

    .pt {
      padding-top: 20px;
    }

  </style>
@endsection

@section('content')
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content">
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> User Dashboard | ApnaHouse </h2>
          <ol class="breadcrumb">
            <li> <a href="#">Home</a> </li>
          </ol>
        </div>
      </div>
      <div class="wrapper-content ">
        <div class="wrapper-content ">
          <div class="row">
            <div class="col-lg-12">
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <h5>Admin Dashboard</h5>
                  <div class="ibox-tools"> <a class="collapse-link" data-target="#demo1" data-toggle="collapse"> <i
                        class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a> <a href="#"
                      data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-wrench"></i> </a>
                    <ul class="dropdown-menu dropdown-user">
                      <li><a href="#">Config option 1</a> </li>
                      <li><a href="#">Config option 2</a> </li>
                    </ul>
                    <!-- /dropdown-menu -->
                    <a class="close-link"> <i class="fa fa-times"></i> </a>
                  </div>
                  <!-- ibox-tools -->
                </div>
                <!-- / ibox-title -->

                <div class="row">
                  <div class="col-lg-12">
                    <div class="ibox">
                      <div class="ibox-title">
                      </div>
                      <div class="widgets-container">
                        <center>
                          <h1> ApnaHouse | User Dashboard </h1>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endsection
