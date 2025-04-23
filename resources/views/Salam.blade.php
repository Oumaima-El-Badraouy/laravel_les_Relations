@include('partiel.nav')
<!--commentaire-->
{{-- commontaire --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
       <p>{{ session('success') }}</p>

    @endif
<h1>SALAM
    @switch($nom)
       @Case("farah")
         bonjour farah
         @break;
         @Case("Oumai")
              {{ $nom }}
              @break;
    @default
   <p>pas de nom</p>
   @endswitch
</h1>
<h2 style='color: red;'>Les lengages de programation maitrisé sont :</h2>
<ul>
@isset($cours)
      @foreach ($cours as $value)
    <li> {{ $value }}</li>
     @endforeach
@else
<p>pas de cours </p>
@endisset
</ul>
</body>
</html>
