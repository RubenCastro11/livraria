<ul>
{{$editoras->render()}}
@foreach($editoras as $editora)
<li>
<a href="{{route('editora.show', ['ide'=>$editora->id_editora])}}">
    {{$editora->nome}}
</a></li>
@endforeach
</ul>