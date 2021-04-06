<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    //Ação padrão... sempre que entrar, passará aqui.
	public function index()
	{
		echo "Você esta na Index.";
	}
 public function segunda()
{
 echo "Você está na segunda pagina";

}

}