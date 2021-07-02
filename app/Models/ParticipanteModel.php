<?php

namespace App\Models;

use CodeIgniter\Model;


Class ParticipanteModel extends Model{
            protected $table = 'tb_participantes';
            protected $primaryKey = 'cod_ptc';
            protected $allowedFields =['cod_usu','nome_ptc','dt_nascptc','status_ptc'];
            protected $returnType='object';

}
