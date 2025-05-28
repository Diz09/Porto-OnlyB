<nav class="page-nav clear">
  <div class="container">
    <div class="flex flex-middle space-between">
      <span class="prev-page">
        @if (!empty($prev))
          <a href="{{ route($prev) }}" class="link">&larr; Prev Page</a>
        @endif
      </span>
      <span class="copyright">
        Copyright &copy; {{ date('Y') }}, Designed &amp; Developed by
        <a href="https://themefisher.com/">Themefisher</a>.
      </span>
      <span class="next-page">
        @if (!empty($next))
          <a href="{{ route($next) }}" class="link">Next Page &rarr;</a>
        @endif
      </span>
    </div>
  </div>
</nav>
