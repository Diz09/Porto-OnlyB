<style>
.topbar {
    position: fixed;
    top: 0;
    width: 100%;
    background: rgba(255, 0, 0, 0.269); /* merah kabur */
    backdrop-filter: blur(5px);
    z-index: 999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 2rem;
    font-family: 'Open Sans', sans-serif;
}

.topbar .nav-links {
    display: flex;
    gap: 1.5rem;
}

.topbar .nav-links a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 1.3rem;
    transition: color 0.3s ease;
}

.stroked-text-a {
    color: white; /* warna isi teks */
    -webkit-text-stroke: 0.25px rgb(188, 188, 188); /* ketebalan dan warna garis tepi */
    text-transform: uppercase;
    font-weight: bold;
}


.topbar .nav-links a:hover {
    color: #ffb907e8; /* kuning saat hover */
}

.topbar .logo {
    color: #fff;
    font-size: 2rem;
    font-weight: 700;
}

.stroked-text-logo {
    color: white; /* warna isi teks */
    -webkit-text-stroke: 0.5px gray; /* ketebalan dan warna garis tepi */
    text-transform: uppercase;
    font-weight: bold;
}

</style>

<div class="topbar">
  <div class="logo stroked-text-logo">
    <a href="{{ route('home') }}">My Portofolio</a>
  </div>
  <div class="nav-links stroked-text-a">
    <a href="{{ route('welcome') }}">Welcome</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('service') }}">Services</a>
    <a href="{{ route('resume') }}">Resume</a>
    <a href="{{ route('work') }}">Works</a>
    <a href="{{ route('testimonial') }}">Testimonials</a>
    <a href="{{ route('contact') }}">Contact</a>
  </div>
</div>
