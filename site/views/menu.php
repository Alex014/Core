<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CORE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?if($active == 'about'):?>active<?endif;?>">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item <?if($active == 'structure'):?>active<?endif;?>">
        <a class="nav-link" href="/structure">Framework structure</a>
      </li>
      <li class="nav-item <?if($active == 'di'):?>active<?endif;?>">
        <a class="nav-link" href="/di">Dependency Injection</a>
      </li>
      <li class="nav-item <?if($active == 'routes'):?>active<?endif;?>">
        <a class="nav-link" href="/routes">Routes</a>
      </li>
      <li class="nav-item <?if($active == 'controllers'):?>active<?endif;?>">
        <a class="nav-link" href="/controllers">Controllers</a>
      </li>
      <li class="nav-item <?if($active == 'allowed'):?>active<?endif;?>">
        <a class="nav-link" href="/allowed/15">Access</a>
      </li>
      <li class="nav-item <?if($active == 'views'):?>active<?endif;?>">
        <a class="nav-link" href="/views">Views</a>
      </li>
    </ul>
  </div>
</nav>