<?php
class Peliculas 
{
    public $id;
    public $titulo;
    public $fecha_lanzamiento;
    public $genero;    
    public $duracion;
    public $director;
    public $reparto;
    public $sinopsis;
    public $imagen;
   

    public function __construct($titulo,  $fecha_lanzamiento,$genero, $duracion = null, $director = null, $reparto = null, $sinopsis = null,  $id = null, $imagen=null) 
    {
       
        $this->titulo = $titulo;
        $this->fecha_lanzamiento = $fecha_lanzamiento;
        $this->genero = $genero;      
        $this->duracion = $duracion;
        $this->director = $director;
        $this->reparto = $reparto;
        $this->sinopsis = $sinopsis;
        $this->imagen = $imagen;    

    }

    public static function fromArray($data) 
    {
        return new self(
            $data['titulo'] ?? null,
            $data['fecha_lanzamiento'] ?? null,
            $data['genero'] ?? null,            
            $data['duracion'] ?? null,
            $data['director'] ?? null,
            $data['reparto'] ?? null,
            $data['sinopsis'] ?? null,         
            $data['id'] ?? null,
            $data['imagen'] ?? null
        );
    }

    public function toArray() 
    {
        return get_object_vars($this);
    }
}
?>