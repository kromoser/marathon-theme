<header class="banner">
    <!--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>-->
    <nav class="navbar">
      <div class="navbar-brand">
        <a class="navbar-brand--name" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['container_class'=>'navbar-menu is-transparent','theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-menu is-transparent is-right']) !!}
      @endif


    </nav>
</header>
