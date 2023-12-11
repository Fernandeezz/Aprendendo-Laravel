<h1>Novo Suporte</h1>

<form action="{{ route('supports.store') }}" method="post">
    <input type="text" name="" id="" value="{{ csrf_token() }}" name="_token">
    <input type="text" name="subject" id="" placeholder="Assunto">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>