<header>
  <div class="container">
    <div class="left">
      <a href="/"><h1>HOME</h1></a>
      <a @if ( Request::route()->getName() === 'comics.index') active @endif" href="{{ route('comics.index') }}"><h2>I nostri fumetti</h2></a>
    </div>
    <div class="right">

    </div>
  </div>
</header>