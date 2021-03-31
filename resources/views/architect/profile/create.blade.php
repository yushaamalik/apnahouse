@extends('architect.layouts.admin')
@section('content')
  <!-- End page sidebar wrapper -->
  <!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content">
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> Complete my Profile </h2>
          <ol class="breadcrumb">
            <li> <a href="{{ route('architect.dashboard') }}">Home</a> </li>
            <li> <a>Profile</a> </li>
            <li class="active"> <strong> Complete Profile </strong> </li>
          </ol>
        </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <!-- Basic Form start -->
          <div class="col-lg-14">
            <div class="ibox float-e-margins">
              <div class="widgets-container">
                @if ($profile == '')
                  <h5>Complete Profile</h5>
                  <hr>
                  <form action="{{ route('architect.profile.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company Name</label>
                      <input class="form-control m-t-xxs" name="company_name" placeholder="Name" type="text">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Location</label>
                      <input class="form-control m-t-xxs" name="location" placeholder="Location" type="text">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">How old is company?</label>
                      <input class="form-control m-t-xxs" name="company_exp" placeholder="Years" type="number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company Incorporated</label>
                      <br>
                      <br>

                      <label class="mt-radio">
                        <input type="radio" class="iCheck" checked="" value="1" id="optionsRadios22"
                          name="company_incorp">Yes</label>
                      <label class="mt-radio">
                        <input type="radio" class="iCheck" checked="" value="0" id="optionsRadios22"
                          name="company_incorp">No </label>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <input class="form-control m-t-xxs" name="address" placeholder="Address" type="text">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Website</label>
                      <input class="form-control m-t-xxs" name="website" placeholder="Website" type="text">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company Logo</label>
                      <br>
                      <div class="fileinput fileinput-new" data-provides="fileinput"> <span
                          class="btn btn-default btn-file"><span class="fileinput-new">Select
                            file</span><span class="fileinput-exists">Change</span>
                          <input type="file" name="logo">
                        </span> <span class="fileinput-filename"></span> <a href="#" class="close fileinput-exists"
                          data-dismiss="fileinput" style="float: none">&times;</a> </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company's Vision </label>
                      <textarea class="ckeditor form-control" name="description"> </textarea>

                    </div>

                    <button type="submit" class="btn aqua m-t-xs bottom15-xs" data-toggle="modal"
                      data-target=".modal-m">Submit</button>
                  </form>
                @elseif($profile->status == 1)
                  <h5>Profile Submitted 5>
                  Status = <strong> Pending
                  @elseif($profile->status == 2)
                    <h5>Profile Submitted 5>
                    Status = <strong> Approved
                    @elseif($profile->status == 3)
                      <h5>Profile Submitted 5>
                      Status = <strong> Rejected
                @endif
              </div>
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
        <!-- Horizontal Form start -->
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
                callbacks_list.prepend('<li><span>#' + this.id + '</span> is ' + event.type
                  .replace('if', '').toLowerCase() + '</li>');
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
