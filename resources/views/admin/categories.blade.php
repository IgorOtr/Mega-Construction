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
                        <table class="table table-center card-table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Qntd. Imóveis</th>
                                    <th>URL Site</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (count($categories) == 0)

                                    <tr>
                                        <td colspan="4">Nenhuma categoria cadastrada</td>
                                    </tr>

                                @else
                                    @foreach ($categories as $category)

                                        <tr>
                                            <td>{{ $category->category_name }}</td>
                                            <td class="text-secondary">0</td>
                                            <td class="text-secondary"><a href="#"class="text-reset">Acessar</a></td>
                                            <td>
                                                <a data-bs-toggle="modal"
                                                    data-bs-target="#modal-danger{{ $category->id }}"
                                                    class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash m-0">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </a>
                                                <a data-bs-toggle="modal"
                                                    data-bs-target="#modal-simple{{ $category->id }}"
                                                    class="btn btn-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit m-0">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                        <path
                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                        <path d="M16 5l3 3" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>


                                        {{-- MODAIS --}}

                                        <div class="modal modal-blur fade" id="modal-danger{{ $category->id }}"
                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="modal-status bg-danger"></div>
                                                    <div class="modal-body text-center py-4">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon mb-2 text-danger icon-lg">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M12 9v4"></path>
                                                            <path
                                                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                                                            </path>
                                                            <path d="M12 16h.01"></path>
                                                        </svg>
                                                        <h3>Tem certeza que deseja remover esta categoria?</h3>
                                                        <div class="text-secondary">Categoria: {{ $category->category_name }}</div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="w-100">
                                                            <div class="row">
                                                                <div class="col"><a href="#" class="btn w-100"
                                                                        data-bs-dismiss="modal">
                                                                        Cancelar
                                                                    </a></div>
                                                                <div class="col">
                                                                    <form action="{{ route('categories.destroy') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="category_id"
                                                                            value="{{ $category->id }}">
                                                                        <button type="submit"
                                                                            class="btn btn-danger w-100"
                                                                            data-bs-dismiss="modal">Remover</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal modal-blur fade" id="modal-simple{{ $category->id }}"
                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('categories.edit') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label">Nome da Categoria</label>
                                                                <input type="text" name="category_name"
                                                                    value="{{ $category->category_name }}"
                                                                    class="form-control mt-3">
                                                                <input type="hidden" name="category_id"
                                                                    value="{{ $category->id }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn me-auto"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                data-bs-dismiss="modal">Salvar Alteração</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- MODAIS --}}

                                    @endforeach

                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Nova Categoria</h3>
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Nome da Categoria</label>
                                <input type="text" name="category_name" class="form-control mt-3">
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
