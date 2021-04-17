<div class="card card-2 text-center">
  <div class="card__top">
    <a href="/plans/{{ $plan->id }}">
      <img src="{{ asset('/storage/plan_attachments/' . $plan->plan_files) }}" />
    </a>
  </div>
  <div class="card__body text-left">
    <h5>
      {{ $plan->plan_name }}
    </h5>
    <p>
      {{ $plan->plan_summary }}
    </p>
  </div>
  <div class="card__bottom text-center">
    <div class="card__action">
      <div class="modal-instance">
        <a href="#" class="modal-trigger">
          <span class="h6 type--uppercase">Request Modification</span>
        </a>
        <div class="modal-container">
          <div class="modal-content section-modal">
            <section class="unpad ">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <div class="boxed boxed--lg bg--white text-center feature">
                      <div class="modal-close modal-close-cross"></div>
                      <h3>Create Modification Request</h3>
                      <div class="feature__body">
                        <form method="POST"
                          action="/user/modification/save/{{ $plan->id }}/{{ $plan->architect_id }}">
                          @csrf
                          <input type="hidden" name="architectId" value="{{ $plan->architect_id }}">
                          <input type="hidden" name="planId" value="{{ $plan->id }}">
                          <div class="row">
                            <div class="col-md-12">
                              <input type="text" name="title" placeholder="Title">
                            </div>
                            <div class="col-md-12">
                              <button class="btn btn--primary type--uppercase" type="submit">Create</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      {{-- <a href="#"> <i class="material-icons">flip_to_front</i> </a> --}}
    </div>
    <div class="card__action">
      <span class="h6 type--uppercase">
        Price
        <br>
        PKR {{ $plan->price }}
      </span>
      {{-- <a href="#"> <i class="material-icons">favorite_border</i> PKR {{ $plan->price }} </a> --}}
    </div>
  </div>
</div>
