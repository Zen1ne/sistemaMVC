<?php
class Conexion {
    private string $host = 'localhost';
    private string $dbname = 'db_sistema';
    private string $user = 'brandon';
    private $pdo;
    private string $password = '123';
    private array $opciones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    
    public function __construct()
    {
        $conexionString = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";

        try {
            $this->pdo = new PDO($conexionString, $this->user, $this->password, $this->opciones);
            //echo "Listo";
        } catch (PDOException $e) {
            throw new PDOException("Error de conexión: " . $e->getMessage());
        }
    }   
    public function conectar()
    {
        return $this->pdo;
    }
}

?>