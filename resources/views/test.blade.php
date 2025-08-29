<html>
  
  <body>
    {{--
    This is a comment
  --}}
  @include('subviews.input', [
  'name' => 'Apcodesphere', ])
    @for($i=0 ; $i<100; $i++)
    <p>{{ $i }}</p>
    @if($i % 5 == 0)
    <p>Multiple of 5 is {{ $i }}</p>
    @endif
    @endfor
  </body>
</html>