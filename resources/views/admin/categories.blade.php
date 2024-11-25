@include('admin.includes.head')

<body>
    @include('admin.includes.nav')

    <div class="container pt-5 pb-3">
        <div class="row">
            <div class="col-md-12">
                <h1>Categorias</h1>
            </div>
        </div>
    </div>
    <div class="container pb-3">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Qntd. Imóveis</th>
                                    <th>URL Site</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Paweł Kuna</td>
                                    <td class="text-secondary">
                                        UI Designer, Training
                                    </td>
                                    <td class="text-secondary"><a href="#"class="text-reset">Acessar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Nova Categoria</h3>
                            <form action="">
                                <div class="form-group mb-3">
                                    <label class="form-label">Nome da Categoria</label>
                                    <input type="text" class="form-control mt-3">
                                </div>
                                <button type="submit" class="btn btn-primary">Adicionar Categoria</button>
                            </form>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

@include('admin.includes.footer')
