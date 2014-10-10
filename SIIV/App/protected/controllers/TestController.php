<?php

class TestController extends Controller
{
	
    public function actionIndex()
    {
        $this->render('index');
    }
    
    public function actionNosotros()
    {
        
        $prueba="hola desde el método lalalalla";
        $a=array("Chile","Argentina","Venezuela","Perú","Bolivia","Colombia","México","Costa Rica");
        $array=array
        (
            "p"=>$prueba,
            'b'=>"hola desde b",
            'a'=>$a
        );
        $this->render('nosotros',$array);
    }
    public function actionContacto($id=null,$id2=null,$id3=null)
    {
        $array=array
        (
            'id'=>$id,
            'id2'=>$id2,
            'id3'=>$id3
            
        );
        $this->render('contacto',$array);
    }
 
    
}