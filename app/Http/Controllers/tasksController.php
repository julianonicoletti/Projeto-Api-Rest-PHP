<?php

namespace App\Http\Controllers;
use App\Models\tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class tasksController extends Controller
{
   
    public function index(Request $request) //lista as tarefas por ordenação e paginaçao
    {
        $porPagina = $request->input('por_pagina', 10); // Por padrão 10 ítens por pagina
        $ordenarPor = $request->input('ordenar_por', 'id'); // Por padrão irá ordenar pelo ID
        $ordenarDirecao = $request->input('ordenar_direcao', 'asc'); // E será ordenado pelo ID de forma ascendente

        $tasks = tasks::orderBy($ordenarPor, $ordenarDirecao)->paginate($porPagina);
        return response()->json($tasks);
    }
    
    public function create(Request $request)
    {
        $validation = $this->validateTaskData($request);

    if ($validation['error']) {
        return response()->json(['error' => $validation['message']], 400);
    }
        $task = new tasks;
        $task->titulo = $request->input('titulo');
        $task->descricao = $request->input('descricao');
        $task->status = $request->input('status');

        $task->save();

        return response()->json($task, 201);
        
    }

            
    public function show($id)
{
    $task = $this->procuraPorId($id);

    if (!$task) {
        return response()->json(['error' => 'Tarefa não encontrada'], 404);
    }

    return response()->json($task);
}
    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, $id)
{
    $task = $this->procuraPorId($id);

    if (!$task) {
        return response()->json(['error' => 'Tarefa não encontrada'], 404);
    }

    $validation = $this->validateTaskData($request);

    if ($validation['error']) {
        return response()->json(['error' => $validation['message']], 400);
    }

    $task->titulo = $request->input('titulo');
    $task->descricao = $request->input('descricao');
    $task->status = $request->input('status');
    // Outros campos que você precise atualizar

    $task->save();

    return response()->json($task);
}

        
    public function destroy($id)
{
    $task = $this->procuraPorId($id);

    if (!$task) {
        return response()->json(['error' => 'Tarefa não encontrada'], 404);
    }

    $task->delete();

    return response()->json(['message' => 'Item apagado com sucesso']);
}

    private function procuraPorId($id) //método para procurar se o ID informado existe no Banco
{
    $task = tasks::find($id);

    if (!$task) {
        return false;
    }

    return $task;
}

private function validateTaskData(Request $request) //método para validar a entrada de tipos corretos de dados
{
    $validacao = Validator::make($request->all(), [
        'titulo' => ['required', 'string'],
        'descricao' => ['required', 'string'],
        'status' => ['required', 'string'],
    ]);

    if ($validacao->fails()) {
        return [
            'error' => true,
            'message' => 'Dados inseridos estão incorretos',
        ];
    }

    return [
        'error' => false,
    ];
}
}
