<aside class="">
    <div class="">
      <h1>More Posts</h1>
    </div>
    <div class="">
      <ul class="">

        @foreach ($archives as $stats)
          <li>
            <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
              {{ $stats['month'] . ' ' . $stats['year'] }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="">
    </div>
  </aside>

