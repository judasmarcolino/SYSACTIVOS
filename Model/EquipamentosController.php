<?php

namespace App\Controller;

use App\Model\Equipamento;
use Core\Controller\Controller;

class EquipamentosController extends Controller
{
    public function index()
    {
        $equipamentos = Equipamento::all();

        $this->view('equipamentos/index', compact('equipamentos'));
    }

    public function create()
    {
        $this->view('equipamentos/create');
    }

    public function store()
    {
        Equipamento::create($_POST);

        $this->redirect('/equipamentos');
    }

    public function edit($id)
    {
        $equipamento = Equipamento::find($id);

        $this->view('equipamentos/edit', compact('equipamento'));
    }

    public function update($id)
    {
        Equipamento::find($id)->update($_POST);

        $this->redirect('/equipamentos');
    }

    public function delete($id)
    {
        Equipamento::destroy($id);

        $this->redirect('/equipamentos');
    }
}
