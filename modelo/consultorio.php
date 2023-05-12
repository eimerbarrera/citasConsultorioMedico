<?php
class Consultorio
{
    private $consultorioNombre;
    private $Conexion;

    public function setConsultorioNombre($consultorioNombre)
    {
        $this->consultorioNombre = $consultorioNombre;
    }

    public function getConsultorioNombre()
    {
        return ($this->consultorioNombre);
    }

    public function crearConsultorio($consultorioNombre)
    {
        $this->consultorioNombre = $consultorioNombre;
    }

    public function agregarConsultorio()
    {
        $this->Conexion = Conectarse();
        $sql = "insert into consultorios(conNombre)
			values ('$this->consultorioNombre')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function consultarConsultorio($consultorioNombre)
    {
        $this->Conexion = Conectarse();
        $sql = "select * from consultorios where conNombre='$consultorioNombre'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function consultarIdConsultorio($idConsultorio)
    {
        $this->Conexion = Conectarse();
        $sql = "select * from consultorios where idConsultorio='$idConsultorio'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function actualizarConsultorio()
    {
        $this->Conexion = Conectarse();
        $sql = "update consultorios set conNombre='$this->consultorioNombre' where idConsultorio = '$_REQUEST[idConsultorio]'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function eliminarConsultorio($consultorioNombre)
    {
        $this->Conexion = Conectarse();
        $sql = "delete from consultorios where conNombre ='$consultorioNombre'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }
}
