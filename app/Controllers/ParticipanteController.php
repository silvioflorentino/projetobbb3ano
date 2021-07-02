<?php namespace App\Controllers;

use App\Controllers\BaseController;
use NumberFormatter;

class ParticipanteController extends BaseController
{
	
	public function index()
	{
		return view('form_ptc');
	}

    public function listainfo()
	{
		$data['session'] =  \Config\Services::session();

		if(!$data['session']->get('logado')){
			
			return redirect()->to(base_url('Home')); 
		}
		
		$ptcModel = new \App\Models\ParticipanteModel();
		//var_dump((int)$data['session']->get('cod_usu'));
		$cod = $data['session']->get('cod_usu');
		//var_dump($cod);
		//$registros = $ptcModel->find($cod);
		$registros = $ptcModel->Where('cod_usu',$cod)->first();
		//var_dump($registros);

		$data['ptc'] = $registros;
		//$nome = $ptcModel->Where($nome,post);

		return view('form_ptc',$data);
	}

	public function inserirparticipante(){
		$data['session'] =  \Config\Services::session();

		if(!$data['session']->get('logado')){
			
			return redirect()->to(base_url('Home')); 
		}

		$request = service('request');
		$data['msg'] = "";
		if($request->getMethod() === 'post'){

			$ptcmodel = new \App\Models\ParticipanteModel();
			$ptcmodel->set('cod_usu',$request->getPost('cod_usu'));
			$ptcmodel->set('nome_ptc',$request->getPost('nome_ptc'));
			$ptcmodel->set('dt_nascptc',$request->getPost('dtn_ptc'));
			$ptcmodel->set('status_ptc',$request->getPost('status_ptc'));

			if($ptcmodel->insert()){
				$data['msg'] = "Dados inseridos com sucesso.";
			}else{
				$data['msg'] = "Dados não inseridos";
			}
		}

		return view('form_inserir-ptc',$data);
	}

	public function alterardados(){
		$data['session'] =  \Config\Services::session();

		if(!$data['session']->get('logado')){
			
			return redirect()->to(base_url('Home')); 
		}

		$ptcmodel = new \App\Models\ParticipanteModel();
		$cod = $data['session']->get('cod_usu');
		$registros = $ptcmodel->find($cod);
		
		$request = service('request');
		
		if($request->getMethod() === 'post'){
		
			$registros->nome_ptc = $request->getPost('nome_ptc');
			$registros->dt_nascptc = $request->getPost('dtn_ptc');
			$registros->status_ptc = $request->getPost('status_ptc');
			
			if($ptcmodel->update($cod,$registros)){
				$data['msg'] = "Dados Alterados com sucesso.";
			}else{
				$data['msg'] = "Dados não Alterados";
			}
		}
		
		$data['ptc'] = $registros;

		return view('form_ptc',$data);
	}

	public function excluirptc($idptc){
		$data['session'] =  \Config\Services::session();

		if(!$data['session']->get('logado')){
			
			return redirect()->to(base_url('Home')); 
		}
		//$idptc = 1;

		if(is_null($idptc)){
			return redirect()->to(base_url('participantecontroller/listainfo'));
		}
		$ptcmodel = new \App\Models\ParticipanteModel();

		if($ptcmodel->delete($idptc)){
			
			return redirect()->to(base_url('participantecontroller/listainfo'));
		}else{
			return redirect()->to(base_url('participantecontroller/listainfo'));
		}
		return redirect()->to(base_url('participantecontroller/listainfo'));

	}

	
}
