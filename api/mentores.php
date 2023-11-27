<?php
try {
    require("model/Mentor.php");
    $mentores = new Mentor();
    $all_data = $mentores->get_all();
    $cantidad = count($all_data);

} catch (Exception $e) {
    $response = [
        "code" => "500",
        "message" => "Error al obtener los datos"
    ];

    header("Content-Type: application/json");
    echo json_encode($response);
    exit();
}

$data_response = [];
foreach ($all_data as $value) {
    $temp = [
        'id' => $value['id'],
        'nombres' => $value['nombres'],
        'apellidos' => $value['apellidos'],
        'nombre_completo' => $value['nombres']." ".$value['apellidos'],
        'precio' => $value['precio'],
        'estrellas' => $value['estrellas'],
        'cargo' => $value['cargo'],
        'empresa' => $value['empresa'],
        'linkedin' => $value['linkedin'],
        'experiencia' => $value['experiencia'],
        'area' => $value['area'],
        'tema' => $value['tema'],
        'img_perfil' => $value['img_perfil'],
        'img_perfil_url' => $_SERVER['HTTP_HOST']."/admin/".$value['img_perfil'],
        'img_empresa' => $value['img_perfil'],
        'img_empresa_url' => $_SERVER['HTTP_HOST']."/admin/".$value['img_logo'],
    ];
    array_push($data_response, $temp);
}

$response = array(
    'code' => '200',
    'message' => 'Ok',
    'total_items' => count($all_data),
    'data' => $data_response,
);

header("Content-Type: application/json");
echo json_encode($response);

?> 