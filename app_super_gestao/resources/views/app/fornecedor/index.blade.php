<h3> Fornecedor (view) </h3>

@php

@endphp

@isset($fornecedor)
    {{-- @for($i = 0; isset($fornecedor[$i]); $i++)    
        Fornecedor: {{ $fornecedor[$i]['nome'] }}
        <br>
        Status: {{ $fornecedor[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedor[$i]['cnpj'] ?? 'Dado não Cadastrado' }}
        <br>
        Status: {{ $fornecedor[$i]['ddd'] ?? 'Dado não Cadastrado' }}{{ $fornecedor[]['phone'] ?? 'Dado não Cadastrado' }}
        <hr>
    @endfor
    <br>
    @php $e = 0 @endphp
    @while(isset($fornecedor[$e]))    
        Fornecedor: {{ $fornecedor[$e]['nome'] }}
        <br>
        Status: {{ $fornecedor[$e]['status'] }}
        <br>
        CNPJ: {{ $fornecedor[$e]['cnpj'] ?? 'Dado não Cadastrado' }}
        <br>
        Status: {{ $fornecedor[$e]['ddd'] ?? 'Dado não Cadastrado' }}{{ $fornecedor[$e]['phone'] ?? 'Dado não Cadastrado' }}
        <hr>
        @php $e++ @endphp
    @endwhile
    <br> --}}
    {{-- @foreach($fornecedor as $indice => $fornecedor)  
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não Cadastrado' }}
        <br>
        Status: {{ $fornecedor['ddd'] ?? 'Dado não Cadastrado' }}{{ $fornecedor['phone'] ?? 'Dado não Cadastrado' }}
        <hr>        
    @endforeach --}}
<br>
     @forelse($fornecedor as $indice => $fornecedor)  
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não Cadastrado' }}
        <br>
        Status: {{ $fornecedor['ddd'] ?? 'Dado não Cadastrado' }}{{ $fornecedor['phone'] ?? 'Dado não Cadastrado' }}
        <hr>  
          @empty
            Não existem fornecedores cadastrados!!!    
    @endforelse
@endisset

