<ul>
Id_autor:{{$autores->ida}}<br>
Nome:{{$autores->nome}}<br>
@if(count($autores->livros))
        @foreach($autores->livros as $livro)
            {{$livro->titulo}}<br>
        @endforeach
    @else
        <div class="alert alert-danger" role="alert">
            Neste autor ainda não há livros!
        </div>
    @endif
Nacionalidade:{{$autores->nacionalidade}}<br>
Data de Nascimento:{{$autores->data_nascimento}}<br>
Fotografia:{{$autores->fotografia}}
</ul>