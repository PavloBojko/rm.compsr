<html>
  <head>
    <title><?=$this->e($title)?></title>
  </head>
  <body>
      <nav>
          <ul><a href="/">Home Page</a></ul>
          <ul><a href="/about">About</a></ul>
          <ul><a href="/profile">User</a></ul>
          <ul><a href="/contact">Contact</a></ul>
      </nav>
    <?=$this->section('content')?>
  </body>
</html>