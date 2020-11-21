<?php namespace App\Controllers;

class member extends \CodeIgniter\Controller
{
    public function index()
    {
       // connect to the model
       $member = new \App\Models\member();
       // retrieve all the records
       $records = $member->findAll();
       // JSON encode and return the result
       return json_encode($records);
    }
}