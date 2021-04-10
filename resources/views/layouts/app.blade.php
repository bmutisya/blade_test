
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <title>{{config('app.name','Blog')}}</title>
          
          <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

        
    </head>
    <body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
        </div>

    </body> 
</html>
