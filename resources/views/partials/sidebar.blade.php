<aside class="">
    <div class="">
      <h4>More Posts</h4>
    </div>
    <div class="">
      <h4>Archives</h4>
      <ol class="">

        @foreach ($archives as $stats)
          <li>
            <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
              {{ $stats['month'] . ' ' . $stats['year'] }}
            </a>
          </li>
        @endforeach
      </ol>
    </div>
    <div class="">
      <h4>Elsewhere</h4>
      <ol class="">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
      </ol>
    </div>
  </aside>

