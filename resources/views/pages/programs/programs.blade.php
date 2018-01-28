@extends('pages/layout')
@section('content')
<h1>Here are some examples of my work</h1>
<h1>Commercial Sites</h1>
<div class="program-container">
  <program>
    <h1 slot="title">Some Title</h1>
    <p slot="description">Some Description</p>
    <img slot="image" src="{{ URL::to('/') }}/images/March26.png" alt="">
  </program>
  <program>
  <h1 slot="title">Integrity Divorce</h1>
    <p slot="description">Custom site built with Vue.js, Wordpress ReST API, and 
      Woocommerce 
    </p>
    <img slot="image" src="{{ URL::to('/') }}/images/March26.png" alt="">
  </program>
  <program>
  <h1 slot="title">Manitoba Incorporate</h1>
    <p slot="description">Custom Wordpress e-commerce theme built using SCSS and Woocommerce</p>
    <img slot="image" src="{{ URL::to('/') }}/images/March26.png" alt="">
  </program>
  <program></program>
  <program></program>
</div>

<h1>Personal Projects</h1>
<div class="program-container">

</div>

<h1>Free Code Camp</h1>
<p>Learning to program through Free Code Camp was a rewarding experience
  which I would highly recommend to anyone beginning to lear web development
</p>
<div class="fcc-container">
    <div class="fcc">
      <program>
        <h1 slot="title">Tic-Tac-Toe</h1>
        <p slot="description">Play against a human or computer opponent. 
          Optimized using the minimax algorithm
        </p>
        <img slot="image" src="{{ URL::to('/') }}/images/March26.png" alt="">
      </program>
      <program>
        <h1 slot="title">Local Weather</h1>
        <p slot="description">Displays a 5 day forecast in your
          current city
        </p>
        <img slot="image" src="{{ URL::to('/') }}/images/March26.png" alt="">
      </program>
      <program>
        <h1 slot="title">Javascript Calculator</h1>
        <p slot="description">basic calculator created with javascript
        </p>
        <img slot="image" src="{{ URL::to('/') }}/images/March26.png" alt="">
      </program>
      <program>
        <h1 slot="title">Image Search Metadata</h1>
        <p slot="description">Provides custom details for Google searches. 
          Bult with React.js, Express.js, Node.js, and MongoDB
        </p>
        <img slot="image" src="{{ URL::to('/') }}/images/March26.png" alt="">
      </program>
    </div>
  </div>
@endsection