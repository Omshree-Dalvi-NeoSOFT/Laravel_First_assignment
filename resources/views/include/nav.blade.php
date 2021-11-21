<nav class="navbar navbar-expand-lg navbar-light ticky-top" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NeoSOFT Technology </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page">Welcome :: </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('master/home') }}">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile Actions
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('master/edit') }}">Edit Profile</a></li>
            <li><a class="dropdown-item" href="{{ url('master/changepass') }}">Change Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="me-2 btn btn-outline-primary" type="submit">Search</button>
        <a class="me-2 btn btn-outline-success" aria-current="page" href="{{ url('/') }}" role="button">Login</a>
        <a class="btn btn-outline-danger" aria-current="page" href="{{ url('/') }}" role="button">Logout</a>
      </form>
    </div>
  </div>
</nav>
