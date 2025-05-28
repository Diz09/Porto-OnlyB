@extends('index')
@section('title', 'Welcomes')
@section('content')
<div class="pt-table">
  <div class="pt-tablecell page-welcome relative">

    <div class="author-image-large">
      <img src="{{ asset('images/' . $authorImage) }}" alt="">
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-7">
          <div class="page-title">
            <h2>
              {{ $name }} <br>
              <span class="primary">{{ $highlight}}</span> 
              <span class="title-bg">{{ $sectionTitle }}</span></h2>
            <p>{{ $description1 }}</p>
            <p>{{ $description2 }}</p>
          </div>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->

    {{-- 🧩 Include nav dengan parameter --}}
    @include('partials.page-nav', ['prev' => 'home', 'next' => 'about'])

  </div> <!-- /.pt-tablecell -->
</div> <!-- /.pt-table -->
@endsection