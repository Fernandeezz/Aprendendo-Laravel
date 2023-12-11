<h1>Novo Suporte</h1>

<form action="{{ route('supports.store') }}" method="post">
    @csrf <!-- Use a diretiva para incluir automaticamente o token CSRF -->
    <input type="text" name="subject" placeholder="Assunto">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>
