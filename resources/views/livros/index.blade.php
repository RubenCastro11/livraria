<ul>
{{$livros->render()}}
@foreach($livros as $livro)
<li>
<a href="{{route('livro.show', ['id'=>$livro->id_livro])}}">
    {{$livro->titulo}}
</a>
</li>
@endforeach
</ul>