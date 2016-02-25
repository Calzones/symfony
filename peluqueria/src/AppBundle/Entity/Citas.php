<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Citas
 *
 * @ORM\Table(name="citas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CitasRepository")
 */
class Citas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=18)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="string", length=8)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="hora", type="string", length=5)
     */
    private $hora;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Citas
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     *
     * @return Citas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param string $hora
     *
     * @return Citas
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
    }
}

