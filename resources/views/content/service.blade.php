@extends('index')
@section('title', 'Services')
@section('content')
<div class="pt-table">
  <div class="pt-tablecell page-services relative">

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-lg-offset-1 col-lg-10">
          <div class="page-title text-center">
            <h2>
              {{ $title }}
              <span class="primary">{{ $subtitle }}</span> 
              <span class="title-bg">{{ $backgroundTitle }}</span>
            </h2>
            <p>{{ $description }}</p>
          </div>

          <div class="hexagon-menu services clear hx">
            @foreach ($services as $service)
              <div class="service-hex s-hx">
                <svg viewBox="0 0 372 424.5" xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4" />
                    <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131" />
                  </g>
                </svg>
                <div class="content">
                  <div class="icon">
                    <i class="et-line {{ $service['icon'] }}"></i>
                  </div>
                  <h4>{!! nl2br(e($service['title'])) !!}</h4>
                    <p style="width:260px; margin:0 auto; text-align:center ; font-size: 11px">{{ $service['description'] }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

  {{-- 🧩 Include nav dengan parameter --}}
  @include('partials.page-nav', ['prev' => 'about', 'next' => 'resume'])

  </div> <!-- /.pt-tablecell -->
</div> <!-- /.pt-table -->
@endsection