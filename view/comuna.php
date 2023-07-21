<?php

// Inclua o arquivo de conexão com o banco de dados
require_once("Controllers/ComunaController.php");

// Verifique se a requisição foi feita via método POST
// Obtenha o ID da categoria enviado na requisição
$controller = new ComunaController();
$result = $controller->getAllByIdMunicipio($codMunicipio);

// Retorne as subcategorias em formato JSON
echo json_encode($result);