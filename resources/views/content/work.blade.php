@extends('index')
@section('title', 'Works')
@section('content')
  <div class="pt-table">
    <div class="pt-tablecell page-works relative">

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title text-center">
              <h2>
                {{ $title }} 
                <span class="primary">{{ $highlight }}</span> 
                <span class="title-bg">{{ $background }}</span></h2>
              <p>{{ $description }}</p>
            </div>
          </div>
        </div> <!-- /.row -->

        <div class="row">
          <div class="col-xs-12">
            <ul class="filter list-inline">
              <li><a href="#" class="active" data-filter="*">All</a></li>
              @foreach ($filters as $filter)
                <li><a href="#" data-filter=".{{ $filter }}">{{ $filter }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row isotope-gutter">
          @foreach ($works as $work)
            <div class="col-xs-12 col-sm-6 col-md-4 {{ implode(' ', $work['tags']) }}">
              <figure class="works-item">
                <img src="{{ asset('images/works/' . $work['image']) }}" alt="">
                <div class="overlay"></div>
                <figcaption class="works-inner">
                  <h4>{{ $work['title'] }}</h4>
                  <p>{{ $work['description'] }}</p>
                </figcaption>
              </figure>
            </div>
          @endforeach
        </div>

      </div> <!-- /.container -->
      
      {{-- 🧩 Include nav dengan parameter --}}
      @include('partials.page-nav', ['prev' => 'resume', 'next' => 'testimonial'])

    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
  @endsection