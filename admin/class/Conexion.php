<?php
class Conexion extends PDO {

    private $db_type = 'mysql';
    private $host = 'localhost';
    private $db_name = 'u362563651_holiday_travel';
    private $user = 'u362563651_root';
    private $pass = 'HolidayTravel2021';

    public function __construct() {
        try {
            parent::__construct($this->db_type . ':host=' . 
            $this->host . ';dbname=' . $this->db_name,
            $this->user, $this->pass);
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }
    }

}
