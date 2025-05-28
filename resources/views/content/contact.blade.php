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

          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
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
            <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 col-lg-offset-2">
              <div class="section-title clear">
                <h3>Send me a meesage</h3>
                <span class="bar-dark"></span>
                <span class="bar-primary"></span>
              </div>

              <form id="contact-form" class="row contact-form no-gutter" action="#" method="post">
                <div class="col-xs-12 col-sm-6">
                  <div class="input-field name">
                    <span class="input-icon" id="name"><i class="tf-profile-male"></i></span>
                    <input type="text" class="form-control" placeholder="Enter your name" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-6">
                  <div class="input-field email">
                    <span class="input-icon" id="email"><i class="tf-envelope2"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Your email address" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field">
                    <span class="input-icon" id="subject"><i class="tf-pricetags"></i></span>
                    <input type="text" class="form-control" name="subject" placeholder="Enter the discussion title" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field message">
                    <span class="input-icon"><i class="tf-pencil2"></i></span>
                    <textarea name="message" id="message" class="form-control"
                      placeholder="Write your message" required></textarea>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field">
                    <span class="btn-border">
                      <button type="submit" class="btn btn-primary btn-custom-border text-uppercase">Send Message
                        now</button>
                    </span>
                  </div>
                  <div class="msg-success">Your Message was sent successfully</div>
                  <div class="msg-failed">Something went wrong, please try again later</div>
                </div> <!-- ./col- -->
              </form> <!-- /.row -->
            </div> <!-- /.col- -->
          </div> <!-- /.row -->
        </div> <!-- /.container -->
        
      {{-- 🧩 Include nav dengan parameter --}}
      @include('partials.page-nav', ['prev' => 'testimonial'])

      </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
@endsection