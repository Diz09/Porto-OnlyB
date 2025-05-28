@extends('index')
@section('title', 'About Me')
@section('content')
  <div class="pt-table">
    <div class="pt-tablecell page-about relative">

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title text-center">
              <h2>
                {{ $title }} 
                <span class="primary">{{ $subtitle }}</span> 
                <span class="title-bg">{{ $sectionLabel }}</span>
              </h2>
              <p>{{ $description }}</p>
            </div>
          </div>

          <div class="col-xs-12 col-md-6">
            <div class="about-author">
              <figure class="author-thumb">
                <img src="{{ asset('images/' . $author['image']) }}" alt="">
              </figure> <!-- /.author-bio -->
              <div class="author-desc">
                <p><b>Date of birth:</b> {{ $author['dob'] }}</p>
                <p><b>Language:</b> {{ $author['languages'] }}</p>
                <p><b>Expert in:</b> {{ $author['expertise'] }}</p>
                <p><b>Campus:</b> {{ $author['campus'] }}</p>
                <p><b>Department:</b> {{ $author['dsp'] }}</p>
                <p><b>generation:</b> {{ $author['generation'] }}</p>
              </div>
              <!-- /.author-desc -->
            </div> <!-- /.about-author -->
            <p>{{ $author['bio'] }}</p>
          </div> <!-- /.col -->

          <div class="col-xs-20 col-md-6">
            <div class="section-title clear">
              <h3>Skills</h3>
            </div>
            <div class="skill-wrapper">
              @foreach($skills as $skill)
              <div class="progress clear">
                <div class="skill-name">{{ $skill['name'] }}</div>
                <div class="skill-bar">
                  <div class="bar"></div>
                </div>
                <div class="skill-lavel" data-skill-value="{{ $skill['level'] }}"></div>
              </div> <!-- /.progress -->
              @endforeach
            </div> <!-- /.skill-wrapper -->
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
      
      {{-- 🧩 Include nav dengan parameter --}}
      @include('partials.page-nav', ['prev' => 'welcome', 'next' => 'service'])

    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
@endsection