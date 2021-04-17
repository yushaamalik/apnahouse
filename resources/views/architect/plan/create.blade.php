@extends('architect.layouts.admin')
@section('content')
  <!-- End page sidebar wrapper -->
  <!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content">
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> Add new Plan </h2>
          <ol class="breadcrumb">
            <li> <a href="{{ route('architect.dashboard') }}">Home</a> </li>
            <li> <a>Plans</a> </li>
            <li class="active"> <strong> Add new Plan </strong> </li>
          </ol>
        </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <!-- Basic Form start -->
          <div class="col-lg-6">
            <div class="ibox float-e-margins">
              <div class="widgets-container">
                <h5>Add new Plan (1) </h5>
                <hr>
                <form action="{{ route('architect.plan.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label>Width</label>
                    <input class="form-control m-t-xxs" name="width" id="exampleInputEmail1" placeholder="Width"
                      type="number">
                  </div>
                  <div class="form-group">
                    <label>Depth</label>
                    <input class="form-control m-t-xxs" name="depth" id="exampleInputEmail1" placeholder="Depth"
                      type="number">
                  </div>
                  <div class="form-group">
                    <label>Height</label>
                    <input class="form-control m-t-xxs" name="height" id="exampleInputEmail1" placeholder="Height"
                      type="number">
                  </div>
                  <div class="form-group">
                    <label>Storeys</label>
                    <input class="form-control m-t-xxs" name="storeys" id="exampleInputEmail1" placeholder="Storeys"
                      type="number">
                  </div>
                  <div class="form-group">
                    <label>Total covered Area</label>
                    <input class="form-control m-t-xxs" name="total_covered_area" id="exampleInputEmail1"
                      placeholder="Total covered Area" type="number">
                  </div>
              </div>
            </div>
          </div>
          <!-- Basic Form End -->
          <div class="col-lg-6">
            <div class="ibox float-e-margins">
              <div class="widgets-container">
                <h5>Add new Plan (2) </h5>
                <hr>
                <div class="form-group">
                  <label> Area</label>
                  <input class="form-control m-t-xxs" name="area" id="exampleInputEmail1" placeholder=" Area"
                    type="number">
                </div>
                <div class="form-group">
                  <label> Car Porch</label>
                  <input class="form-control m-t-xxs" name="car_porch" id="exampleInputEmail1" placeholder=" Car Porch"
                    type="number">
                </div>
                <div class="form-group">
                  <label> Beds</label>
                  <input class="form-control m-t-xxs" name="beds" id="exampleInputEmail1" placeholder=" Beds"
                    type="number">
                </div>
                <div class="form-group">
                  <label> Drawing Rooms</label>
                  <input class="form-control m-t-xxs" name="drawing_rooms" id="exampleInputEmail1"
                    placeholder=" Drawing Rooms" type="number">
                </div>
                <div class="form-group">
                  <label> Lounges</label>
                  <input class="form-control m-t-xxs" name="lounges" id="exampleInputEmail1" placeholder="Lounges"
                    type="number">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ibox float-e-margins">
              <div class="widgets-container">
                <h5>Add new Plan (3) </h5>
                <hr>
                <div class="form-group">
                  <label>Dining Areas</label>
                  <input class="form-control m-t-xxs" name="dinning_areas" id="exampleInputEmail1"
                    placeholder="Dining Areas" type="number">
                </div>
                <div class="form-group">
                  <label>Kitchens</label>
                  <input class="form-control m-t-xxs" name="kitchens" id="exampleInputEmail1" placeholder="Kitchens"
                    type="number">
                </div>
                <div class="form-group">
                  <label>S-Kitchens</label>
                  <input class="form-control m-t-xxs" name="s_kitchens" id="exampleInputEmail1" placeholder="S-Kitchens"
                    type="number">
                </div>
                <div class="form-group">
                  <label>Store Rooms</label>
                  <input class="form-control m-t-xxs" name="store_rooms" id="exampleInputEmail1" placeholder="Store Rooms"
                    type="number">
                </div>
                <div class="form-group">
                  <label>Maid Rooms</label>
                  <input class="form-control m-t-xxs" name="maid_rooms" id="exampleInputEmail1" placeholder="Maid Rooms"
                    type="number">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ibox float-e-margins">
              <div class="widgets-container">
                <h5>Add new Plan (4)</h5>
                <hr>
                <div class="form-group">
                  <label>Laundary Rooms</label>
                  <input class="form-control m-t-xxs" name="laundary_rooms" id="exampleInputEmail1"
                    placeholder="Laundary Rooms" type="number">
                </div>
                <div class="form-group">
                  <label>Terraces</label>
                  <input class="form-control m-t-xxs" name="terraces" id="exampleInputEmail1" placeholder="Terraces"
                    type="number">
                </div>
                <div class="form-group">
                  <label>Roof Tops</label>
                  <input class="form-control m-t-xxs" name="rooftops" id="exampleInputEmail1" placeholder="Roof Tops"
                    type="number">
                </div>
                <div class="form-group">
                  <label>Corner Plot</label>
                  <br>
                  <input type="radio" class="iCheck" checked="" value="1" id="optionsRadios22"
                    name="corner_plot">Yes</label>
                  <label class="mt-radio">
                    <input type="radio" class="iCheck" checked="" value="0" id="optionsRadios22" name="corner_plot">No
                  </label>
                </div>
                <div class="form-group">
                  <label>Attachment</label>
                  <input class="form-control m-t-xxs" name="plan_files" id="exampleInputEmail1" placeholder="Attachment"
                    type="file">
                </div>
              </div>
            </div>
          </div>
          <!--Horizontal Form End -->

          <div class="col-lg-14">
            <div class="ibox float-e-margins">
              <div class="widgets-container">
                <h5>Add new Plan (5) </h5>
                <hr>
                <div class="form-group">
                  <label>Plan Name</label>
                  <input class="form-control m-t-xxs" name="plan_name" placeholder="Name" type="text">
                </div>
                <div class="form-group">
                  <label>Plan Price</label>
                  <input class="form-control m-t-xxs" name="price" placeholder="Plan Price" type="number">
                </div>
                <div class="form-group">
                  <label>Plan Summary</label>
                  <textarea class="ckeditor form-control" name="plan_summary"> </textarea>
                </div>
                <div class="form-group">
                  <label>Plan Description</label>
                  <textarea class="ckeditor form-control" name="plan_description"> </textarea>
                </div>
                <div class="form-group">
                  <label>Plan Set Information</label>
                  <textarea class="ckeditor form-control" name="plan_set_information"> </textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
            </div>
          </div>
        @endsection
        @section('js')
          <script type="text/javascript">
            $(function() {
              $('._select').select2();
              var data = [{
                id: 0,
                text: 'enhancement'
              }, {
                id: 1,
                text: 'bug'
              }, {
                id: 2,
                text: 'duplicate'
              }, {
                id: 3,
                text: 'invalid'
              }, {
                id: 4,
                text: 'wontfix'
              }];

              $(".js-example-data-array").select2({
                data: data
              })

              $(".js-example-data-array-selected").select2({
                data: data
              })

              $('.selectpicker').selectpicker({
                style: 'defaultSelectDrop',
                size: 4
              });

              $('.selectpickerprimary').selectpicker({
                style: 'btn-primary',
                size: 4
              });
              $('.selectpickerinfo').selectpicker({
                style: 'btn-info',
                size: 4
              });
              $('.selectpickersuccess').selectpicker({
                style: 'btn-success',
                size: 4
              });
              $('.selectpickerwarning').selectpicker({
                style: 'btn-warning',
                size: 4
              });
              $('.selectpickerdanger').selectpicker({
                style: 'btn-danger',
                size: 4
              });

            });

            $(document).ready(function() {
              var callbacks_list = $('.demo-callbacks ul');
              $('input.iCheck').on(
                'ifCreated ifClicked ifChanged ifChecked ifUnchecked ifDisabled ifEnabled ifDestroyed',
                function(event) {
                  callbacks_list.prepend('<li><span>#' + this.id + '</span> is ' + event.type.replace('if', '')
                    .toLowerCase() + '</li>');
                }).iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
              });
            });

          </script>
          <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
          <script type="text/javascript">
            $(document).ready(function() {
              $('.ckeditor').ckeditor();
            });

          </script>
        @endsection
