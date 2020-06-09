<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- js --}}
    <script type="text/javascript" src="js/app.js"> </script>
    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="css/app.css">
    <title>Tema Martina</title>
  </head>

  <body>
    <header>
      <div class="header-container flex-container">

        {{-- left --}}
        <div class="logo-container flex-container">
          <img src="img/Logo-M.png" alt="logo" width="80px" height="80px">
        </div>

        {{-- right --}}
        <div class="header-content flex-container">
          @yield('header-title')
        </div>
      </div>
    </header>


    <main class="flex-container">
      {{-- side --}}
      <aside>
        <div class="side-container">
          <nav>
            <ul>
              <a href="/"><li>HOME</li></a>
              <a href="about"><li>ABOUT</li></a>
              <a href="contacts"><li>CONTACT</li></a>
            </ul>
          </nav>
        </div>
      </aside>

      {{-- main --}}
      <section>
        <div class="main-container">
          @yield('main-content')
        </div>
      </section>
    </main>


    <footer>
      <div class="footer-container">
        @include('footer')
      </div>
    </footer>
  </body>
</html>
