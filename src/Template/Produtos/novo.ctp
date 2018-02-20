<?php
echo $this->Form->create($produto,['action'=>'Salva']);
echo $this->Form->input('nome');
echo $this->Form->input('preco');
echo $this->Fomr->input('descricao');
echo $this->Form->end();


?>