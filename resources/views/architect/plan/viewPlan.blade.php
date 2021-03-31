@extends('architect.layouts.admin')
@section('content')
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content">
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> View Plan | {{ $plan->plan_name }} </h2>
          <ol class="breadcrumb">
            <li> <a href="{{ route('architect.dashboard') }}">Home</a> </li>
            <li> <a>Plans</a> </li>
            <li class="active"> <strong> {{ $plan->plan_name }} </strong> </li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <div class="wrapper-content ">
            <section>
              <div class="row">
                <div class="col-lg-6">
                  <section class="panel">
                    <div class="panel-body">
                      <h3>Area Specifications</h3>
                      <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5>Details </h5>
                        </div>
                        <!-- / ibox-title -->
                        <div id="demo6" class="ibox-content collapse in">
                          <div class="borderedTable">
                            <div class="table-scrollable">
                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th> # </th>
                                    <th> Feature</th>
                                    <th> Value </th>

                                </thead>
                                <tbody>
                                  <tr>
                                    <td> 1 </td>
                                    <td class="active"> Width (ft) </td>
                                    <td class="success"> {{ $plan->width }} (ft) </td>

                                  </tr>
                                  <tr>
                                    <td> 2 </td>
                                    <td class="active"> Depth (ft) </td>
                                    <td class="success"> {{ $plan->depth }} (ft) </td>

                                  </tr>
                                  <tr>
                                    <td> 3 </td>
                                    <td class="active"> Height (ft) </td>
                                    <td class="success"> {{ $plan->height }} (ft) </td>

                                  </tr>
                                  <tr>
                                    <td> 4 </td>
                                    <td class="active"> Storeys </td>
                                    <td class="success"> {{ $plan->storeys }} </td>
                                  </tr>
                                  <tr>
                                    <td> 5 </td>
                                    <td class="active"> Plot Area (sq ft) </td>
                                    <td class="success"> {{ $plan->total_covered_area }} Sq Ft </td>
                                  </tr>
                                  <tr>
                                    <td> 6 </td>
                                    <td class="active"> Area </td>
                                    <td class="success"> {{ $plan->area }} Marlas </td>

                                  </tr>
                                  <tr>
                                    <td> 7 </td>
                                    <td class="active"> Corner Plot </td>
                                    <td class="success">
                                      @if ($plan->corner_plot == 0) No
                                      @elseif($plan->corner_plot == 1)
                                        Yes
                                      @endif
                                    </td>

                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                  </section>
                </div>
                <div class="col-lg-6">
                  <section class="panel">
                    <div class="panel-body">
                      <h3>Feature Specifications</h3>
                      <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5>Details </h5>
                        </div>
                        <!-- / ibox-title -->
                        <div id="demo6" class="ibox-content collapse in">
                          <div class="borderedTable">
                            <div class="table-scrollable">
                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th> # </th>
                                    <th> Feature</th>
                                    <th> Value </th>

                                </thead>
                                <tbody>
                                  <tr>
                                    <td> 1 </td>
                                    <td class="active"> Car Porch </td>
                                    <td class="success"> {{ $plan->car_porch }} </td>

                                  </tr>
                                  <tr>
                                    <td> 2 </td>
                                    <td class="active"> Beds </td>
                                    <td class="success"> {{ $plan->beds }} </td>

                                  </tr>
                                  <tr>
                                    <td> 3 </td>
                                    <td class="active"> Drawing Rooms </td>
                                    <td class="success"> {{ $plan->drawing_rooms }} </td>

                                  </tr>
                                  <tr>
                                    <td> 4 </td>
                                    <td class="active"> Lounges </td>
                                    <td class="success"> {{ $plan->lounges }} </td>

                                  </tr>
                                  <tr>
                                    <td> 5 </td>
                                    <td class="active"> Kitchens </td>
                                    <td class="success"> {{ $plan->kitchens }} </td>

                                  </tr>
                                  <tr>
                                    <td> 6 </td>
                                    <td class="active"> S-Kitchens </td>
                                    <td class="success"> {{ $plan->s_kitchens }} </td>

                                  </tr>
                                  <tr>
                                    <td> 7 </td>
                                    <td class="active"> Store Rooms </td>
                                    <td class="success">
                                      {{ $plan->store_rooms }}
                                    </td>

                                  </tr>
                                  <tr>
                                    <td> 8 </td>
                                    <td class="active"> Maid Rooms </td>
                                    <td class="success">
                                      {{ $plan->maid_rooms }}
                                    </td>

                                  </tr>
                                  <tr>
                                    <td> 9 </td>
                                    <td class="active"> Laundary Areas </td>
                                    <td class="success">
                                      {{ $plan->laundary_rooms }}
                                    </td>

                                  </tr>
                                  <tr>
                                    <td> 10 </td>
                                    <td class="active"> Terraces </td>
                                    <td class="success">
                                      {{ $plan->terraces }}
                                    </td>

                                  </tr>
                                  <tr>
                                    <td> 11 </td>
                                    <td class="active"> Roof Tops </td>
                                    <td class="success">
                                      {{ $plan->rooftops }}
                                    </td>

                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </div>
          </div>
          <div class="wrapper-content ">
            <section>
              <div class="row">
                <div class="col-lg-6">
                  <section class="panel">
                    <div class="panel-body">
                      <h3>Plan Summary</h3>
                      <p>{!! $plan->plan_summary !!}
                    </div>
                  </section>
                </div>
                <div class="col-lg-6">
                  <section class="panel">
                    <div class="panel-body">
                      <h3> Plan Description</h3>
                      <p>{!! $plan->plan_description !!}</p>
                    </div>
                  </section>
                </div>
              </div>
              <div class="col-lg-12">
                <section class="panel">
                  <div class="panel-body">
                    <h3> Plan set information</h3>
                    <p>{!! $plan->plan_set_information !!}</p>
                  </div>
                </section>
              </div>
          </div>
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <h3> Plan Attachments</h3>
                <img class="image_fade text-center" src="{{ asset('/storage/plan_attachments/' . $plan->plan_files) }}"
                  alt="Standard Post with Image" height="250px;" width="350px;">

              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

  @endsection
  @section('js')
    <script type="text/javascript" src="/admin/assets/js/vendor/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/admin/assets/js/vendor/dataTables.bootstrap.min.js"></script>
    <!-- js for print and download -->
    <script type="text/javascript" src="/admin/assets/js/vendor/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/vendor/buttons.flash.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/vendor/jszip.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/vendor/pdfmake.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/vendor/vfs_fonts.js"></script>
    <script type="text/javascript" src="/admin/assets/js/vendor/buttons.html5.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/vendor/buttons.print.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/vendor/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/vendor/dataTables.fixedHeader.min.js"></script>

    <script src="/admin/assets/js/vendor/chartJs/Chart.bundle.js"></script>
    <script src="/admin/assets/js/dashboard1.js"></script>
  @endsection
