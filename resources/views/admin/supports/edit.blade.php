<h1>Editar Reclamação de Número:{{ $support->id }}</h1>

<form action="{{ route('supports.update', ['id' => $support->id]) }}" method="post">
    @csrf
    @method('PUT') <!-- ou method('PATCH') dependendo da configuração do seu aplicativo -->
    <input type="text" name="subject" placeholder="Assunto" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>
