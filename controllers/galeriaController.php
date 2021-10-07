<?php
class galeriaController extends controller{
	public function index() {
		$albuns = new Albuns();

		$dados = array(
			'albuns' => $albuns->getList()
		);

		$this->loadTemplate('galeria', $dados);
    }

    public function abrir($slug) {
    	$albuns = new Albuns();

    	$dados = array(
			'info' => $albuns->getAlbum($slug)
		);
		$this->loadTemplate('album', $dados);
    }
}