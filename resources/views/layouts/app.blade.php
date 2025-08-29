<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
                <style type="text/tailwindcss">
          @theme{
            --color-light : white;
            --color-primary : orange;
          }
        </style>
        @yield('styles')
        <marquee>Notice: This site is Under Development</marquee>
        <nav class="mx-auto flex bg-primary gap-5 p-2 color-light">
          <h1 class="text-orange-900">UpSchool</h1>
       <div class="text-align:center">  <a href="" class="text-blue-500">Home</a>
          <a href="">About</a>
          <a href="">Courses</a>
          <a href="">Stats</a>
          <a href="">Staffs</a>
          <a href="">Contact</a>
          </div>
        </nav>
@yield('content')
<script>
  setTimeout(window.alert('Test', 200));
</script>
@yield('scripts')
  </head>
</html>