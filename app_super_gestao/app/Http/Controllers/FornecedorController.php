<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
   public function index() {
      $fornecedor = [
         0 => [
            'nome' => 'Fornecedor 1',
            'status' => 'N',
            'cnpj' => '00.000.000/000-00',
            'ddd' => '48', //SC
            'phone' => '9999-9999',
         ],
         1 => [
            'nome' => 'Fornecedor 2',
            'status' => 'S',
            'cnpj' => '',
            'ddd' => '66', //MT
            'phone' => '9999-8888',
         ],
         2 => [
            'nome' => 'Fornecedor 3',
            'status' => 'S',
            'cnpj' => '',
            'ddd' => '64', //GO
            'phone' => '7777-7777',
         ],         
      ];
      
    return view('app.fornecedor.index', compact('fornecedor'));
   }   
}
