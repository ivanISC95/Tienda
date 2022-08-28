<?php
include 'conexion.php';
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Content-Type: text/html; charset=utf-8");
$data = json_decode(file_get_contents('php://input'), true);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// if(isset($_GET["categoria"])){

//   $sql = "SELECT * FROM categoria";
//   if ($result = $mysqli -> query($sql)) {
//     while ($row = $result -> fetch_assoc()) {
//       $myArray[] = $row;
//     }
//   echo json_encode($myArray);
//   }
// }

// if(isset($_GET["productos"])){
//   $sql = "SELECT p.nombre, p.descripcion , p.precio FROM producto p"
//   INNER JOIN categoria c ON p.id_categoria = c.id_categoria;";
//   if ($result = $mysqli -> query($sql)) {
//     while ($row = $result -> fetch_assoc()) {
//       $myArray[] = $row;
//     }
//   echo json_encode($myArray);
//   }
// }


// METODO GET Y POST PARA VER Y AGREGAR UNA CATEGORIA POR MEDIO DE JSON
if(isset($_GET["categoria"])){
  if($data) {
    $nombre = $data['nombre'];
    $sql = "INSERT INTO categoria(nombre) VALUES ('{$nombre}')";
    if($result = $mysqli -> query($sql)){
      echo json_encode(array('Estado' => true, 'Error' => 'Categoria Agregada'));
    } 
  }else{
    $sql = "SELECT * FROM categoria";
    if ($result = $mysqli -> query($sql)) {
      while ($row = $result -> fetch_assoc()) {
        $myArray[] = $row;
      }
    echo json_encode($myArray);
    }
  }
}
// METODO GET Y POST PARA VER Y AGREGAR UNA CATEGORIA POR MEDIO DE FORM-ENCONDE
if(isset($_GET["categoria2"])){
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $sql = "INSERT INTO categoria(nombre) VALUES ('{$nombre}')";
    if($result = $mysqli -> query($sql)){
      echo json_encode(array('Estado' => true, 'Error' => 'Categoria Agregada'));
    } 
  }
}

// METODO GET Y POST PARA VER Y AGREGAR UNA CATEGORIA
if(isset($_GET["producto"])){
  if($data) {
    $nombre = $data['nombre'];
    $descripcion = $data['descripcion'];
    $precio = $data['precio'];
    $id_categoria = $data['id_categoria'];
    $sql = "INSERT INTO producto(nombre ,descripcion,precio,id_categoria ) VALUES ('{$nombre}', '{$descripcion}','{$precio}', '{$id_categoria}')";
    if($result = $mysqli -> query($sql)){
      echo json_encode(array('Estado' => true, 'Error' => 'Categoria Agregada'));
    } 
  }else{
    $sql = "SELECT * FROM producto";
    if ($result = $mysqli -> query($sql)) {
      while ($row = $result -> fetch_assoc()) {
        $myArray[] = $row;
      }
    echo json_encode($myArray);
    }
  }
}



$mysqli -> close();
?>