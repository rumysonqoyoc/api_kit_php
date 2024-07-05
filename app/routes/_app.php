<?php

app()->get('/', function () {
    response()->json(['message' => 'Congrats!! You\'re on Leaf API']);
});
app()->get('/metas','Ctrl_kit@metas');
app()->get('/programas','Ctrl_kit@programas');
app()->get('/tareas/{cod_meta}','Ctrl_kit@tareas');
app()->get('/kit_meta/{cod_meta}','Ctrl_kit@kit_meta');
app()->get('/kit_meta_tarea/{cod_meta}/{cod_tarea}','Ctrl_kit@kit_meta_tarea');
app()->get('/kit_total','Ctrl_kit@kit_total');
app()->get('/kit_programa/{cod_prg}','Ctrl_kit@kit_programa');
app()->get('/clasificadores','Ctrl_kit@clasificadores');
app()->get('/kit_clasificador/{cod_clf}','Ctrl_kit@kit_clasificador');
app()->get('/kit_meta_clasificador/{cod_meta}/{cod_clf}','Ctrl_kit@kit_meta_clasificador');
app()->get('/meta_clasificadores/{cod_meta}','Ctrl_kit@meta_clasificadores');