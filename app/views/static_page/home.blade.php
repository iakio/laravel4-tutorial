@extends('layouts.master')

@section('content')
<div class="center hero-unit">
  <h1>Welcome to the Sample App</h1>
  
  <h2>
    This is the home page for the
    <a href="http://railstutorial.jp">Ruby on Rails Tutorial</a>
    sample application.
  </h2>
  
  {{ link_to("#", "Sign up now!", ["class" => "btn btn-large btn-primary"]) }}
</div>

<a href="http://rubyonrails.org">{{ HTML::image("images/rails.png", "Rails") }}</a>
@stop
