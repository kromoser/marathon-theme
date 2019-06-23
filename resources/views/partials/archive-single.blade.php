<article @php post_class('column') @endphp>
  <header class="post-header">
    @include('partials/entry-meta-single')
      <h2 class="entry-title ">
        <a href="{!! get_the_permalink() !!}">{!! get_the_title() !!}</a>
      </h2>
      <h3 class="single-excerpt">{!! get_the_excerpt() !!}</h3>
  </header>
</article>
