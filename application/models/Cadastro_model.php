<?php 
class Cadastro_model extends CI_Model {
     private $table = 'training';
    
 public function insere_cadastro($post){
        $data = array(
            'nome' => $post ['nome'],
            'sobrenome' => $post['sobrenome'],
            'telefonemovel' => $post['telefonemovel'],
            'telefonefixo' => $post['telefonefixo'],
            'rg' => $post['rg'],
            'cpf' => $post['cpf'],
            'email' => $post['email'],
            'cep' => $post['cep'],
            'cidade' => $post['cidade'],
            'bairro' => $post['bairro'],
            'login' => $post['login'],
            'senha' => sha1($post['password'])
        );
            
        $this->db->insert('training', $data);
    }
    public function lista_contato(){
        $query = $this->db->get('training');
        
        foreach ($query->result() as $row)
        {
            echo $row->nome.'-'.$row->sobrenome.'-'.$row->telefonemovel.'-'.$row->telefonefixo.'-'.$row->rg.'-'.$row->cpf.'-'.$row->email.'-'.$row->cep.-'-'.$row->cidade.-'-'.$row->bairro.-'-'.$row->login.-'-'.$row->senha.'-'.$row->full_path.'<br>';
        }
    }
  
}