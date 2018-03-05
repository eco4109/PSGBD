<?php

	class ModelosP extends CI_Model{
		
		public function __construct(){
			$this->load->database();
			ini_set("memory_limit","512M");
		}

		public function ObtenIdLastClient(){ //Funcion para obtener el id del ultimo cliente insertado, para poder insertar otro con ese id +1
			$query = "select MAX(id_cliente) from cliente";
			$resultado = $this->db->query($query);
			return $resultado->row_array();
		}

		public function InsertaCliente($id, $nombre){  //Funcion para insertar en la base a un cliente
			$query = "INSERT INTO cliente (id_cliente, nombre_comprador) VALUES ('".$id."', '".$nombre."')";
			$resultado=$this->db->query($query);
		    return $resultado;
		}

		public function ChecaIdArt($id){ //Funcion para verificar si el id de un articulo ya está
			$query = "SELECT (id_articulo) FROM articulo WHERE id_articulo = ".$id;
			$resultado = $this->db->query($query);
			return $resultado->row_array();
		}

		public function InsertaArticulo($id, $descrip, $precioV){ //Funcion para Agregar un Articulo a la base
			$query = "INSERT INTO articulo (id_articulo, des_articulo, precio_venta) VALUES ('".$id."','".$descrip."', '".$precioV."')";
			$resultado = $this->db->query($query);
			return $resultado;

		}

		public function ObtenIdLastProveedor(){ //Funcion para obtener el id del ultimo proveedor insertado
			$query = "SELECT MAX(id_proveedor) FROM proveedor";
			$resultado = $this->db->query($query);
			return $resultado->row_array();
		}

		public function InsertaProveedor($id, $nombre){ //Funcion para insertar en la base un proveedor
			$query = "INSERT INTO proveedor (id_proveedor, nombre_proveedor) VALUES ('".$id."', '".$nombre."')";
			$resultado=$this->db->query($query);
		    return $resultado;
		}
	}
?>