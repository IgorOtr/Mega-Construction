@include('admin.includes.head')

<body>
    @include('admin.includes.nav')

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Painel</h1>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total de Imóveis</h5>
                                <p class="card-text">12345</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total de Categorias</h5>
                                <p class="card-text">56789</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">

                <h1>Acesso Rápido</h1>
                
                <div class="card">
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table table-striped">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Valor</th>
                            <th>Url Zillow</th>
                            <th>Url Site</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Maryjo Lebarree</td>
                            <td class="text-secondary">
                              Civil Engineer, Product Management
                            </td>
                            <td class="text-secondary"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                            <td class="text-secondary">
                              <a href="#" class="text-secondary">Acessar</a>
                            </td>
                            <td>
                              <a href="#" class="text-secondary">Acessar</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

            </div>
        </div>
    </div>

    
    
</body>

@include('admin.includes.footer')
