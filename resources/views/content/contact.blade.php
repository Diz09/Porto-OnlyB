@extends('index')
@section('title', 'Contact')
@section('content')
  <div class="pt-table">
    <div class="pt-tablecell page-contact relative">

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

        <div class="row conten-y">
            <div class="col-xs-12 col-sm-5 col-lg-3 conten-u">
              @foreach ($contacts as $contact)
                <div class="contact-block">
                  <div class="media">
                    <div class="media-left">
                      <i class="{{ $contact['icon'] }}"></i>
                    </div>
                    <div class="media-body">
                      <h4>{{ $contact['label'] }}</h4>
                      <p><a href="{{ $contact['href'] }}">{{ $contact['text'] }}</a></p>
                    </div>
                  </div>
                </div>
              @endforeach

              <ul class="contact-social">
                @foreach ($socials as $social)
                  <li>
                    <span class="contact-social-hex"></span>
                    <a href="{{ $social['url'] }}"><i class="{{ $social['icon'] }}"></i></a>
                  </li>
                @endforeach
              </ul>

            </div>

            {{-- awal form --}}
            <div class="col-md-5 conten-x">
              <div class="section-title clear">
                <h3>Contact via WhatsApp <i class="bi bi-whatsapp"></i></h3>
                <span class="bar-dark"></span>
                <span class="bar-primary"></span>
              </div>

              <div class="text-center">
                {{-- <p>Scan QR code di bawah atau klik tombol untuk langsung terhubung dengan saya via WhatsApp.</p> --}}
                <div class="wa-link">
                  <img src="{{ $qrCodeUrl }}" alt="WhatsApp QR Code">

                  <a href="{{ $waLink }}" target="_blank" class="btn btn-success btn-lg">
                    <i class="fa fa-whatsapp"></i> Hubungi via WhatsApp
                  </a>
                </div>
              </div>
            </div>
          </div>

            
        </div> <!-- /.row -->
      </div> <!-- /.container -->
      
    {{-- 🧩 Include nav dengan parameter --}}
    @include('partials.page-nav', ['prev' => 'achievement'])

    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
@endsection