<?php

	class ModelosP extends CI_Model{

		public function __construct(){
			$this->load->database();
			
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
			$query = "INSERT INTO articulo (id_articulo, des_articulo, precio_venta, existencias) VALUES ('".$id."','".$descrip."', '".$precioV."', '0')";
			$resultado = $this->db->query($query);
			return $resultado;

		}


		public function AgregarVenta($idVenta, $fecha, $folioF, $idClient, $idVendedor){
			$query = "INSERT INTO venta (id_venta, fech_venta, folio_factura, id_cliente, id_vendedor) VALUES ('".$idVenta."', '".$fecha."', '".$folioF."', '".$idClient."', '".$idVendedor."')";
			$resultado=$this->db->query($query);
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

		 public function ObtenIdCliente($cliente){
		 	$query = "SELECT id_cliente FROM cliente WHERE nombre_comprador = '".$cliente."'";
		 	$resultado = $this->db->query($query);
		 	return $resultado->row_array();
		}

		public function ObtenIdVenta(){ //Funcion para obtener el ultimo id de las ventas
			$query = "SELECT MAX(id_venta) FROM venta";
			$resultado = $this->db->query($query);
			return $resultado->row_array();
		}

		public function ChecaClientes(){ //Funcion para checar cuantos clientes hay en la base de datos
			$query = "SELECT nombre_comprador FROM cliente";
			$resultado = $this->db->query($query);
			return $resultado->result_array();
		}
		public function buscaProveedores($proveedor){
			$query = "select * from proveedor where nombre_proveedor like'".$proveedor."'";
			$resultado=$this->db->query($query);
			return $resultado->result_array();
		}
		public function ObtenPrecioArt($desArts){//Funcion para obtener los precios de venta de los articulos
			$precioArts = array();
			for ($i=0; $i < count($desArts); $i++) {
				$query = "SELECT precio_venta FROM articulo WHERE des_articulo = '".$desArts[$i]."'";
				$resultado = $this->db->query($query);
				$precioArts[$i] = $resultado->row_array();
			}
			return $precioArts;
		}

		public function ObtenIdArts($desArts){ //Funcion para obtener los ID de los articulos
			$idArts = array();
			for ($i=0; $i < count($desArts); $i++) {
				$query = "SELECT id_articulo FROM articulo WHERE des_articulo = '".$desArts[$i]."'";
				$resultado = $this->db->query($query);
				$idArts[$i] = $resultado->row_array();
			}
			return $idArts;
		}

		public function AgregaVenta_Articulo($idVenta, $idArts, $cantArts, $precioArts){
			for ($i=0; $i < count($idArts); $i++) {
				$query = "INSERT INTO venta_articulo (id_venta, id_articulo, cant_ventas, precio_ventas) VALUES (".$idVenta.", ".$idArts[$i]['id_articulo'].", ".$cantArts[$i].", ".$precioArts[$i]['precio_venta'].")";
				$resultado = $this->db->query($query);
			}
			return $resultado;
		}

		public function ObtenClientes(){ //Funcion para obtener los clientes de la base de datos
			$query = "SELECT nombre_comprador FROM cliente";
			$resultado = $this->db->query($query);
			return $resultado->result_array();
		}

		public function ObtenArtics(){ //Funcion para obtener los articulos de la base de datos
			$query = "SELECT des_articulo FROM articulo";
			$resultado = $this->db->query($query);
			return $resultado->result_array();
		}

		public function proveedoresAll(){
			$query = "select nombre_proveedor from proveedor";
			$resultado = $this->db->query($query);
			return $resultado->result_array();
		}

		public function VentasPorArticulo(){//Funcipon para obtener las Ventas por Articulo
			$query = "SELECT articulo.id_articulo, des_articulo, sum(cant_ventas), 	SUM(precio_venta*cant_ventas) FROM venta, venta_articulo, articulo WHERE 	venta.id_venta = venta_articulo.id_venta  AND venta_articulo.id_articulo = articulo.id_articulo GROUP BY 1";
			$resultado = $this->db->query($query);
			return $resultado->result_array();
		}


	}
?>
