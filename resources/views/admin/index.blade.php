@include('admin.includes.head')

<body>
    @include('admin.includes.nav')

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Painel</h1>

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total de Imóveis</h5>
                                <p class="card-text">{{ $propertiesAmount }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total de Categorias</h5>
                                <p class="card-text">{{ $categoriesAmount }}</p>
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

                                @if (count($properties) != 0)

                                    @foreach ($properties as $property)
                                        <tr>
                                            <td>{{ $property->p_title }}</td>
                                            <td class="text-secondary">{{ $property->p_address }}</td>
                                            <td class="text-secondary">{{ $property->p_price }}</td>
                                            <td class="text-secondary">
                                                <a href="{{ $property->p_zillow_url }}" target="_blank"
                                                    class="text-secondary">Acessar</a>
                                            </td>
                                            <td>
                                                <a href="#" class="text-secondary">Acessar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="5"><p class="m-0">Desculpe. Nenhum imóvel foi encontrado.</p></td>
                                    </tr>

                                @endif




                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>



</body>

@include('admin.includes.footer')
