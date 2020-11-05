<ul>
IDG:{{$genero->idg}}<br>
Designação:{{$genero->designacao}}<br>
Observações:{{$genero->observacao}}
@if(count($genero->livros))
        @foreach($genero->livros as $livro)
            {{$livro->titulo}}<br>
        @endforeach
    @else
        <div class="alert alert-danger" role="alert">
            Neste genero ainda não há livros!
        </div>
    @endif
</ul>