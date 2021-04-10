<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/')}}">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/')}}">Home</a></li>
      <li><a href="{{url('/about')}}">About</a></li>
      <li><a href="{{url('/services')}}">Services</a></li>
      <li><a href="{{url('/posts')}}">Blog</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="{{url('/posts/create')}}">Create post</a></li>
    </ul>
  </div>
  </nav>
