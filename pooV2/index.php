<?php
require("ChequeComum.php");

$cheque = new ChequeComum(12000.10, "Comum");

echo $cheque->verValor();
echo "<br>";
echo $cheque->calcularJuros();





// require("Nota.php");
// $nota = new Nota();
// $nota->setNota("André Cardoso", "Português", 10, 4);
// echo $nota->getNota();
// echo '<br>';
// $notasDois = clone $nota;
// $notasDois->setProva(6);
// $notasDois->setTrabalho(4);
// $notasDois->setDisciplina("Galego");
// echo $notasDois->getNota();

// require('ClientePessoaFisica.php');
// require('ClientePessoaJuridica.php');
// $cliente = new Cliente();
// $cliente->setEndereco('Av. da Republica');
// $cliente->setBairro('Novo Bairro');
// echo $cliente->verEndereco();
// $clientePf = new ClientePessoaFisica();
// $clientePf->setCpf(2342423423);
// $clientePf->SetNome("José Carlos");
// $clientePf->SetBairro("Contumil");
// $clientePf->setEndereco("Av. da Republica Argentina");
// echo $clientePf->verEndereco();
// $clientePj = new ClientePessoaJuridica();
// $clientePj->setCnpj("23423423");
// $clientePj->setEndereco("Av. da Republica Portuguesa");
// $clientePj->SetBairro("Paranhos");
// $clientePj->setNomeFantasia("Nome Fantasia");
// echo $clientePj->verEndereco();


