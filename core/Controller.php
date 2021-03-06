<?php
namespace App\Core;

class Controller  {

    protected Request $Request;
    public function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function render(string $path,array $data=[]){
        $data["Constantes"]=Constantes::class;
        $data["request"]=$this->request;
        $data["Session"]=Session::class;
        ob_start();
        extract($data);
        require_once(Constantes::ROOT()."templates/".$path);
        $content_for_views=ob_get_clean();
        require_once(Constantes::ROOT()."templates/layout/base.html.php");

    }
    public function redirecToRoute($uri){
        header("location:".Constantes::WEB_ROOT.$uri);
    }

}