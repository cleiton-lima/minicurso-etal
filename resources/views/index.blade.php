<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Laravel 5.4</title>
</head>
<body>

<div class="container _content">
    @if(session('success'))
        <p class="alert alert-success">
            {{ session('success') }}
        </p>
    @endif

<h1>Sistema de pessoas</h1>
<div><a href="{{ url("/create_pessoa") }}">Cadastrar Pessoa</a></div>
<table>
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>    
        </thead>
        <tbody>
        @foreach($pessoas as $pessoa)
            <tr>
                <td>{{ $pessoa->id }}</td>
                <td>{{ $pessoa->name }}</td>
                <td>{{ $pessoa->email }}</td>
                <td>{{ $pessoa->cpf }}</td>                
                <td>
                    <form action="{{ url('/delete_pessoa', $pessoa->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Deletar">
                        <a href="{{ url('/edit_pessoa', $pessoa->id) }}">Editar</a>
                    </form>
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>
</body>
</html>