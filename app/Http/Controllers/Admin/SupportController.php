<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support::all();

        /*Essa linha de código retorna uma visualização (view) chamada 'admin.supports.index' 
        e passa a variável $supports para ela. O compact('supports') é usado para criar um array 
        associativo com o nome da variável ('supports') como chave e o valor da variável como valor, 
        para que possa ser passado para a visualização. Isso permite que a visualização tenha acesso 
        à variável $supports e exiba os dados correspondentes */
        return view('admin.supports.index', compact('supports'));
        
    }

    public function show(string|int $id)
    {
        if (!$support = Support::find($id)) {
            return back();
        }
        return view('admin.supports.show', compact('support'));
       
    }

    public function create(){
        return view('admin.supports.create');
    }

    public function store(Request $request, Support $support){

        $data = $request->except('_token'); // Exclua o campo _token antes de criar o modelo
    
        $data['status'] = 'a';
    
        $support = $support->create($data);
    
        return redirect()->route('supports.index');
    }   
    
    public function edit(Support $support, string|int $id){
        if (!$support = Support::where('id', $id)->first()) {
            return back();
        }
        return view('admin.supports.edit', compact('support'));
    }

    public function update(Request $request, Support $support, string|int $id){
        if (!$support = Support::find($id)) {
            return back();
        }
        
        $support->update($request->only(['subject', 'body']));

        return redirect()->route('supports.index');
    }
}
