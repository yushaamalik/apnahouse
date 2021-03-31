@extends('layouts.stack')

@section('content')
  <div class="main-container">
    <section class="cover imagebg height-60 text-center" data-overlay="3">
      <div class="background-image-holder">
        <img alt="background" src="/stack/img/knowledge-1.jpg" />
      </div>
      <div class="container pos-vertical-center">
        <div class="row">
          <div class="col-md-10 col-lg-8">
            <h1>Apna House</h1>
            <p class="lead">
              Build your dream homes
            </p>
          </div>
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h4>Featured Properties Collections</h4>
          </div>
          <div class="col-6 text-right">
            <a href="#">View more</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-6">
            <a href="#" class="feature">
              <img alt="Pic" src="/stack/img/accom-1.jpg" />
              <h5 class="mb--0"> CONTEMPORARY </h5>
              <div>Entire home &#9702; 2 bedrooms</div>
            </a>
          </div>
          <div class="col-md-3 col-6">
            <a href="#" class="feature">
              <img alt="Pic" src="/stack/img/accom-2.jpg" />
              <h5 class="mb--0"> SPANISH </h5>
              <div>Entire home &#9702; 4 bedrooms</div>
            </a>
          </div>
          <div class="col-md-3 col-6">
            <a href="#" class="feature">
              <img alt="Pic" src="/stack/img/accom-3.jpg" />
              <h5 class="mb--0"> CLASSICAL </h5>
              <div>Entire home &#9702; 3 bedrooms</div>
            </a>
          </div>
          <div class="col-md-3 col-6">
            <a href="#" class="feature">
              <img alt="Pic" src="/stack/img/accom-4.jpg" />
              <h5 class="mb--0"> TRADITIONAL </h5>
              <div>Entire home &#9702; 2 bedrooms</div>
            </a>
          </div>
        </div>
      </div>
    </section>
    @include('pages.plans')
    <section>
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h4>Popular House Styles</h4>
          </div>
          <div class="col-6 text-right">
            <a href="#">View more</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-6">
            <a href="#" class="block">
              <div class="feature feature-7 boxed text-center imagebg" data-overlay="3">
                <div class="background-image-holder">
                  <img alt="background" src="/stack/img/accom-5.jpg" />
                </div>
                <h4 class="pos-vertical-center">Sydney</h4>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-6">
            <a href="#" class="block">
              <div class="feature feature-7 boxed text-center imagebg" data-overlay="3">
                <div class="background-image-holder">
                  <img alt="background" src="/stack/img/accom-6.jpg" />
                </div>
                <h4 class="pos-vertical-center">San Francisco</h4>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-6">
            <a href="#" class="block">
              <div class="feature feature-7 boxed text-center imagebg" data-overlay="3">
                <div class="background-image-holder">
                  <img alt="background" src="/stack/img/accom-7.jpg" />
                </div>
                <h4 class="pos-vertical-center">Berlin</h4>
              </div>
            </a>
          </div>
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </section>
    <section class="feature-large switchable bg--secondary">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-lg-6 col-md-6">
            <img alt="Image" class="border--round box-shadow-wide" src="/stack/img/inner-5.jpg" />
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="heading-block">
              <h2>Experience quality with Stack Accomodation</h2>
            </div>
            <div class="text-block">
              <h5>Find unique experiences</h5>
              <p>
                Combine blocks from a range of categories to build pages that are rich in visual style and interactivity.
              </p>
            </div>
            <div class="text-block">
              <h5>Book with confidence</h5>
              <p>
                Stack is built with customization and ease-of-use at its core &mdash; consistent markup and useful data
                attribute modifiers make rapid development simple.
              </p>
            </div>
          </div>
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </section>
    <section class="feature-large feature-large-2 bg--secondary">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-4 col-lg-3">
            <h3>Experience quality</h3>
            <p class="lead">
              Stack is built with customization and ease-of-use at its core &mdash; whether you're a seasoned developer or
              just starting out, you'll be making attractive sites faster than any traditional HTML template.
            </p>
          </div>
          <div class="col-md-4 col-lg-4">
            <img alt="Image" class="border--round box-shadow-wide" src="/stack/img/landing-7.jpg" />
          </div>
          <div class="col-md-4 col-lg-2">
            <hr class="short" />
            <p>
              Each purchase of Stack includes six months of free support, including access to our dedicated support forum.
              In addition to support you'll recieve lifetime updates, including new content and bug-fixes.
            </p>
          </div>
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </section>
    <section class="text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-8">
            <h2>Coworking in the heart of historic Carlton.</h2>
            <p class="lead">
              Stack is a collective of like-minded creatives working together in a converted church in the heart of
              Fitzroy North. Featuring multiple private and shared spaces with all the conveniences of a modern creative
              envrionment, you'll love working at Stack.
            </p>
          </div>
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </section>
    <section>
      <div class="container">
        <div class="gallery-1 row">
          <div class="col-md-6">
            <div class="gallery__image">
              <a href="img/cowork-2.jpg" data-lightbox="Gallery 1">
                <div class="background-image-holder">
                  <img alt="Image" src="/stack/img/cowork-2.jpg" />
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="gallery__image">
              <a href="img/cowork-6.jpg" data-lightbox="Gallery 1">
                <div class="background-image-holder">
                  <img alt="Image" src="/stack/img/cowork-6.jpg" />
                </div>
              </a>
            </div>
            <div class="gallery__image">
              <a href="img/knowledge-1.jpg" data-lightbox="Gallery 1">
                <div class="background-image-holder">
                  <img alt="Image" src="/stack/img/knowledge-1.jpg" />
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--end of container-->
    </section>
    <section class="imagebg">
      <div class="background-image-holder">
        <img alt="background" src="/stack/img/cowork-5.jpg" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-lg-5">
            <div class="boxed boxed--lg border--round bg--white">
              <div class="col-lg-10 col-md-12 mx-auto">
                <h3>Coworker Spotlight</h3>
                <p class="lead">
                  &rdquo;I started working at the Stack coworking space earlier this year and in that time I've met so
                  many inspiring people, and made friends too. I originally joined as an office away from home but have
                  since made Stack my permanent workplace.&ldquo;
                </p>
                <hr class="short" />
                <p>
                  Luke launched his startup Vent with people he met while working at Stack Coworking.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </section>
  @endsection
