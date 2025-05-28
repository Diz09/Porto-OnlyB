@extends('index')
@section('content')
  <div class="pt-table">
    <div class="pt-tablecell page-quotes relative">

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title text-center">
              <h2>My <span class="primary">clients</span><span class="title-bg">Speech</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat.</p>
            </div>
          </div>
        </div> <!-- /.row -->

        <div class="row">
          <div class="col-xs-12">
            <div class="testimonials">
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Adam Drigan</h4>
                    <span>CEO, Ultra Solution</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                    formas humanitatis per seacula quarta decima. </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm-2.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Adam Drigan</h4>
                    <span>CEO, Ultra Solution</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                    formas humanitatis per seacula quarta decima. </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Adam Drigan</h4>
                    <span>CEO, Ultra Solution</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                    formas humanitatis per seacula quarta decima. </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm-2.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Adam Drigan</h4>
                    <span>CEO, Ultra Solution</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                    formas humanitatis per seacula quarta decima. </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Adam Drigan</h4>
                    <span>CEO, Ultra Solution</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                    formas humanitatis per seacula quarta decima. </p>
                </div>
              </div>
              <div class="item">
                <figure class="thumb">
                  <div class="tm-hex" style="background-image: url('images/tm-2.jpg');">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                  </div>
                  <figcaption>
                    <h4>Adam Drigan</h4>
                    <span>CEO, Ultra Solution</span>
                  </figcaption>
                </figure>
                <div class="text">
                  <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                    formas humanitatis per seacula quarta decima. </p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /.row -->
      </div> <!-- /.container -->
      
      {{-- 🧩 Include nav dengan parameter --}}
      @include('partials.page-nav', ['prev' => 'work', 'next' => 'contact'])

    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
@endsection