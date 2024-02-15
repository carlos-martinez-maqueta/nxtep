<?php

// Verificar que la petición sea de tipo GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    try {
        require("model/Tema.php");
        $tema = new Tema();
        $all_data = $tema->get_all();
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
            'id' => $value['id_tema'],
            'title_tema' => $value['title_tema'],
            'descripcion_tema' => $value['descripcion_tema']
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


} else {
    $response = array(
        'code' => '405',
        'message' => 'method not allowed'
    );
    header("Content-Type: application/json");
    echo json_encode($response);
    exit();
}
