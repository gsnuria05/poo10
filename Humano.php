<?php

class Humano
{
	private $nombre;
	private $apellidos;	
	private $edad;
	private $genero;

	//CREACIÓN DE FUNCIÓN

	public function descripcion()
	{
		return
		'<h1>Descripción</h1>';
		'<h2>Nombre: </h2>';
   		'<h2>Apellidos: </h2>';
   		'<h2>Edad: </h2>';
    	'<h2>Género: </h2>';
	}

	//GETTERS AND SETTERS

	/**
	 * Get the value of nombre
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Set the value of nombre
	 */
	public function setNombre($nombre): self
	{
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * Get the value of apellidos
	 */
	public function getApellidos()
	{
		return $this->apellidos;
	}

	/**
	 * Set the value of apellidos
	 */
	public function setApellidos($apellidos): self
	{
		$this->apellidos = $apellidos;

		return $this;
	}

	/**
	 * Get the value of edad
	 */
	public function getEdad()
	{
		return $this->edad;
	}

	/**
	 * Set the value of edad
	 */
	public function setEdad($edad): self
	{
		$this->edad = $edad;

		return $this;
	}

	/**
	 * Get the value of genero
	 */
	public function getGenero()
	{
		return $this->genero;
	}

	/**
	 * Set the value of genero
	 */
	public function setGenero($genero): self
	{
		$this->genero = $genero;

		return $this;
	}
	
}

//CLASE MUJER

class Mujer extends Humano
{

}

//CLASE HOMBRE

class Hombre extends Humano
{
	
}

?>