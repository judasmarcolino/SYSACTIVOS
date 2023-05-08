<?php
class Equipamento
{
    // Propriedades correspondentes aos campos da tabela Equipamentos
    public $id;
    public $tipo_id;
    public $nome;
    public $marca;
    public $modelo;
    public $numero_serie;
    public $data_aquisicao;
    public $projeto_id;
    public $departamento_responsavel;
    public $localizacao_atual;
    public $status;
    public $historico_manutencao;

    // Construtor que recebe os valores dos campos da tabela Equipamentos
    public function __construct($id, $tipo_id, $nome, $marca, $modelo, $numero_serie, $data_aquisicao, $projeto_id, $departamento_responsavel, $localizacao_atual, $status, $historico_manutencao)
    {
        $this->id = $id;
        $this->tipo_id = $tipo_id;
        $this->nome = $nome;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numero_serie = $numero_serie;
        $this->data_aquisicao = $data_aquisicao;
        $this->projeto_id = $projeto_id;
        $this->departamento_responsavel = $departamento_responsavel;
        $this->localizacao_atual = $localizacao_atual;
        $this->status = $status;
        $this->historico_manutencao = $historico_manutencao;
    }

    // Métodos para realizar operações no banco de dados (CRUD)
    public static function getAll()
    {
        // Código para retornar todos os equipamentos
    }

    public static function getById($id)
    {
        // Código para retornar o equipamento com o ID especificado
    }

    public function save()
    {
        // Código para inserir ou atualizar o equipamento no banco de dados
    }

    public function delete()
    {
        // Código para excluir o equipamento do banco de dados
    }
}
?>
