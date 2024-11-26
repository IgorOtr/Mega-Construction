@include('admin.includes.head')

<body>

    {{-- MODAIS --}}

    <div class="modal modal-blur fade" id="modal-scrollable" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Imóvel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">



                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Título <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="example-text-input" required>
                            </div>
                            <div class="col">
                                <label class="form-label">Preço <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="property_price" onchange="formatValue()" value="" name="example-text-input" required>
                                <small style="color: red; font-size: 12px;">Digitar apenas números</small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Endereço <span style="color: red;">*</span></label>
                                <textarea class="form-control" data-bs-toggle="autosize"
                                    style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 60px;"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Quartos <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required value="0">
                            </div>
                            <div class="col">
                                <label class="form-label">Banheiros <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required value="0">
                            </div>
                            <div class="col">
                                <label class="form-label">Vagas <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required value="0">
                            </div>
                            <div class="col">
                                <label class="form-label">Área (sqft) <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required value="0">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Descrição <span style="color: red;">*</span></label>
                                <textarea class="form-control" data-bs-toggle="autosize"
                                    style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 150px;"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Imagens <span style="color: red;">*</span></label>
                                <input type="file" class="form-control" multiple name="">
                                <small style="color: red; font-size: 12px;">Tamanho máximo: 1MB</small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Url Zillow</label>
                                <input type="text" class="form-control" multiple name=""
                                    placeholder="https://www.zillow.com/homedetails/SEU-IMOVEL">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Adicionar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-scrollable-alter" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar este Imóvel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Título <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="example-text-input" required>
                            </div>
                            <div class="col">
                                <label class="form-label">Preço <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="property_price" onchange="formatValue()" value="" name="example-text-input" required>
                                <small style="color: red; font-size: 12px;">Digitar apenas números</small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Endereço <span style="color: red;">*</span></label>
                                <textarea class="form-control" data-bs-toggle="autosize"
                                    style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 60px;"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Quartos <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required value="0">
                            </div>
                            <div class="col">
                                <label class="form-label">Banheiros <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required value="0">
                            </div>
                            <div class="col">
                                <label class="form-label">Vagas <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required value="0">
                            </div>
                            <div class="col">
                                <label class="form-label">Área (sqft) <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required value="0">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Descrição <span style="color: red;">*</span></label>
                                <textarea class="form-control" data-bs-toggle="autosize"
                                    style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 150px;"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Imagens <span style="color: red;">*</span></label>
                                <input type="file" class="form-control" multiple name="">
                                <small style="color: red; font-size: 12px;">Tamanho máximo: 1MB</small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Url Zillow</label>
                                <input type="text" class="form-control" multiple name=""
                                    placeholder="https://www.zillow.com/homedetails/SEU-IMOVEL">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Adicionar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                    <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon mb-2 text-danger icon-lg">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 9v4"></path>
                        <path
                            d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                        </path>
                        <path d="M12 16h.01"></path>
                    </svg>
                    <h3>Are you sure?</h3>
                    <div class="text-secondary">Do you really want to remove 84 files? What you've done cannot be
                        undone.</div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Cancel
                                </a></div>
                            <div class="col"><a href="#" class="btn btn-danger w-100"
                                    data-bs-dismiss="modal">
                                    Delete 84 items
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-none alert alert-important alert-warning alert-dismissible" style="" role="alert">
        <div class="d-flex">
            <div>
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon alert-icon">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                </svg>
            </div>
            <div>
                Imóvel adicionado com sucesso.
            </div>
        </div>
        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
    </div>

    {{-- FIM MODAIS --}}

    @include('admin.includes.nav')



    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Imóveis</h1>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-3 text-end">
                <button data-toggle="tooltip" data-bs-title="Adicionar um Imóvel" type="button" class="btn btn-warning" data-bs-toggle="modal"
                    data-bs-target="#modal-scrollable">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>Novo imóvel</button>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Título do imóvel</h3>
                        <div class="card-actions">
                            <button type="button" data-toggle="tooltip" data-bs-title="Apagar Imóvel" class="btn btn-danger text-center" data-bs-toggle="modal" data-bs-target="#modal-danger">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash m-0">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </button>
                            <button type="" data-toggle="tooltip" data-bs-title="Alterar Imóvel" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#modal-scrollable-alter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-edit m-0">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg>
                            </button>
                            <a href="#" data-toggle="tooltip" data-bs-title="Ver detalhes" class="btn btn-secondary text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-eye m-0">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
                            width="400" height="200" viewBox="0 0 400 200" fill="transparent"
                            stroke="var(--tblr-border-color, #b8cef1)">
                            <line x1="0" y1="0" x2="400" y2="200"></line>
                            <line x1="0" y1="200" x2="400" y2="0"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        async function formatValue() {

            var property_price = document.getElementById('property_price');

            var formated_number = await (property_price.value * 1).toLocaleString('en-US', {
                style: 'currency',
                currency: 'USD',
                maximumFractionDigits: 0
            });

            property_price.value = formated_number;

        }

    </script>

</body>

@include('admin.includes.footer')
