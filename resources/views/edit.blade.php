<div class="container">

    @if(session('success'))
        <p class="alert-success">
            {{ session('success') }}
        </p>
    @endif

    <form action="{{ url('/edit_pessoa', $pessoa->id) }}" method="post">

        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div class="col-lg-3">
            <div class="form-group">
                <label for="name">Digite o nome</label>
                <input type="text" name="name" placeholder="Digite o nome" class="form-control" value="{{ $pessoa->name }}">
            </div>
            <div class="form-group">
                <label for="email">Digite o email</label>
                <input type="text" name="email" placeholder="Digite o email" class="form-control" value="{{ $pessoa->email }}">
            </div>
            <div class="form-group">
                <label for="cpf">Digite o CPF</label>
                <input type="number" name="cpf" placeholder="Digite o CPF" class="form-control" value="{{ $pessoa->cpf }}">
            </div>
            <div>
                <input type="submit" value="Editar" class="btn btn-primary">
            </div>
        </div>

    </form>
</div>