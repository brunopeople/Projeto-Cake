<?php

namespace App\Controller;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class ProdutosController extends AppController
{
	public function index()
	{
	 $ProdutosTable = TableRegistry::get('Produtos');
	 $produtos = $ProdutosTable->find('all');
	 $this->set('produtos',$produtos);
	}

	public function novo
	{
		$ProdutosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->newEntity();

		$this->set('produto',$produto);
	}

	echo $this->Form->create($produto,['action'=>'salva']);
	
}

?>