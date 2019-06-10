<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('has-background-grey-darker	has-text-white') @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @php $id = get_the_ID() @endphp
          <div class="featured-image-container" style="background-image: url(@php echo get_the_post_thumbnail_url() @endphp); background-size: cover; background-position: @php echo get_post_meta($id, 'background_position', true) @endphp">

          </div>
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>