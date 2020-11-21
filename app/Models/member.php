<?php
namespace App\Models;
use App\Models\Simple\JSONModel;

class Member extends Simple\JSONModel{
    protected $origin = WRITEPATH . 'data/memberData.json';
    protected $keyField = 'id';
    protected $validationRules = [];
}