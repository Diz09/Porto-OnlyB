@extends('index')
@section('title', 'Testimonials')
@section('content')
  <div class="pt-table">
    <div class="pt-tablecell page-quotes relative">

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title text-center">
              <h2>
                {{ $title }} 
                <span class="primary">{{ $highlight }}</span>
                <span class="title-bg">{{ $background }}</span>
              </h2>
              <p>{{ $description }}</p>
            </div>
          </div>
        </div> <!-- /.row -->

        <div class="row">
          <div class="col-xs-12">
            <div class="testimonials">
              @foreach ($testimonials as $item)
                <div class="item">
                  <figure class="thumb">
                    <div class="tm-hex" style="background-image: url('{{ asset('images/' . $item['image']) }}');">
                      <div class="hexTop"></div>
                      <div class="hexBottom"></div>
                    </div>
                    <figcaption>
                      <h4>{{ $item['name'] }}</h4>
                      <span>{{ $item['position'] }}</span>
                    </figcaption>
                  </figure>
                  <div class="text">
                    <p>{{ $item['quote'] }}</p>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div> <!-- /.row -->
      </div> <!-- /.container -->
      
      {{-- 🧩 Include nav dengan parameter --}}
      @include('partials.page-nav', ['prev' => 'project', 'next' => 'contact'])

    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
@endsection