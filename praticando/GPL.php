<?php 
/*Exercício 1: Gerenciamento de Produtos em uma Loja Virtual
Cenário: Você está desenvolvendo um sistema para gerenciar produtos em uma loja virtual. Cada produto deve ter um ID, nome, descrição, preço e quantidade em estoque.

Tarefas:

1.Crie uma classe Produto com as propriedades mencionadas (ID, nome, descrição, preço e quantidade).

2.Implemente os métodos para adicionar, editar e excluir produtos.

3.Crie uma função para exibir a lista de produtos.

4.Teste sua classe criando objetos de produto e manipulando-os.*/

class Produto{
	//inicio definição de classes
	private $id;
	private $nome;
	private $descricao;
	private $preco;
	private $quantia;

	public function __construct($id, $nome, $descricao, $preco, $quantidade) {

		$this->id = $id;
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->preco = $preco;
		$this->quantidade = $quantidade;

	}

	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getdescricao() {
		return $this->descricao;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}

	public function getPreco() {
		return $this->preco;
	}

	public function setPreco($preco) {
		$this->preco = $preco;
	}

	public function getQuantidade() {
		return $this->quantidade;
	}

	public function setQuantidade($quantidade) {
		$this->quantidade = $quantidade;
	}
	//termino definição de classes

	private static $produtos = array();

	//metodo para adicionar produto
	public static function adicionarProduto($id, $nome, $descricao, $preco, $quantidade) {
		$novoProduto = new Produto($id, $nome, $descricao, $preco, $quantidade);
		self::$produtos[] = $novoProduto;
		echo "Produto Adicionado: {$this->nome}";
	}

	//metodo para atualizar o produto
	public static function editarProduto($newNome, $newDescricao, $newPreco, $newQuantidade) {
		$this->nome = $newNome;
		$this->descricao = $newDescricao;
		$this->preco = $newPreco;
		$this->quantidade = $newQuantidade;
		echo "Produto editado: {$this->nome}";
	}

	//metodo para excluir produto
	public static function excluirProduto($id) {
		foreach (self::$produtos as $key => $produto) {
			if ($produto->getId() == $id) {
				unset(self::$produtos[$key]);
				echo "Produto Excluído! {$this->nome}";
			}
		}
	}

	//metodo para exibir todos os produtos
	public static function exibirProdutos() {
		foreach (self::$produtos as $produto) {
			echo "ID: " . $produto->getId()."</br>";
			echo "Nome: " . $produto->getNome()."</br>";
			echo "Descrição: " . $produto->getDescricao()."</br>";
			echo "Preco: " . $produto->getPreco()."</br>";
			echo "Quantidade: " . $produto->getQuantidade()."</br>";
		}
	}
}

$produto = new Produto(1, 'Notebook', 'Notebook I9', 4.000, 5);
$produto->adicionarProduto(1);

$produto->editarProduto('Notebook Gamer', 'Notebook com alta performance para jogos', 3.500, 4);

var_dump(exibirProdutos(1));

?>