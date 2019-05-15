<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('roomname')</title>
  <link rel="stylesheet" href="/css/styles.css">
  <p class="body mx-auto">@yield('readme')</p>
</head>
<body>
  <div id="header">
    @yield('header')
    <h1>掲示板</h1>
  </div><!-- header -->
  <div id="main">
    @yield('content')
  </div><!-- main -->
</body>
</html>
