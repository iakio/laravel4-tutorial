      <footer class="footer">
        <small>
          <a href="http://railstutorial.jp">Rails Tutorial</a>
        </small>
        <nav>
          <ul>
            <li>{{ link_to_route('about_path',   'About') }}</li>
            <li>{{ link_to_route('contact_path', 'Contact') }}</li>
            <li><a href="http://news.railstutorial.jp">News</a></a></li>
          </ul>
        </nav>
      </footer>
