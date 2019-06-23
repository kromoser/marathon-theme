@extends('layouts.post-archive')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.archive-single-'.get_post_type())
  @endwhile
@endsection
