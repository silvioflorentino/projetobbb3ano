<?php

namespace App\Models;

use CodeIgniter\Model;


Class UsuarioModel extends Model{
            protected $table = 'tb_usuario';
            protected $primaryKey = 'cod_usu';
            protected $allowedFields =['login_usu','senha_usu','ft_usu'];
            protected $returnType='object';

}