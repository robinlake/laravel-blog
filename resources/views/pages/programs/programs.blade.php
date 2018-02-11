@extends('pages/layout')
@section('content')
<h1>Here are some examples of my work</h1>
<h1>Commercial Sites</h1>
<div class="program-container">
  <!-- <program>
    <a slot="link" target="_blank" href="https://robinlake.github.io/Tic-Tac-Toe/">
      <h1 slot="title">Some Title</h1>
      <p slot="description">Some Description</p>
      <img slot="image" src="{{ URL::to('/') }}/images/programImages/sites/integrity-divorce.jpg" alt="">
    </a>
  </program> -->
  <program>
    <a slot="link" target="_blank" href="http://www.integritydivorce.ca/">
      <h1 slot="title">Integrity Divorce</h1>
      <p slot="description">Custom site built with Vue.js, Wordpress ReST API, and 
        Woocommerce 
      </p>
      <img slot="image" src="{{ URL::to('/') }}/images/programImages/sites/integrity-divorce.jpg" alt="">
    </a>
  </program>
  <program>
    <a slot="link" target="_blank" href="https://www.manitobaincorporate.com">
      <h1 slot="title">Manitoba Incorporate</h1>
      <p slot="description">Custom Wordpress e-commerce theme built using SCSS and Woocommerce</p>
      <img slot="image" src="{{ URL::to('/') }}/images/programImages/sites/manitoba-incorporate.jpg" alt="">
    </a>
  </program>
</div>

<h1>Personal Projects</h1>
<div class="program-container">

</div>


<div class="fcc-container">
    <h1>Free Code Camp</h1>
    <p>Learning to program through Free Code Camp was a rewarding experience
      which I would highly recommend to anyone beginning to learn web development
    </p>
  <div class="fcc">
      <program>
        <a slot="link" target="_blank" href="https://robinlake.github.io/Tic-Tac-Toe/">
          <h1 slot="title">Tic-Tac-Toe</h1>
          <p slot="description">Play against a human or computer opponent. 
            Optimized using the minimax algorithm
          </p>
          <img slot="image" src="{{ URL::to('/') }}/images/programImages/Tic-Tac-Toe cropped.jpg" alt="">
        </a>
      </program>
      <program>
        <a slot="link" target="_blank" href="https://local-weather-fcc.herokuapp.com/">
          <h1 slot="title">Local Weather</h1>
          <p slot="description">Displays a 5 day forecast in your
            current city
          </p>
          <img slot="image" src="{{ URL::to('/') }}/images/programImages/Local Weather.png" alt="">
        </a>
      </program>
      <program>
        <a slot="link" target="_blank" href="https://robinlake.github.io/Javascript-Calculator/">
          <h1 slot="title">Javascript Calculator</h1>
          <p slot="description">basic calculator created with javascript
          </p>
          <img slot="image" src="{{ URL::to('/') }}/images/programImages/Calculator.jpg" alt="">
        </a>
      </program>
      <program>
        <a slot="link" target="_blank" href="https://img-data.herokuapp.com/">
          <h1 slot="title">Image Search Metadata</h1>
          <p slot="description">Provides custom details for Google searches. 
            Bult with React.js, Express.js, Node.js, and MongoDB
          </p>
          <img slot="image" src="{{ URL::to('/') }}/images/programImages/image-search.jpg" alt="">
        </a>
      </program>
    </div>
  </div>
@endsection