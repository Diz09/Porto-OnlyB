@extends('index')
@section('title', 'Resume')
@section('content')
  <div class="pt-table">
    <div class="pt-tablecell page-resume relative">

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
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="history-block">
              <div class="section-title light clear">
                <h3>Education</h3>
              </div>
              <!-- /.section-title -->
              <div class="history-scroller">
                @foreach ($education as $item)
                  <div class="history-item">
                    <div class="history-icon">
                      <span class="history-hex"></span>
                      <i class="tf-documents5"></i>
                    </div>
                    <div class="history-text">
                      <h5>{{ $item['institution'] }}</h5>
                      <span>{{ $item['year'] }}</span>
                      @if (!empty($item['description']))
                        <p>{!! nl2br(e($item['description'])) !!}</p>
                      @endif
                    </div>
                  </div>
                @endforeach
              </div>
            </div> <!-- /.history-block -->
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="history-block">
              <div class="section-title light clear">
                <h3>Experiences</h3>
              </div>
              <!-- /.section-title -->
              <div class="history-scroller">
                @foreach ($experience as $item)
                  <div class="history-item">
                    <div class="history-icon">
                      <span class="history-hex"></span>
                      <i class="tf-documents5"></i>
                    </div>
                    <div class="history-text">
                      <h5>{{ $item['place'] }}</h5>
                      <span>{{ $item['year'] }}</span>
                      @if (!empty($item['description']))
                        <p>{!! nl2br(e($item['description'])) !!}</p>
                      @endif
                    </div>
                  </div>
                @endforeach
              </div>
            </div> <!-- /.history-block -->
          </div> 
        </div> 
      </div> 
      
      {{-- 🧩 Include nav dengan parameter --}}
      @include('partials.page-nav', ['prev' => 'service', 'next' => 'work'])

    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
@endsection