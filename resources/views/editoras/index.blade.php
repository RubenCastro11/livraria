<ul>
{{$editoras->render()}}
@foreach($editoras as $editora)
<li>
<a href="{{route('editora.show', ['ide'=>$editora->ide])}}">
    {{$editora->nome}}
</a></li>
@endforeach
</ul>