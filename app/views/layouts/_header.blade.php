    <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          {{ link_to('#', 'sample app', ['id' => 'logo']) }}
          <nav>
            <ul class="nav pull-right">
              <li>{{ link_to_action('StaticPageController@home', 'Home')}}</li>
              <li>{{ link_to_action('StaticPageController@help', 'help')}}</li>
              <li>{{ link_to_action('StaticPageController@about', 'about')}}</li>
              <li>{{ link_to('#', 'Sign in')}}</li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
