    <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          {{ link_to_route('root_path', 'sample app', [], ['id' => 'logo']) }}
          <nav>
            <ul class="nav pull-right">
              <li>{{ link_to_route('root_path',  'Home')}}</li>
              <li>{{ link_to_route('help_path',  'help')}}</li>
              <li>{{ link_to('#', 'Sign in')}}</li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
