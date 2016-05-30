<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
  protected $data = array();
  function __construct()
  {
    parent::__construct();
    $this->data['page_title'] = 'CI App';
    $this->data['before_head'] = '';
    $this->data['before_body'] ='';
  }
 
  protected function render($the_view = NULL, $template = 'master')
  {
    if($template == 'json' || $this->input->is_ajax_request())
    {
      header('Content-Type: application/json');
      echo json_encode($this->data);
    }
    else
    {
      $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);;
      $this->load->view('templates/'.$template.'_view', $this->data);
    }
  }
}
 
class Admin_Controller extends MY_Controller
{
 
  function __construct()
  {
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    if(!$this->ion_auth->logged_in())
    {
      //redirect them to the login page
      redirect('admin/user/login', 'refresh');
    }
    $current_user = $this->ion_auth->user()->row();
    // get the current user's ID
    $this->user_id = $current_user->id;
    $this->data['current_user'] = $current_user;
    $this->data['current_user_menu'] = '';
    if($this->ion_auth->in_group('admin'))
    {
      $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
    }
 
    $this->data['page_title'] = 'Музыкальная студия - панель управления';
  }
  protected function render($the_view = NULL, $template = 'admin_master')
  {
    parent::render($the_view, $template);
  }
  
}
 
class Public_Controller extends MY_Controller
{
 
  function __construct()
  {
    parent::__construct();
  }
}