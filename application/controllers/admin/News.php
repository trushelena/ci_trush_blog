<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class News extends Admin_Controller
{
 
  function __construct()
  {
    parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                $this->load->library('ion_auth');
  }
 
  public function index()
  {
      $data['news'] = $this->news_model->get_news();
               $data['title'] = 'Архив новостей';
        $this->render('admin/news/list_news');
  }
}