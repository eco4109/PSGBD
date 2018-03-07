<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class ControladorInicial extends CI_controller{ //Controlador principal que carga el inicio de la aplicación

	public function __construct(){
		parent:: __construct();
		$this->load->model('ModelosP');
	}

	public function inicio() //Función que carga la Vista inicial
	{
		$this->load->view('VistaInicio1');
	}

	public function pPrincipal(){ //Funcion que carga el menpu principal
		$this->load->view('VistaPrincipal');	
	}

	public function CargaVAgregar(){ //Funcion que carga la vista de Agregar Algo al catalogo
		$this->load->view('VistaAgregarCat');
	}
	public function fGenerarCompra(){
		$this->load->view('VAddPurchase');

	}
	public function confirmacion(){
		$this->load->view('confirmacionCliente');
	}
	public function fdecideVAgregar(){ //Funcion para decidir la vista de agregar que debe de desplegar (Cliente, articulo, proveedor)
		$opcion=$this->input->post('opcion'); //Se obtiene la opcion elegida

		if($opcion == "Cliente"){ 
			//Para agregar un Cliente hay que obtener el id del ultimo cliente, ya que son secuenciales.
			$id_lastClient = $this->ModelosP->ObtenIdLastClient(); //Se obtiene el id del ultimo cliente.
			//El id del ultimo cliente se guarda en: $id_lastClient["MAX(id_cliente)"]
			$id['id'] = $id_lastClient["MAX(id_cliente)"] +1;
			//Cargar la vista para agregar un cliente
			$this->load->view('VAgregarCliente',$id);

		}elseif ($opcion == "Articulo") {
			//Cargar la vista para agregar un Articulo
			$this->load->view('VAgregarArticulo');
			
		}elseif ($opcion == "Proveedor") {
			//Para ingresar un proveedor hay que obtener el id del ultimo, ya que son secuencials
			$id_lastProveedor = $this->ModelosP->ObtenIdLastProveedor();
			//El id del ultim proveedor se guarda para ser aumentado
			$id['id'] = $id_lastProveedor["MAX(id_proveedor)"] +1;
			////Cargar la vista para agregar un Proveedor
			$this->load->view('VAgregarProveedor', $id);
		}else{
			
			$this->load->view('VistaAgregarCat');
		}
	}

	public function AgregarUnCliente(){ //Funcion para agregar un cliente a la base de datos
		//Se hace un post del id y nombre del cliente para ingresarlo a la base de datos
		$id = $this->input->post('ident');
		$nombre = $this->input->post('nombre');
		$nombre = strtoupper($nombre);

		$query = $this->ModelosP->InsertaCliente($id, $nombre);

		if ($query == TRUE) {
			$this->load->view('VAddClientDone');
		}

	}

	public function AgregarUnArticulo(){ //Funcion para agregar un articulo
		$id = $this->input->post('ident'); //Se obtiene el id del articulo
		//Se verifica que ese id no exista ya
		$query = $this->ModelosP->ChecaIdArt($id);
		if($query == NULL){ //No se encontro ese articulo, así que se ingresa
			$descrip = $this->input->post('descripcion');
			$precioV = $this->input->post('precioV');
			$query = $this->ModelosP->InsertaArticulo($id, $descrip, $precioV);
			if($query == TRUE){
				$this->load->view('VAddArtDone');
			}
		}
	}

	public function AgregarUnProveedor(){ //Funcion para agregar un proveedor
		$id = $this->input->post('ident'); //Se obtiene el id del proveedor, el nombre y se hace upper
		$nombre = $this->input->post('nombre');
		$nombre = strtoupper($nombre);

		$query = $this->ModelosP->InsertaProveedor($id, $nombre);

		if($query == TRUE){
			$this->load->view('VAddProveedorDone');
		}

	}


	public function fGeneraVenta(){ //Funcion para cargar la vista de agregar una venta
		//Obtener el ultimo id de venta para agregarle +1
		$id_lastVenta = $this->ModelosP->ObtenIdVenta();
		$id['id'] = $id_lastVenta['MAX(id_venta)'] +1;

		$this->load->view('VAgregaVenta', $id);
	}

	
	public function fAgregaVenta(){ //funcion paa agregar una venta
		//Se obtienen todos los valores escritos en el formulario
		$folioF	 = $this->input->post('folioF');
		$idVendedor = $this->input->post('vendedor');
		$cliente = $this->input->post('cliente');
		$cliente = strtoupper($cliente);
		$fecha = $this->input->post('fecha');
		$idVenta = $this->input->post('idVenta');

		//OBTENER EL ID del cliente
		$idClient = $this->ModelosP->ObtenIdCliente($cliente);
		$idClient = $idClient["id_cliente"];

		if($idClient == NULL){
			//No se ingreso un cliente existente

		}else{ //Agregar la Venta a la tabla de venta
			$query = $this->ModelosP->AgregarVenta($idVenta, $fecha, $folioF, $idClient, $idVendedor);
			if($query == TRUE){
				$this->load->view('VAddVentaDone');
			}
		}


	}
	public function confirmacion2(){
		$opcion = $this->input->post('opcion');
		if ($opcion =='Si'){
			$this->load->view('VAgregarCliente');
		}else{
			$this->load->view('VAddPurchase');
		}

	}
	public function llamaModelo(){
		$opcion=$this->post('serachProvider');
		$resultado = $this->load->model(buscaProveedores($opcion));
		$data['resumen']=$resultado;
		$this->load->view('VAddPurchase',$data);
	}
}
