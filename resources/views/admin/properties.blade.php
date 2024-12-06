@include('admin.includes.head')

<body>

    {{-- MODAIS --}}

    <div class="modal modal-blur fade" id="modal-scrollable" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 750px" role="document">
            <form action="{{ route('properties.store') }}" method="POST"
                enctype="multipart/form-data"class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Novo Imóvel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Título <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="p_title" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Preço <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="property_price" onchange="formatValue()"
                                value="" name="p_price" required>
                            <small style="color: red; font-size: 12px;">Digitar apenas números</small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Categoria <span style="color: red;">*</span></label>
                            <select class="form-select" name="p_category">
                                <option value="" selected>Selecione uma opção</option>

                                @foreach ($categories as $form_category)
                                    <option value="{{ $form_category->slug }}">{{ $form_category->category_name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Endereço <span style="color: red;">*</span></label>
                            <textarea class="form-control" data-bs-toggle="autosize" name="p_address"
                                style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 60px;"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Quartos <span style="color: red;">*</span></label>
                            <input type="number" class="form-control" name="p_bedroom" required value="0">
                        </div>
                        <div class="col">
                            <label class="form-label">Banheiros <span style="color: red;">*</span></label>
                            <input type="number" class="form-control" name="p_bathroom" required value="0">
                        </div>
                        <div class="col">
                            <label class="form-label">Vagas <span style="color: red;">*</span></label>
                            <input type="number" class="form-control" name="p_parking" required value="0">
                        </div>
                        <div class="col">
                            <label class="form-label">Área (sqft) <span style="color: red;">*</span></label>
                            <input type="number" class="form-control" name="p_area" required value="0">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Descrição <span style="color: red;">*</span></label>
                            <textarea class="form-control" data-bs-toggle="autosize" name="p_description"
                                style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 150px;"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Imagem de capa <span style="color: red;">*</span></label>
                            <input type="file" class="form-control" multiple name="p_cover_img" accept="image/*"
                                required>
                            <small style="color: red; font-size: 12px;">Tamanho máximo: 1MB</small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Status <span style="color: red;">*</span></label>
                            <select class="form-select" name="p_status">
                                <option value="" selected>Selecione uma opção</option>
                                <option value="Disponível">Disponível</option>
                                <option value="Indisponível">Indisponível</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Url Zillow</label>
                            <input type="text" class="form-control" multiple name="p_zillow_url"
                                placeholder="https://www.zillow.com/homedetails/SEU-IMOVEL">
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-scrollable-alter" tabindex="-1" style="display: none;"
        aria-hidden="true">
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
                                <input type="text" class="form-control" id="property_price"
                                    onchange="formatValue()" value="" name="example-text-input" required>
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
                                <input type="number" class="form-control" name="example-text-input" required
                                    value="0">
                            </div>
                            <div class="col">
                                <label class="form-label">Banheiros <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required
                                    value="0">
                            </div>
                            <div class="col">
                                <label class="form-label">Vagas <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required
                                    value="0">
                            </div>
                            <div class="col">
                                <label class="form-label">Área (sqft) <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" name="example-text-input" required
                                    value="0">
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



    <div class="container pt-5 pb-5 container-start-properties">
        <div class="row">
            <div class="col-6">
                <h1>Imóveis</h1>
            </div>
            <div class="col-6 text-end">
                <button data-toggle="tooltip" data-bs-title="Adicionar um Imóvel" type="button"
                    class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-scrollable">
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




            @if (count($properties) != 0)

                @foreach ($properties as $property)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $property->p_title }}</h3>
                                <div class="card-actions">

                                    {{-- DELETAR IMÓVEL --}}
                                    <button type="button" data-toggle="tooltip" data-bs-title="Apagar Imóvel"
                                        class="btn btn-danger text-center btn-action-properties" data-bs-toggle="modal"
                                        data-bs-target="#modal-danger{{ $property->id }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-trash m-0">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>

                                    {{-- ALTERAR IMÓVEL --}}
                                    <button type="" data-toggle="tooltip" data-bs-title="Alterar Imóvel"
                                        class="btn btn-warning text-center btn-action-properties" data-bs-toggle="modal"
                                        data-bs-target="#modal-scrollable-alter{{ $property->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-edit m-0">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>

                                    {{-- ADICIONAR FOTOS --}}
                                    <button type="button" data-toggle="tooltip" data-bs-title="Adicionar Imagens"
                                        class="btn btn-primary text-center btn-action-properties" data-bs-toggle="modal"
                                        data-bs-target="#modal-simple{{ $property->id }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-photo-plus m-0">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M15 8h.01" />
                                            <path
                                                d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5" />
                                            <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" />
                                            <path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54" />
                                            <path d="M16 19h6" />
                                            <path d="M19 16v6" />
                                        </svg>
                                    </button>

                                    {{-- VER DETALHES --}}
                                    <a href="#" data-toggle="tooltip" data-bs-title="Ver detalhes"
                                        class="btn btn-secondary text-center btn-action-properties">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                <div
                                    style="
                                    background-image: url({{ asset('assets/images/properties_img/' . $property->p_cover_img) }});
                                    background-size: cover;
                                    background-position: center;
                                    padding:120px;
                                    ">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- MODAIS --}}

                    <div class="modal modal-blur fade" id="modal-danger{{ $property->id }}" tabindex="-1"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="modal-status bg-danger"></div>
                                <div class="modal-body text-center py-4">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon mb-2 text-danger icon-lg">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 9v4"></path>
                                        <path
                                            d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                                        </path>
                                        <path d="M12 16h.01"></path>
                                    </svg>
                                    <h3>Tem certeza que deseja remover este imóvel?</h3>
                                    <div class="text-secondary"></div>
                                </div>
                                <div class="modal-footer">
                                    <div class="w-100">
                                        <div class="row">
                                            <div class="col"><a href="#" class="btn w-100"
                                                    data-bs-dismiss="modal">Cancelar</a></div>
                                            <div class="col">
                                                <form action="{{ route('properties.destroy') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="p_id"
                                                        value="{{ $property->id }}">
                                                    <button type="submit"
                                                        class="btn btn-danger w-100">Remover</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal modal-blur fade" id="modal-scrollable-alter{{ $property->id }}" tabindex="-1"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <form action="{{ route('properties.edit') }}" method="POST"
                                enctype="multipart/form-data"class="modal-content">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title">Alterar este imóvel</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">



                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">Título <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="p_title"
                                                value="{{ $property->p_title }}" required>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Preço <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="property_price"
                                                onchange="formatValue()" value="{{ $property->p_price }}"
                                                name="p_price" required>
                                            <small style="color: red; font-size: 12px;">Digitar apenas números</small>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">Categoria <span
                                                    style="color: red;">*</span></label>
                                            <select class="form-select" name="p_category">
                                                <option value="">Selecione uma opção</option>
                                                <option value="{{ $property->p_category }}" selected>
                                                    {{ $property->p_category }}</option>

                                                @foreach ($categories as $form_category)
                                                    <option value="{{ $form_category->slug }}">
                                                        {{ $form_category->category_name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">Endereço <span
                                                    style="color: red;">*</span></label>
                                            <textarea class="form-control" data-bs-toggle="autosize" name="p_address"
                                                style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 60px;">{{ $property->p_address }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">Quartos <span
                                                    style="color: red;">*</span></label>
                                            <input type="number" class="form-control" name="p_bedroom" required
                                                value="{{ $property->p_bedroom }}">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Banheiros <span
                                                    style="color: red;">*</span></label>
                                            <input type="number" class="form-control" name="p_bathroom" required
                                                value="{{ $property->p_bathroom }}">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Vagas <span style="color: red;">*</span></label>
                                            <input type="number" class="form-control" name="p_parking" required
                                                value="{{ $property->p_parking }}">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Área (sqft) <span
                                                    style="color: red;">*</span></label>
                                            <input type="number" class="form-control" name="p_area" required
                                                value="{{ $property->p_area }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">Descrição <span
                                                    style="color: red;">*</span></label>
                                            <textarea class="form-control" data-bs-toggle="autosize" name="p_description"
                                                style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 150px;">{{ $property->p_description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">Imagem de capa</label>
                                            <input type="file" class="form-control" multiple name="p_cover_img"
                                                accept="image/*">
                                            <small style="color: red; font-size: 12px;">Tamanho máximo: 1MB</small>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <img width="150"
                                                src="{{ asset('assets/images/properties_img/' . $property->p_cover_img) }}"
                                                alt="">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">Status <span
                                                    style="color: red;">*</span></label>
                                            <select class="form-select" name="p_status">
                                                <option value="">Selecione uma opção</option>
                                                <option value="{{ $property->p_status }}" selected>
                                                    {{ $property->p_status }}</option>
                                                <option value="Disponível">Disponível</option>
                                                <option value="Indisponível">Indisponível</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">Url Zillow</label>
                                            <input type="text" class="form-control" multiple name="p_zillow_url"
                                                placeholder="https://www.zillow.com/homedetails/SEU-IMOVEL"
                                                value="{{ $property->p_zillow_url }}">
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn me-auto"
                                        data-bs-dismiss="modal">Fechar</button>
                                    <input type="hidden" name="id" value="{{ $property->id }}">
                                    <button type="submit" class="btn btn-primary">Salvar Altereções</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="modal modal-blur fade" id="modal-simple{{ $property->id }}" tabindex="-1"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <form action="{{ route('properties.addGallery') }}" method="POST" enctype="multipart/form-data" class="modal-content">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title">Adicione imagens a este imóvel</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <div class="form-label">Selecione as imagens que deseja adicionar</div>
                                        <input type="file" class="form-control" accept="image/*"
                                            id="gallery-photo-add" name="p_images[]" multiple>
                                        <span style="color: red; font-size: 12px;">Tamanho máximo: 2MB</span>
                                    </div>

                                    <div class="gallery"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn me-auto"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <input type="hidden" name="p_id" value="{{ $property->id }}">
                                    <button type="submit" class="btn btn-primary">Salvar Imagens</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- FIM MODAIS --}}
                @endforeach
            @else
                <div class="col-md-12 text-center">
                    <h1 style="font-size: 32px">
                        Desculpe. Nenhum imóvel foi encontrado.
                    </h1>
                </div>
            @endif





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
