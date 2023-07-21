<?php

// Inclua o arquivo de conexão com o banco de dados
require_once("Controllers/MunicipioController.php");

// Verifique se a requisição foi feita via método POST
// Obtenha o ID da categoria enviado na requisição
$controller = new MunicipioController();
$result = $controller->getAllByIdMunicipio($codProvincia);

// Retorne as subcategorias em formato JSON
echo json_encode($result);