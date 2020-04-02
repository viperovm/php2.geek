<?php


class MainPageController extends SiteController
{

    protected $title;		// заголовок страницы
    protected $content;		// содержание страницы
    protected $name;		// содержание страницы
    protected $keyWords;
	//
	// Конструктор.
	//
	
	public function action_index(){
		$this->title = 'Главная страница';
        $this->name = 'Главная страница';
		$this->content = $this->title;
	}

}
