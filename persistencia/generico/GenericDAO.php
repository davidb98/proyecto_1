<?php

namespace persistencia\generico;

abstract class GenericDAO {

    /**
     *
     * @var \PDO
     */
    protected $cnn;
    private $table;

    public function __construct(&$cnn, $table) {
        $this->cnn = $cnn;
        $this->table = $table;
    }

    public function insert(IGenericVO $obj) {
        $listaAtributos = $obj->getAttributes();
        $listaCampos = '';
        $listaValores = '';
        $info = array();
        foreach ($listaAtributos as $campo => $valor) {
            if (is_null($valor)) {
                continue;
            }
            $listaCampos.= ',' . $campo;
            $listaValores.= ',:' . $campo;
            $info[$campo] = $valor;
        }
        $sql = 'INSERT INTO ' . $this->table . ' (' . trim($listaCampos, ',') . ') VALUES(' . trim($listaValores, ',') . ')';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute($info);
        return $this->cnn->lastInsertId();
    }

    public function alter(IGenericVO $obj, $condicion) {
        $listaAtributos = $obj->getAttributes();
        return $this->editarArray($listaAtributos, $condicion);
    }

    public function alterArray($array, $condicion) {
        $listaAtributos = $array;
        $listaCampos = '';
        $info = array();
        foreach ($listaAtributos as $campo => $valor) {
            if (is_null($valor)) {
                $listaCampos.= ', ' . $campo . " = NULL ";
                continue;
            }
            $listaCampos.= ', ' . $campo . "= :" . $campo;
            $info[$campo] = $valor;
        }
        $sql = ' UPDATE ' . $this->table . ' SET ' . trim($listaCampos, ',') . ' WHERE ' . $condicion;
        $sentencia = $this->cnn->prepare($sql);
        return $sentencia->execute($info);
    }

    public function delete($id) {
        $sql = ' DELETE FROM ' . $this->table . ' WHERE id_' . $this->table.' = :id ';
        $sentencia = $this->cnn->prepare($sql);
        $info = array('id' => $id);
        return $sentencia->execute($info);
    }

}
