<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<title>Liste médicaments</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/fontawesome.min.js') }}"></script>
    <link rel="stylesheet" href="{{asset('zz/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('zz/css/font-awesome.min.css')}}">
</head>
<body>
    <div id="app">
        <nav class="team-heading text-center">
            <div class="container">
                <a href="/"><img src="{{asset('zz/img/ph.jpg')}}" alt="" class="img-responsive logo" height="10%" width="10%"></a>
                
            </div>
        </nav>
        
    </div>

@php
 $nh = DB::table('medicaments')->count();
 $medicaments = DB::table('medicaments')->get();

 @endphp

                <div class="team-heading text-center">
            <h4> Liste médicaments ({{$nh}}) </h4></div>

        <div class="card">       
          <table class="table">

             <tr>
                <th>Nom</th>
                <th>Dosage</th>
                <th>Forme</th>
                <th>Famille</th>
                <th>Disponible</th>
                <th>remboursable</th>

            </tr>

              @foreach($medicaments as $medicament)
            <tr>
                <td>  {{ $medicament->nom}}  </td>
                <td>  {{ $medicament->dosage}}  </td>
                <td>  {{ $medicament->forme}}  </td>
                <td>  {{ $medicament->famille}}  </td>
                @php
      $ns=$medicament->stockmin;
      $a=$medicament->nom;
@endphp
                <td id="{{$a}}"> <script type="text/javascript">


     if ({{$ns}}==0)
{
 document.getElementById("{{$a}}").innerHTML = "Non";    

}
else 
{
     document.getElementById("{{$a}}").innerHTML = "Oui";
}
 </script>   </td>
  
@php
      $n=$medicament->remboursable;
      $z=$medicament->id;
@endphp
                 <td id="{{$z}}"><script type="text/javascript">


     if ({{$n}}==1)
{
 document.getElementById("{{$z}}").innerHTML = "Oui";    

}
else 
{
     document.getElementById("{{$z}}").innerHTML = "Non";
}
 </script></td>
               


               
             </tr>
        @endforeach
}
</table>
        </div>
        

    

    


</body>
</html>
