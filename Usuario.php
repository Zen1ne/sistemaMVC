<?php
require_once "Autoload.php";
class Usuario extends Conexion{
    private $pdo;
        private $sName;
        private $iTelefono;
        private $sEmail;
        
    public function __construct()
    {
        $this->pdo = new Conexion();
        $this->pdo = $this->pdo->conectar(); 

    }
    public function inserUsuario(string $name, int $telefono, string $email)
    {
        $this->sName=$name;
        $this->iTelefono=$telefono;
        $this->sEmail=$email;

        $sql="INSERT INTO usuario(nombre,telefono,email) VALUES (?,?,?)";
        $stmt=$this->pdo->prepare($sql);
        $arrData=[$this->sName, $this->iTelefono,$this->sEmail];
        $stmt->execute($arrData);
        $idInsert=$this->pdo->lastInsertId();
        return $idInsert;

    }
    public function obtenerDatos()
    {
        $sql="SELECT * FROM usuario";
        $query=$this->pdo->query($sql);
        $respuesta=$query->fetchAll(PDO::FETCH_ASSOC);
        return $respuesta;


    }
    



}

?>