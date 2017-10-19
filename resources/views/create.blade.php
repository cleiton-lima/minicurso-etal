<div class="container">

    @if(session('success'))
        <p class="alert-success">
            {{ session('success') }}
        </p>
    @endif

    <form action="{{ url('/create_pessoa') }}" method="post">

        {{ csrf_field() }}

        <div class="col-lg-3">
            <div class="form-group">
                <label for="name">Digite o nome</label>
                <input type="text" name="name" placeholder="Digite o nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Digite o email</label>
                <input type="text" name="email" placeholder="Digite o email" class="form-control">
            </div>
            <div class="form-group">
                <label for="cpf">Digite o CPF</label>
                <input type="number" name="cpf" placeholder="Digite o CPF" class="form-control">
            </div>
            <div>
                <input type="submit" value="Salvar" class="btn btn-primary">
            </div>
        </div>

    </form>
</div>