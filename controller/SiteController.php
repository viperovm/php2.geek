<?php
require_once '../models/UserModel.php';


abstract class SiteController extends Controller
{
	protected $title;		// заголовок страницы
	protected $content;		// содержание страницы
	protected $name;		// содержание страницы
    protected $keyWords;
    protected $s_button;


     protected function before(){

		$this->keyWords="...";

	}

	//
	// Генерация базового шаблонаы
	//	
	public function render()
	{

        $get_user = new UserModel();
        if (isset($_SESSION['user_id'])) {
            $user_info = $get_user->get($_SESSION['user_id']);
        } else {
            $user_info['name'] = false;
        }

		$vars = array('title' => $this->title, 'name' => $this->name, 'content' => $this->content, 'user' => $user_info['name'],'kw' => $this->keyWords, 's_button' => $this->s_button);
		$page = $this->Template('views/mainPage.php', $vars);
		echo $page;
	}	
}
