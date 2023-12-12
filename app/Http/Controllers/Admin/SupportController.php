<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use App\Service\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function __construct(protected SupportService $service)
    {
    }

    public function index(Request $request)
    {
        $supports = $this->service->getAll($request->filter);

        /*Essa linha de código retorna uma visualização (view) chamada 'admin.supports.index' 
        e passa a variável $supports para ela. O compact('supports') é usado para criar um array 
        associativo com o nome da variável ('supports') como chave e o valor da variável como valor, 
        para que possa ser passado para a visualização. Isso permite que a visualização tenha acesso 
        à variável $supports e exiba os dados correspondentes */
        return view('admin.supports.index', compact('supports'));
    }

    public function show(string|int $id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        return view('admin.supports.show', compact('support'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(StoreUpdateSupport $request, Support $support)
    {

        $data = $request->except('_token'); // Exclua o campo _token antes de criar o modelo

        $data['status'] = 'a';

        $support = $support->create($data);

        return redirect()->route('supports.index');
    }

    public function edit(string|int $id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        return view('admin.supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request, Support $support, string|int $id)
    {
        if (!$support = Support::find($id)) {
            return back();
        }
        /*a linha de código completa está atualizando a instância do modelo Support com os valores 
        fornecidos no formulário para os campos 'subject' e 'body'. Essencialmente, ela está realizando 
        uma atualização no banco de dados para o registro representado por $support, usando as informações 
        fornecidas no formulário. */
        $support->update($request->validated());

        /*redireciona para a rota 'supports.index' após a edição for concluída */
        return redirect()->route('supports.index');
    }
    public function destroy(string $id)
    {
        $this->service->delete($id);

        return redirect()->route('supports.index');
    }
}
