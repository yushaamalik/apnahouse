@if (session()->has('success'))
<div style="margin-top:70px;">
  <div class="alert alert-success text-center animated fadeIn" id="mydiv">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>
      {!! session()->get('success') !!}
    </strong>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{{-- <script>
$('#mydiv').delay(1000).hide(1000); 
</script> --}}
@endif