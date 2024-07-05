<?php

namespace App\Controllers;
use App\Models\Kits;
use Illuminate\Support\Collection;

class Ctrl_kit extends Controller{
    
    public function metas(){
        $kt=Kits::select('cod_meta','meta')
        ->distinct('cod_meta')
        ->orderBy('cod_meta','asc')
        ->get();
        response()->json($kt); 
    }

    public function clasificadores(){
        $kt=Kits::select('cod_clasificador','clasificador')
        ->distinct('cod_clasificador')
        ->orderBy('cod_clasificador','asc')
        ->get();
        response()->json($kt); 
    }

    public function meta_clasificadores($cod_meta){
        $kt=Kits::select('cod_clasificador','clasificador')
        ->distinct('cod_clasificador')
        ->where('cod_meta','=',$cod_meta)
        ->orderBy('cod_clasificador','asc')
        ->get();
        response()->json($kt); 
    }

    public function programas(){
        $kt=Kits::select('cod_programa','programa')
        ->distinct('cod_programa')
        ->orderBy('cod_programa','asc')
        ->get();
        response()->json($kt); 
    }

    public function tareas($cod_meta){
        $kt=Kits::select('cod_sub_finalidad','sub_finalidad')
        ->distinct('cod_sub_finalidad')
        ->where('cod_meta','=',$cod_meta)
        ->orderBy('cod_sub_finalidad','asc')
        ->get();
        response()->json($kt); 
    }

    public function kit_meta($cod_meta){
        $kt=Kits::select('cod_item_fam','nom_item_fam','activo','tipo_bien','tipo_calculo','nivel','clasificador','sub_finalidad')
        ->where('cod_meta','=',$cod_meta)
        ->orderBy('cod_item_fam')
        ->get();
        response()->json($kt); 
    }

    public function kit_meta_tarea($cod_meta, $cod_tarea){
        $kt=Kits::select('cod_item_fam','nom_item_fam','activo','tipo_bien','tipo_calculo','nivel','clasificador')
        ->where('cod_meta','=',$cod_meta)
        ->where('cod_sub_finalidad','=',$cod_tarea)
        ->orderBy('cod_item_fam')
        ->get();
        response()->json($kt); 
    }

    public function kit_total(){
        $kt=Kits::select('cod_item_fam','nom_item_fam','activo','tipo_bien','tipo_calculo','nivel','clasificador','meta','sub_finalidad')
        ->orderBy('cod_item_fam')
        ->get();
        response()->json($kt); 
    }

    public function kit_programa($cod_prg){
        $kt=Kits::select('cod_item_fam','nom_item_fam','activo','tipo_bien','tipo_calculo','nivel','clasificador','meta','sub_finalidad')
        ->where('cod_programa','=',$cod_prg)
        ->orderBy('cod_item_fam')
        ->get();
        response()->json($kt); 
    }

    public function kit_clasificador($cod_clf){
        $kt=Kits::select('cod_item_fam','nom_item_fam','activo','tipo_bien','tipo_calculo','nivel','programa','meta','sub_finalidad')
        ->where('cod_clasificador','=',$cod_clf)
        ->orderBy('cod_item_fam')
        ->get();
        response()->json($kt); 
    }

    public function kit_meta_clasificador($cod_meta, $cod_clf){
        $kt=Kits::select('cod_item_fam','nom_item_fam','activo','tipo_bien','tipo_calculo','nivel','programa','meta','sub_finalidad')
        ->where('cod_meta','=',$cod_meta)
        ->where('cod_clasificador','=',$cod_clf)
        ->orderBy('cod_item_fam')
        ->get();
        response()->json($kt); 
    }


}
