@extends('index')
@section('hexagon')
  <div class="pt-table">
    <div class="pt-tablecell page-home relative" style="background-image: url('images/banner.jpg');">
      <div class="overlay"></div>

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title home text-center">
              {{-- <img src="images/phantom.png" alt=""> --}}
              <div class="masked-text">This Is<br>My Portofolio</div>
              <p>I build web applications through continuous project-based learning &amp; each project refining my skills in writing clean code and delivering functional web experience</p>
            </div>

            <div class="hexagon-menu clear">
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="{{ route('welcome') }}" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-dial"></i>
                    </span>
                    <span class="title">Welcome</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                      fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="{{ route('about') }}" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-profile-male"></i>
                    </span>
                    <span class="title">About</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="{{ route('service') }}" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-tools-2"></i>
                    </span>
                    <span class="title">Services</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="{{ route('resume') }}" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-tools"></i>
                    </span>
                    <span class="title">Resume</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="{{ route('project') }}" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-briefcase2"></i>
                    </span>
                    <span class="title">Projects</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="{{ route('achievement') }}" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-chat"></i>
                    </span>
                    <span class="title">Achievements</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
              <div class="hexagon-item">
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="hex-item">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <a href="{{ route('contact') }}" class="hex-content">
                  <span class="hex-content-inner">
                    <span class="icon">
                      <i class="tf-envelope2"></i>
                    </span>
                    <span class="title">Contact</span>
                  </span>
                  <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                  </svg>
                </a>
              </div>
            </div> <!-- /.hexagon-menu -->

          </div> <!-- /.col-xs-12 -->

        </div> <!-- /.row -->
      </div> <!-- /.container -->

    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
@endsection