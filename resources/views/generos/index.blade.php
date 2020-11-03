<ul>
{{$generos->render()}}
@foreach($generos as $genero)
<li>
<a href="{{route('genero.show', ['idg'=>$genero->idg])}}">
    {{$genero->designacao}}
</a></li>
@endforeach
</ul>