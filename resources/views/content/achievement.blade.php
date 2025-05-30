@extends('index')
@section('title', 'Achievements')
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
              @foreach ($achievements as $item)
                <div class="item">
                  <figure class="thumb">
                    <img 
                      src="{{ asset('images/achievement/' . $item['image']) }}" 
                      class="tm-rect-img  popup-img" 
                      alt="{{ $item['name'] }}"
                      data-full="{{ asset('images/achievement/' . $item['image']) }}">
                  </figure>
                  <div class="text">
                    <figcaption style="margin-bottom: 10px">
                      <h4>{{ $item['name'] }}</h4>
                      <span>{{ $item['place'] }}</span>
                    </figcaption>
                    <p>{{ $item['desk'] }}</p>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      
      {{-- 🧩 Include nav dengan parameter --}}
      @include('partials.page-nav', ['prev' => 'project', 'next' => 'contact'])

    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
@endsection