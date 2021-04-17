@extends('layouts.stack')

@section('content')
  <div class="main-container">
    <section class="">
      <div class="text-center space--xs">
        <h2>Browse Plans</h2>
      </div>
      <div class="container">
        @foreach ($planCategories as $PC)
          <h2>{{ $PC->title }}</h2>
          <div class="text-center space--xs">
          </div>
          <div class="masonry">
            <div class="masonry__container row">
              @foreach ($PC->plans as $plan)
                <div class="col-md-4 masonry__item">
                  @include('pages.planbox')
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </div>
@endsection
