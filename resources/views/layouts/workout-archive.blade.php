<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('has-background-grey-darker') @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main section columns is-reverse-mobile">
          <div class="column is-6-desktop is-7-tablet is-offset-1-tablet">
            <div class="columns is-multiline workouts-archive is-mobile">
              @yield('content')
            </div>
          </div>
          <div class="column category-title is-5-desktop is-4-tablet">
            {{-- This returns the label if the page is displaying a CPT or pluralizing the category name if a category page --}}
            <h1 class="has-text-centered-mobile">@php echo get_queried_object()->label ? get_queried_object()-> label : App\Inflect::pluralize( get_queried_object()->name )@endphp</h1>
          </div>
        </main>

      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
