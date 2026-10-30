<?php

namespace App\Models;

use CodeIgniter\Model;

class ConteudoModel extends Model
{
    protected $table = 'conteudo';
    protected $primaryKey = 'Id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['Titulo', 'Texto'];
}