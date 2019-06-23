@extends(‘layouts.post-container’)

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
    @title
  @endwhile
@endsection
