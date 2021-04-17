@extends('layouts.stack')

@section('content')
  <div class="main-container">
    <section class="justify-content-around">
      <div class="container">
        <div class="text-center mb-5">
          <p>PLAN</p>
          <h1> {{ $plan->plan_name }} </h1>
        </div>
        <div>
          {{ $plan }}
        </div>
      </div>
    </section>
  </div>
@endsection
