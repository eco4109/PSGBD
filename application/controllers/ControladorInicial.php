<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require('C:/xampp/fpdf/fpdf.php');

class PDF extends FPDF{ //Clase que extiende de FPDF

	function Header(){
		$date = date('F d, o');
		$this->SetFont('Times','I',12);
		$this->Cell(35,2,$date,0,1,'C');
	}

	function Footer(){
		//Imagen de footer
		$this->Image('C:\xampp\fpdf\footerUaemex.png',2,25,15,3);
	}
}


class ControladorInicial extends CI_controller{ //Controlador principal que carga el inicio de la aplicación

	protected $F;

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
		//Obtener a los clientes de la base de datos para meterlos en un COMBOX en la vista
		$this->clients = $this->ModelosP->ObtenClientes();

		$this->load->view('VAgregaVenta', $id, $this->clients);

	}


	public function fAgregaVenta(){ //funcion paa agregar una venta
		//Se obtienen todos los valores escritos en el formulario
		$folioF	 = $this->input->post('folioF');
		$idVendedor = $this->input->post('vendedor');
		$cliente = $this->input->post('cliente');
		$cliente = strtoupper($cliente);
		$F =  $this->input->post('fecha');
		$idVenta = $this->input->post('idVenta');


		//OBTENER EL ID del cliente
		$idClient = $this->ModelosP->ObtenIdCliente($cliente);
		$idClient = $idClient["id_cliente"];

		if($idClient == NULL){
			//No se ingreso un cliente existente

		}else{ //Agregar la Venta a la tabla de venta
			$query = $this->ModelosP->AgregarVenta($idVenta, $F, $folioF, $idClient, $idVendedor);
			if($query == TRUE){
				//Como ya se agrego la venta ahora hay que agregar los articulos que se vendieron xD
				$id['$id'] = $idVenta;
				//Obtener a los articulos de la base de datos para meterlos en un COMBOX en la vista
				$this->artics = $this->ModelosP->ObtenArtics();
				$this->load->view('VAddVentaPro', $idVenta, $this->artics);
				$_SESSION['count'] = $idVenta+1;

			}else{
				echo ":(";
			}
		}
	}


	public function fTerminarVenta(){ //Funcion para terminar la venta
		//Se obtiene el id de la venta
		$idVenta = $this->input->post('idVenta');
			//En un ARREGLO se guardan los id de los productos vendidos
		$desArts = $this->input->post('desArts');
			//En otro ARREGLO se guardan las cantidades de los productos
		$cantArts = $this->input->post('cantArts');

		//Obtenerun vector del precio de venta de cada articulo
		$precioArts= $this->ModelosP->ObtenPrecioArt($desArts);
		//Obtener el id de los articulos que se eligieron
		$idArts= $this->ModelosP->ObtenIdArts($desArts);


		//Agregar la informacion de los articulos comprados a la tabla venta_articulo
		$resultado = $this->ModelosP->AgregaVenta_Articulo($idVenta, $idArts, $cantArts, $precioArts);
		if(isset($resultado)){
			$this->load->view('VAddSaleDone');
		}else{
			$this->load->view('VAddSaleFail');
		}

		}

		public function CarvaVDecideRepo(){ //Funcion para cargar la vista de decidir que reporte
			$this->load->view('VDecideRepo');
		}

		public function fGeneraReporte(){ //Funcion para generar el reporte especificado
			//SE obtiene la opcion del reporte principal que va a ser (VENTAS O CPMPRAS)
			$opcionP = $this->input->post('primary');
			$opcionS = $this->input->post('secondary');
			$idC = $this->input->post('idC');

			if($opcionP == 'Ventas'){//Van a ser reportes de VENTAS
				if($opcionS == '11'){ //Es un reporte de VENTA POR FOLIO}
					$this->GRVpFactura();
				}elseif($opcionS == '12'){//Es un reporte de VENTAS POR CLIENTE
					$this->GRVpCliente();
				}else{ //Es un reporte de VENTAS POR ARTICULO
					$this->GRVpArt();
				}
			}elseif($opcionP == "Compras"){ //Van a ser reportes de COMPRAS

			}else{ //Va a ser reporte de EXISTENCIAS de ARTICULOS
				$this->GREArts();
			}
		}


	public function GRVpFactura(){
		$VentPorFactura = $this->ModelosP->VentasPorFactura();
		$pdf = new PDF('P', 'cm', 'a4');
		$pdf->AddPage();
		$pdf->SetFont('Times','BU',21);
		$pdf->Cell(19,1,'Reporte De Facturas',0,0,'C');
		$pdf->Ln(1);
		$pdf->Ln(1);
		$pdf->SetFont('Times','B',16);
		$pdf->SetDrawColor(0,80,180);
		$pdf->SetFillColor(430,430,10);
		$pdf->SetLineWidth(0.08);
		$pdf->Cell(3, 1, "Id Factura", 1, 0, 'C');
		$pdf->Cell(7, 1, "Nombre del Comprador", 1, 0, 'C');
		$pdf->Cell(5, 1, "Fecha de Venta", 1, 0, 'C');
		$pdf->Cell(4, 1, "Total", 1, 1, 'C');
		$pdf->Ln();
		$pdf->SetFont('Times','',12);

		for ($i=0; $i < count($VentPorFactura); $i++) {
			$pdf->Cell(3, 1, $VentPorFactura[$i]["folio_factura"], 1, 0, 'C');
			$pdf->Cell(7, 1, $VentPorFactura[$i]["nombre_comprador"], 1, 0, 'C');
			$pdf->Cell(5, 1, $VentPorFactura[$i]["fech_venta"], 1, 0, 'C');
			$pdf->Cell(4, 1, $VentPorFactura[$i]["Total"], 1, 1, 'C');
		}
		$pdf->Output();		
	}

	public function GRVpCliente(){ //Funcion para generar reporte de VENTAS por CLIENTE
		$VentPorCliente = $this->ModelosP->VentasPorCliente();

		$pdf = new PDF('P', 'cm', 'a4');
		$pdf->AddPage();
		$pdf->SetFont('Times','BU',21);
		$pdf->Cell(19,1,'Reporte De Clientes',0,0,'C');
		$pdf->Ln(1);
		$pdf->Ln(1);
		$pdf->SetFont('Times','B',16);
		$pdf->SetDrawColor(0,80,180);
		$pdf->SetFillColor(430,430,10);
		$pdf->SetLineWidth(0.08);
		$pdf->Cell(4, 1, "Id Cliente",1, 0, 'C');
		$pdf->Cell(7, 1, "Nombre del Cliente", 1, 0, 'C');
		$pdf->Cell(4, 1, "Suma total", 1, 1, 'C');
		$pdf->Ln();
		$pdf->SetFont('Times','',12);

		for ($i=0; $i < count($VentPorCliente); $i++) {
			$pdf->Cell(4, 1, $VentPorCliente[$i]["id_cliente"], 1, 0, 'C');
			$pdf->Cell(7, 1, $VentPorCliente[$i]["nombre_comprador"], 1, 0, 'C');
			$pdf->Cell(4, 1, $VentPorCliente[$i]["SUM(precio_venta*cant_ventas)"], 1, 1, 'C');
		}
		$pdf->Output();
	}


	public function GRVpArt(){ //Funcion para generar reporte de VENTAS por ARTICULO
		$VentPorArt = $this->ModelosP->VentasPorArticulo();
		//var_dump($VentPorArt);
		$pdf = new PDF('P', 'cm', 'a4');
		$pdf->AddPage();
		$pdf->SetFont('Times','BU',21);
		$pdf->Cell(19,1,'Reporte De Articulos',0,0,'C');
		$pdf->Ln(1);
		$pdf->Ln(1);
		$pdf->SetFont('Times','B',16);
		$pdf->SetDrawColor(0,80,180);
		$pdf->SetFillColor(430,430,10);
		$pdf->SetLineWidth(0.08);
		$pdf->Cell(3, 1, "Id", 1, 0, 'C');
		$pdf->Cell(7, 1, "Nombre", 1, 0, 'C');
		$pdf->Cell(5, 1, "Unidades Vendidas", 1, 0, 'C');
		$pdf->Cell(4, 1, "Suma total", 1, 1, 'C');
		$pdf->Ln();
		$pdf->SetFont('Times','',12);

		for ($i=0; $i < count($VentPorArt); $i++) {
			$pdf->Cell(3, 1, $VentPorArt[$i]["id_articulo"], 1, 0, 'C');
			$pdf->Cell(7, 1, $VentPorArt[$i]["des_articulo"], 1, 0, 'C');
			$pdf->Cell(5, 1, $VentPorArt[$i]["sum(cant_ventas)"], 1, 0, 'C');
			$pdf->Cell(4, 1, $VentPorArt[$i]["SUM(precio_venta*cant_ventas)"], 1, 1, 'C');
		}
		$pdf->Output();		

	}

	public function GREArts(){ //Funcion para generar reporte de EXISTENCIAS de ARTICULOS
		//Obtener los articulos y sus existencias.
		$ExisArts = $this->ModelosP->ObtenExisArts();

		$pdf = new PDF('P', 'cm', 'a4');
		$pdf->AddPage();
		$pdf->SetFont('Times','BU',21);
		$pdf->Cell(19,1,'Existencias de Articulos',0,0,'C');
		$pdf->Ln(1);
		$pdf->Ln(1);
		$pdf->SetFont('Times','B',16);
		$pdf->SetDrawColor(0,80,180);
		$pdf->SetFillColor(430,430,10);
		$pdf->SetLineWidth(0.08);
		$pdf->Cell(3, 1, "Id", 1, 0, 'C');
		$pdf->Cell(7, 1, "Nombre", 1, 0, 'C');
		$pdf->Cell(5, 1, "Existencias", 1, 0, 'C');
		$pdf->Ln();
		$pdf->SetFont('Times','',12);

		for ($i=0; $i < count($ExisArts); $i++) {
			$pdf->Cell(3, 1, $ExisArts[$i]["id_articulo"], 1, 0, 'C');
			$pdf->Cell(7, 1, $ExisArts[$i]["des_articulo"], 1, 0, 'C');
			$pdf->Cell(5, 1, $ExisArts[$i]["existencias"], 1, 1, 'C');
		}
		$pdf->Output();

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
	public function confirmacion(){
		$clientes = $this->ModelosP->obtieneClientes();
		$proveedores = $this->ModelosP->proveedoresAll();
		//esta parte es para tratar el vector de vectores que regresa proveedoresAll, y para eso se hace el for, para guardar lo que tiene proveedores en un vector simple para despues mandarlo a la vista
		for ($i=0; $i < count($proveedores) ; $i++) { 
			$pro = $proveedores[$i];
			$vector [$i] = $pro['nombre_proveedor'];
			$vector2[$i] = $pro['id_proveedor'];


		}
		for ($i=0; $i < count($clientes) ; $i++) { 
			$pro2 = $clientes[$i];
			$idClient[$i] = $pro2['id_cliente'];
			$buyerName[$i] = $pro2['nombre_comprador'];
		}	
		$pro['campo'] = $vector;
		$pro['id'] = $vector2;
		$pro['name'] = $buyerName;
		$pro['idClient']= $idClient;
		if (isset($proveedores)){
			$this->load->view('confirmacionCliente', $pro);
		}
	}

}
