<?php

namespace App\Controllers;

class UsuarioController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function cadastrar()
    {
        $request = service('request');
        $data['msg'] = "";

        if ($request->getMethod() === 'post') {
            $usumodel = new \App\Models\UsuarioModel();
            $usumodel->set('login_usu', $request->getPost('login_usu'));


            $options = ['cost' => 8];
            $hast = password_hash($request->getPost('senha_usu'), PASSWORD_BCRYPT, $options);

            $usumodel->set('senha_usu', $hast);
            if ($usumodel->insert()) {
                $data['msg'] = "Dados inseridos com sucesso.";
            } else {
                $data['msg'] = "Dados não inseridos";
            }
        }

        return view('form_cadusu', $data);
    }

    public function buscaUsuario($login_usu, $senha_usu)
    {
        $usumodel = new \App\Models\UsuarioModel();
        return $usumodel->asArray()->where(['login_usu' => $login_usu, 'senha_usu' => $senha_usu])->first();
    }
    public function logar_01()
    {

        $request = service('request');

        $login_usu = $request->getVar('login_usu');
        $senha_usu = $request->getVar('senha_usu');
        $data['usuario'] = $this->buscaUsuario($login_usu, $senha_usu);
        if (empty($data['usuario'])) {
            return redirect()->to(base_url('Home'));
        } else {

            $sessionDados = [
                'login_usu' => $data['usuario']['login_usu'],
                'logado' => true
            ];

            session()->set($sessionDados);

            return redirect()->to(base_url('ParticipanteController/listainfo'));
        }
    }

    public function logarCrpto()
    {
        $request = service('request');
        $login_usu = $request->getVar('login_usu');
        $senha_usu = $request->getVar('senha_usu');

        $usumodel = new \App\Models\UsuarioModel();
        $registros = $usumodel->where('login_usu', $login_usu)->find();

        foreach ($registros as $user_level) {
            $user_user = $user_level->login_usu;
            $user_senha_db = $user_level->senha_usu;
            $user_id = $user_level->cod_usu;
        }

        if ($registros) {
            if (password_verify($senha_usu, $user_senha_db)) {
                
                $data['session']= \Config\Services::session();
               
                $sessionDados = [
                    'login_usu' => $user_user,
                    'cod_usu' => $user_id,
                    'logado' => TRUE
                ];
                $data['session']->set($sessionDados);
                return redirect()->to(base_url('ParticipanteController/listainfo'));
            } else {
                return redirect()->to(base_url('Home'));
            }
        }
    }

    public function telalogar()
    {
        return view('logar_usu');
    }
    public function logout(){
        $data['session'] = \Config\Services::session();
        $data['session']->destroy();
        return redirect()->to(base_url('Home'));
    }

    public function recuperasenha(){
        return view('form_perdeusenha');
    }

    public function confemail(){

        $request = service('request');
        $login_usu = $request->getVar('login_usu');
       

        $usumodel = new \App\Models\UsuarioModel();
        $registros = $usumodel->where('login_usu', $login_usu)->find();

        foreach ($registros as $user_level) {
            $user_user = $user_level->login_usu;
            $user_id = $user_level->cod_usu;
        }

        if ($registros) {
            
            $this->recuperasenha();
            
            } else {
                return redirect()->to(base_url('Home'));
            }
    }

}

