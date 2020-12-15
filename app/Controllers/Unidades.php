<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UnidadesModel;
use Exception;

class Unidades extends BaseController{

    protected $unidades;

     public function __construct (){
         $this->unidades=new UnidadesModel();

    }


    public function index($activo = 1 ){
        $unidades = $this->unidades->where ('activo', $activo)->findAll(); //trae todos los productos q sean activos
        $data = ['titulo' =>'Unidades','datos' =>$unidades];
        echo view('header');
        echo view('unidades/unidades', $data);
        echo view('footer');


    }

    public function nuevo(){
        $data = ['titulo' =>'Agregar Unidad'];

        echo view('header');
        echo view('unidades/nuevo', $data);
        echo view('footer');
    }

    public function insertar(){

        try {
            $this->unidades->save(['nombre' => $this->request->getPost('nombre'), 'nombre_corto' =>
        $this->request->getPost('nombre_corto')]);
        return redirect()->to(base_url().'/unidades');

        }catch (Exception $e){
            echo 'capture', $e->getMessage();
        }
        

    }


}


?>