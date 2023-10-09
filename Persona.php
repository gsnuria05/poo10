<?php

class Humano
{
	private $nombre;
	private $apellidos;	
	private $edad;
	private $genero;

	//CREACIÓN DE FUNCIÓN

	public function descripcion($valor)
	{
		echo '<h1>Descripción</h1>';
		echo '<h2>Nombre: </h2>'.$valor->getNombre();
   		echo '<h2>Apellidos: </h2>'.$valor->getApellidos();
   		echo '<h2>Edad: </h2>'.$valor->getEdad().' años';
    	echo '<h2>Género: </h2>'.$valor->getGenero();
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