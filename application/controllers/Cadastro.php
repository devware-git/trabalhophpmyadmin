<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
    }
	public function index() {

		$data['css'] = array(
			'bootstrap-grid',
			'bootstrap-grid.mim',
			'bootstrap-reboot',
			'bootstrap-reboot.mim',
			'bootstrap'
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
			'bootstrap.bundle',
			'bootstrap.bundle.mim',
			'bootstrap',
			'bootstrap.mim',
		);
		
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load->view('cadastro_view',$data);
		$this->load->view('footer',$data);
		$data['resposta'] = $this->valida_formulario();
        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === true ){
                $upload = $this->do_upload();
                if($upload === NULL || $upload === true){
                    $data['resposta'] = $this->enviar_email($upload);    
                }
                else{
                    $data['resposta'] = $upload;
                }
                $this->load->model('cadastro_model');
                $this->contato_model->insere_contato($this->post);
                
            }
            
        }
		  
	}
	 private function valida_formulario() {
        if (!empty($this->post)) {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('sobrenome', 'Sobrenome', 'required');
            $this->form_validation->set_rules('telefonemovel', 'Telefone Movel', 'required');
            $this->form_validation->set_rules('telefonefixo', 'Telefone Fixo', 'required');
            $this->form_validation->set_rules('rg', 'RG', 'required');
            $this->form_validation->set_rules('cpf', 'CPF', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
            $this->form_validation->set_rules('cep', 'CEP', 'required');
            $this->form_validation->set_rules('cidade', 'Cidade', 'required');
            $this->form_validation->set_rules('bairro', 'Bairro', 'required');
            $this->form_validation->set_rules('cep', 'CEP', 'required');
            $this->form_validation->set_rules('login', 'Login', 'required|callback_valida_login');
            $this->form_validation->set_rules('password', 'Senha', 'required');
            $this->form_validation->set_rules('conf_password', 'Confirmar senha', 'matches[password]|required');
            
            //configurando erro ou sucesso//
            if ($this->form_validation->run() == false) 
            {
                return array(
                    'class' => 'danger',
                    'message' => validation_errors() ,
                    'title' => 'Erro Ao Enviar'
                );
            }
              else
            {
                return true;
            }
        }
        return NULL;
    }
     private function enviar_email($upload) 
    {
        
        $this->load->library('email');
        
        $img = '';
         if($upload === true){
            $filename=$this->upload->data('full_path');
            $this->email->attach($filename);
            $cid = $this->email->attachment_cid($filename);
            $img = '<img src="cid:'. $cid .'" alt="photo1" />';
        }
       
        
       
        /* $config['protocol'] = 'smtp';*/
        /* $this->email->initialize($config);*/
        $this->email->from('silveirapires3567@gmail.com', 'TrainingCursos');
        $this->email->to($this->post['email']);
        $this->email->subject('Confirmação de E-mail');
        $this->email->message('<div style="border-style: solid; border-color: blue; margin: 15px 10px 25px 10px">
                                 <b> Nome: ' . $this->post['nome'] . '</b> <br><br>
                                 <b> E-mail: ' . $this->post['email'] . '<br><br>
                                 <b>Telefone Movel: ' . $this->post['telefonemovel'] . '<br><br>
                                 <b>Telefone Fixo: ' . $this->post['telefonefixo'] . '<br><br>
                                 '.$img.'
                                 </div> ');
       
        if ($this->email->send()) 
        {
            return array(
                'message' => 'Formulario enviado com sucesso! ',
                'class' => 'success',
                'title' => 'Enviado Com Sucesso'
            );
        }
        else
        {
            return array(
                'message' => 'Error ao enviar formulario, por favor tente novamente',
                'class' => 'danger',
                'title' => 'Erro Ao Enviar'
            );
        }
    }
	
}
?>
<!-- jbbvhdbvhdbvhvb -->