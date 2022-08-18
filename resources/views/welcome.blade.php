@guest
<x-guest-layout>
    <div class="container conteudo" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-12 mb-1" style="font-weight: bold; font-size: 16px; color: #00883D">
                PRINCIPAIS SERVIÇOS
            </div>
        </div>
        <div class="row align-content-stretch">
            <div class="col-md-4 mb-3">
                <button class="h-100 w-100" data-toggle="modal" data-target="#emissaoLicencaModal">
                    <div class="card card-home">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                        EMISSÃO DE LICENÇAS
                                    </p>
                                </div>
                                <div class="col-md-3" style="text-align: right;">
                                    <img src="{{asset('img/emissao.svg')}}" width="35px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-md-4 mb-3">
                <button class="h-100 w-100" data-toggle="modal" data-target="#renovacaoLicencaModal">
                    <div class="card card-home">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                        RENOVAÇÃO DE LICENÇA
                                    </p>
                                </div>
                                <div class="col-md-3" style="text-align: right;">
                                    <img src="{{asset('img/renovacao.svg')}}" width="45px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-md-4 mb-3">
                <button class="h-100 w-100" data-toggle="modal" data-target="#registroDenunciaModal">
                    <div class="card card-home">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                        REGISTRO DE <br> DENÚNCIAS
                                    </p>
                                </div>
                                <div class="col-md-3" style="text-align: right;">
                                    <img src="{{asset('img/denuncias.svg')}}" width="45px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-md-4 mb-3">
                <button class="h-100 w-100" data-toggle="modal" data-target="#consultaLicencaModal">
                    <div class="card card-home">
                        <div class="card-body d-flex align-items-center">
                            <div class="row">
                                <div class="col-md-9">
                                    <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                        CONSULTAS DE LICENÇAS AMBIENTAIS
                                    </p>
                                </div>
                                <div class="col-md-3" style="text-align: right;">
                                    <img src="{{asset('img/consulta.svg')}}" width="45px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-md-4 mb-3">
                <button class="h-100 w-100" data-toggle="modal" data-target="#acompanhamentoSolicitacoesModal">
                    <div class="card card-home">
                        <div class="card-body d-flex align-items-center">
                            <div class="row ">
                                <div class="col-md-9">
                                    <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                        ACOMPANHAMENTO DE SOLICITAÇÕES
                                    </p>
                                </div>
                                <div class="col-md-3" style="text-align: right;">
                                    <img src="{{asset('img/acompanhar.svg')}}" width="45px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-md-4 mb-3">
                <button class="h-100 w-100" data-toggle="modal" data-target="#solicitacoesPodaModal">
                    <div class="card card-home">
                        <div class="card-body align-items-center">
                            <div class="row">
                                <div class="col-md-9">
                                    <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                        SOLICITAÇÃO DE PODA OU SUPRESSÃO DE ÁRVORES
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <img src="{{asset('img/poda.svg')}}" width="45px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <br>
        @if ($noticias->count() > 0)
            <div class="row">
                <div class="col-md-12" style="font-weight: bold; font-size: 16px; color: #00883D;">
                    NOTÍCIAS EM DESTAQUE
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-between">
                        <div class="col-md-8" style="padding-left: 0px; padding-right: 0px">
                            <div id="carouselNoticiasCaptions" class="carousel slide" data-ride="carousel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img id="icon-prev-carousel" class="carousel-control-prev alinhar-verticalmente" href="#carouselNoticiasCaptions" role="button" data-slide="prev" src="{{asset('img/back-green-com.svg')}}" alt="" style="width: 50px">
                                        <ol class="carousel-indicators">
                                            @foreach ($noticias as $i => $noticia)
                                                @if ($i == 0)
                                                    <li data-target="#carouselNoticiasCaptions" data-slide-to="{{$i}}" class="active"></li>
                                                @else
                                                    <li data-target="#carouselNoticiasCaptions" data-slide-to="{{$i}}"></li>
                                                @endif
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach ($noticias as $i => $noticia)
                                                <div class="carousel-item @if($i == 0)active @endif">
                                                    <a class="link-carousel" href="{{$noticia->link}}" target="_blank">
                                                        <img class="img-carousel" src="{{asset('storage/'.$noticia->imagem_principal)}}" class="d-block w-100" alt="Imagem da notícia {{$noticia->titulo}}" height="400px">
                                                    </a>
                                                    <div class="carousel-caption" style="right: 0%; left: 0%">
                                                        <div style="
                                                        bottom: 0;
                                                        background: rgb(0, 0, 0);
                                                        background: rgba(0, 0, 0, 0.8);
                                                        color: #f1f1f1;
                                                        padding: 20px;
                                                        padding-bottom: 0;
                                                        padding-top: 5;">
                                                            <a class="link-carousel" href="{{$noticia->link}}" target="_blank"><h5>{{$noticia->titulo}}</h5></a>
                                                            <p style="font-size: 12px; color: rgb(202, 202, 202);">
                                                                {!! mb_strimwidth(strip_tags($noticia->texto), 0, 200, "...") !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <img id="icon-next-carousel" class="carousel-control-next alinhar-verticalmente" href="#carouselNoticiasCaptions" role="button" data-slide="next" src="{{asset('img/next-green-com.svg')}}" alt="" style="width: 50px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3" style="background-color: rgb(61, 61, 61)" style="padding-left: 0px; padding-right: 0px">
                            @foreach ($noticias as $i => $noticia)
                                @if($i < 3)
                                    <a href="{{$noticia->link}}" style="text-decoration:none" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'">
                                        <br>
                                        <div class="form-row col-md-12" style="font-size: 12px; color: whitesmoke">
                                            {{date('d/m/Y', strtotime($noticia->created_at))}}
                                        </div>
                                        <div class="form-row col-md-12" style="font-weight: bold; font-size: 16px; color: whitesmoke">
                                            {{$noticia->titulo}}
                                            <br>
                                            <span style="font-weight: bold; font-size: 14px;">
                                                {!! mb_strimwidth(strip_tags($noticia->texto), 0, 100, "...") !!}
                                            </span>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: right">
                    <a href="{{route('noticias.index')}}" style="font-weight: bold; font-style: italic; text-decoration: underline; color: #00883D">
                        Ver todas as notícias
                    </a>
                </div>
            </div>
        @endif
        <div class="modal fade" id="consultaLicencaModal" tabindex="-1" role="dialog" aria-labelledby="consultaLicencaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Consulta de Licenças Ambientais</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="novo-requerimento-form" method="GET" action="{{route('empresa.licenca.index')}}">
                        <div class="modal-body">
                            <p class="moda-text text-justify">
                                Você poderá consultar as licenças e autorizações ambientais emitidas ou em processamento pela SDRMA.
                            </p>
                            <div>
                                <label for="selectEmpresa"> Empresas Cadastradas <span style="color: red">*</span></label>
                                <select class="form-control" id="selectEmpresa" name="empresa">
                                    @foreach($empresas as $empresa)
                                        <option value="{{$empresa->id}}">{{$empresa->nome}} - {{$empresa->cpf_cnpj}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="submeterFormBotao btn btn-success btn-color-dafault">Continuar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="emissaoLicencaModal" tabindex="-1" role="dialog" aria-labelledby="emissaoLicencaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Emissão de Licenças</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você poderá solicitar a emissão da sua licença ou autorização ambiental, com base na lei municipal 4224/2015. Apenas os empreendimentos listados no anexo único do Impacto Local do Estado de Pernambuco (Resolução CONSEMA nº 01/2018) e cujas atividades se restrinjam aos limites do município devem se licenciar pela SDRMA. O processo de licenciamento ambiental consiste em uma etapa (Licença Simplificada) para empreendimentos de baixo potencial poluidor e porte micro, e em três etapas (Licenças Prévia, de Instalação e de Operação) para o restante. Autorizações ambientais são emitidas para atividades cujo impacto seja de tempo limitado.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('requerimentos.index', 'atuais')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="renovacaoLicencaModal" tabindex="-1" role="dialog" aria-labelledby="renovacaoLicencaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Renovação de Licenças</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você poderá solicitar a renovação de sua licença ambiental dentro do prazo de renovação. O prazo para renovação é de até 120 dias antes do vencimento da licença atual. A nova licença só poderá ser emitida a partir do dia seguinte ao vencimento da licença anterior.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('requerimentos.index', 'atuais')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="registroDenunciaModal" tabindex="-1" role="dialog" aria-labelledby="registroDenunciaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de Denúncias</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você poderá registrar denúncias e ocorrências de crimes ambientais. A SDRMA irá encaminhar a sua equipe técnica ao local para averiguar fazer o diagnóstico ambiental do ocorrido e tomar as devidas providências administrativas, de acordo com a lei de crimes ambientais (Lei Federal nº 9.605/2018), bem como da lei municipal 4224/2015 (Sistema Municipal de Meio Ambiente).
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('denuncias.create')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="acompanhamentoSolicitacoesModal" tabindex="-1" role="dialog" aria-labelledby="acompanhamentoSolicitacoesLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Acompanhamento de Solicitações</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você poderá acompanhar as solicitações feitas pelo seu usuário no sistema.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('mudas.requerente.index')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="solicitacoesPodaModal" tabindex="-1" role="dialog" aria-labelledby="solicitacoesPodaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Solicitações de Poda ou Supressão de Árvores</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você pode requerer poda ou supressão nas áreas públicas do município. Apenas espécimes nativos da flora Brasileira necessitam de autorização para sua supressão em áreas particulares.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('podas.requerente.index')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function mostrarContato(tipo, texto, img){
            if(tipo == "mostrar1"){
                if(document.getElementById("mostrar1").style.display == "block"){
                    document.getElementById("mostrar1").style.display = "none";
                    document.getElementById("mostrar2").style.display = "block";
                    document.getElementById("texto1").innerHTML="Mostrar";
                    document.getElementById("texto2").innerHTML="Fechar";
                    document.getElementById("img1").style.display = "none";
                    document.getElementById("img2").style.display = "block";
                }else if(document.getElementById("mostrar1").style.display == "none"){
                    document.getElementById("mostrar1").style.display = "block";
                    document.getElementById("mostrar2").style.display = "none";
                    document.getElementById("texto1").innerHTML="Fechar";
                    document.getElementById("texto2").innerHTML="Mostrar";
                    document.getElementById("img1").style.display = "block";
                    document.getElementById("img2").style.display = "none";
                }
            }else if(tipo == "mostrar2"){
                if(document.getElementById("mostrar2").style.display == "block"){
                    document.getElementById("mostrar2").style.display = "none";
                    document.getElementById("mostrar1").style.display = "block";
                    document.getElementById("texto2").innerHTML="Mostrar";
                    document.getElementById("texto1").innerHTML="Fechar";
                    document.getElementById("img2").style.display = "none";
                    document.getElementById("img1").style.display = "block";
                }else if(document.getElementById("mostrar2").style.display == "none"){
                    document.getElementById("mostrar2").style.display = "block";
                    document.getElementById("mostrar1").style.display = "none";
                    document.getElementById("texto2").innerHTML="Fechar";
                    document.getElementById("texto1").innerHTML="Mostrar";
                    document.getElementById("img2").style.display = "block";
                    document.getElementById("img1").style.display = "none";
                }
            }
        }
    </script>
</x-guest-layout>
@else
<x-app-layout>
    @section('content')
    <div class="container conteudo" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-12 mb-1" style="font-weight: bold; font-size: 16px; color: #00883D">
                PRINCIPAIS SERVIÇOS
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="row align-content-stretch">
                <div class="col-md-4 mb-3">
                    <button class="h-100 w-100" data-toggle="modal" data-target="#emissaoLicencaModal">
                        <div class="card card-home">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-9">
                                        <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                            EMISSÃO DE LICENÇAS
                                        </p>
                                    </div>
                                    <div class="col-md-3" style="text-align: right;">
                                        <img src="{{asset('img/emissao.svg')}}" width="35px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="h-100 w-100" data-toggle="modal" data-target="#renovacaoLicencaModal">
                        <div class="card card-home">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-9">
                                        <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                            RENOVAÇÃO DE LICENÇA
                                        </p>
                                    </div>
                                    <div class="col-md-3" style="text-align: right;">
                                        <img src="{{asset('img/renovacao.svg')}}" width="45px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="h-100 w-100" data-toggle="modal" data-target="#registroDenunciaModal">
                        <div class="card card-home">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-9">
                                        <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                            REGISTRO DE <br> DENÚNCIAS
                                        </p>
                                    </div>
                                    <div class="col-md-3" style="text-align: right;">
                                        <img src="{{asset('img/denuncias.svg')}}" width="45px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="h-100 w-100" data-toggle="modal" data-target="#consultaLicencaModal">
                        <div class="card card-home">
                            <div class="card-body d-flex align-items-center">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                            CONSULTAS DE LICENÇAS AMBIENTAIS
                                        </p>
                                    </div>
                                    <div class="col-md-3" style="text-align: right;">
                                        <img src="{{asset('img/consulta.svg')}}" width="45px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="h-100 w-100" data-toggle="modal" data-target="#acompanhamentoSolicitacoesModal">
                        <div class="card card-home">
                            <div class="card-body d-flex align-items-center">
                                <div class="row ">
                                    <div class="col-md-9">
                                        <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                            ACOMPANHAMENTO DE SOLICITAÇÕES
                                        </p>
                                    </div>
                                    <div class="col-md-3" style="text-align: right;">
                                        <img src="{{asset('img/acompanhar.svg')}}" width="45px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="h-100 w-100" data-toggle="modal" data-target="#solicitacoesPodaModal">
                        <div class="card card-home">
                            <div class="card-body align-items-center">
                                <div class="row ">
                                    <div class="col-md-9">
                                        <p style="font-weight: bold; font-size: 18px; margin-bottom: 0px;">
                                            SOLICITAÇÃO DE PODA OU SUPRESSÃO DE ÁRVORES
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{asset('img/poda.svg')}}" width="45px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <br>
        <div class="modal fade" id="consultaLicencaModal" tabindex="-1" role="dialog" aria-labelledby="consultaLicencaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Consulta de Licenças Ambientais</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="novo-requerimento-form" method="GET" action="{{route('empresa.licenca.index')}}">
                        <div class="modal-body">
                            <p class="moda-text text-justify">
                                Você poderá consultar as licenças e autorizações ambientais emitidas pela SDRMA.
                            </p>
                            <div>
                                <label for="selectEmpresa"> Empresas Cadastradas <span style="color: red">*</span></label>
                                <select class="form-control" id="selectEmpresa" name="empresa">
                                    @foreach($empresas as $empresa)
                                        <option value="{{$empresa->id}}">{{$empresa->nome}} - {{$empresa->cpf_cnpj}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="submeterFormBotao btn btn-success btn-color-dafault">Continuar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="emissaoLicencaModal" tabindex="-1" role="dialog" aria-labelledby="emissaoLicencaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Emissão de Licenças</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você poderá solicitar a emissão da sua licença ou autorização ambiental, com base na lei municipal 4224/2015. Apenas os empreendimentos listados no anexo único do Impacto Local do Estado de Pernambuco (Resolução CONSEMA nº 01/2018) e cujas atividades se restrinjam aos limites do município devem se licenciar pela SDRMA. O processo de licenciamento ambiental consiste em uma etapa (Licença Simplificada) para empreendimentos de baixo potencial poluidor e porte micro, e em três etapas (Licenças Prévia, de Instalação e de Operação) para o restante. Autorizações ambientais são emitidas para atividades cujo impacto seja de tempo limitado.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('requerimentos.index', 'atuais')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="renovacaoLicencaModal" tabindex="-1" role="dialog" aria-labelledby="renovacaoLicencaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Renovação de Licenças</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você poderá solicitar a renovação de sua licença ambiental dentro do prazo de renovação. O prazo para renovação é de até 120 dias antes do vencimento da licença atual. A nova licença só poderá ser emitida a partir do dia seguinte ao vencimento da licença anterior.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('requerimentos.index', 'atuais')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="registroDenunciaModal" tabindex="-1" role="dialog" aria-labelledby="registroDenunciaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de Denúncias</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você poderá registrar denúncias e ocorrências de crimes ambientais. A SDRMA irá encaminhar a sua equipe técnica ao local para averiguar fazer o diagnóstico ambiental do ocorrido e tomar as devidas providências administrativas, de acordo com a lei de crimes ambientais (Lei Federal nº 9.605/2018), bem como da lei municipal 4224/2015 (Sistema Municipal de Meio Ambiente).
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('denuncias.create')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="acompanhamentoSolicitacoesModal" tabindex="-1" role="dialog" aria-labelledby="acompanhamentoSolicitacoesLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Acompanhamento de Solicitações</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você poderá acompanhar as solicitações feitas pelo seu usuário no sistema.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('mudas.requerente.index')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="solicitacoesPodaModal" tabindex="-1" role="dialog" aria-labelledby="solicitacoesPodaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #00883D; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">Solicitações de Poda ou Supressão de Árvores</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="modal-text text-justify">
                                Você pode requerer poda ou supressão nas áreas públicas do município. Apenas espécimes nativos da flora Brasileira necessitam de autorização para sua supressão em áreas particulares.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{route('podas.requerente.index')}}" class="btn btn-success btn-color-dafault">Continuar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if ($noticias->count() > 0)
            <div class="row">
                <div class="col-md-12" style="font-weight: bold; font-size: 16px; color: #00883D;">
                    NOTÍCIAS EM DESTAQUE
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-between">
                        <div class="col-md-8" style="padding-left: 0px; padding-right: 0px">
                            <div id="carouselNoticiasCaptions" class="carousel slide" data-ride="carousel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img id="icon-prev-carousel" class="carousel-control-prev alinhar-verticalmente" href="#carouselNoticiasCaptions" role="button" data-slide="prev" src="{{asset('img/back-green-com.svg')}}" alt="" style="width: 50px">
                                        <ol class="carousel-indicators">
                                            @foreach ($noticias as $i => $noticia)
                                                @if ($i == 0)
                                                    <li data-target="#carouselNoticiasCaptions" data-slide-to="{{$i}}" class="active"></li>
                                                @else
                                                    <li data-target="#carouselNoticiasCaptions" data-slide-to="{{$i}}"></li>
                                                @endif
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach ($noticias as $i => $noticia)
                                                <div class="carousel-item @if($i == 0)active @endif">
                                                    <a class="link-carousel" href="{{$noticia->link}}" target="_blank">
                                                        <img class="img-carousel" src="{{asset('storage/'.$noticia->imagem_principal)}}" class="d-block w-100" alt="Imagem da notícia {{$noticia->titulo}}" height="400px">
                                                    </a>
                                                    <div class="carousel-caption" style="right: 0%; left: 0%">
                                                        <div style="
                                                        bottom: 0;
                                                        background: rgb(0, 0, 0);
                                                        background: rgba(0, 0, 0, 0.8);
                                                        color: #f1f1f1;
                                                        padding: 20px;
                                                        padding-bottom: 0;
                                                        padding-top: 5;">
                                                            <a class="link-carousel" href="{{$noticia->link}}" target="_blank"><h5>{{$noticia->titulo}}</h5></a>
                                                            <p style="font-size: 12px; color: rgb(202, 202, 202);">
                                                                {!! mb_strimwidth(strip_tags($noticia->texto), 0, 200, "...") !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <img id="icon-next-carousel" class="carousel-control-next alinhar-verticalmente" href="#carouselNoticiasCaptions" role="button" data-slide="next" src="{{asset('img/next-green-com.svg')}}" alt="" style="width: 50px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3" style="background-color: rgb(61, 61, 61)" style="padding-left: 0px; padding-right: 0px">
                            @foreach ($noticias as $i => $noticia)
                                @if($i < 3)
                                    <a href="{{$noticia->link}}" style="text-decoration:none" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'">
                                        <br>
                                        <div class="form-row col-md-12" style="font-size: 12px; color: whitesmoke">
                                            {{date('d/m/Y', strtotime($noticia->created_at))}}
                                        </div>
                                        <div class="form-row col-md-12" style="font-weight: bold; font-size: 16px; color: whitesmoke">
                                            {{$noticia->titulo}}
                                            <br>
                                            <span style="font-weight: bold; font-size: 14px;">
                                                {!! mb_strimwidth(strip_tags($noticia->texto), 0, 100, "...") !!}
                                            </span>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: right">
                    <a href="{{route('noticias.index')}}" style="font-weight: bold; font-style: italic; text-decoration: underline; color: #00883D">
                        Ver todas as notícias
                    </a>
                </div>
            </div>
        @endif
    </div>
    <script>
        function mostrarContato(tipo, texto, img){
            if(tipo == "mostrar1"){
                if(document.getElementById("mostrar1").style.display == "block"){
                    document.getElementById("mostrar1").style.display = "none";
                    document.getElementById("mostrar2").style.display = "block";
                    document.getElementById("texto1").innerHTML="Mostrar";
                    document.getElementById("texto2").innerHTML="Fechar";
                    document.getElementById("img1").style.display = "none";
                    document.getElementById("img2").style.display = "block";
                }else if(document.getElementById("mostrar1").style.display == "none"){
                    document.getElementById("mostrar1").style.display = "block";
                    document.getElementById("mostrar2").style.display = "none";
                    document.getElementById("texto1").innerHTML="Fechar";
                    document.getElementById("texto2").innerHTML="Mostrar";
                    document.getElementById("img1").style.display = "block";
                    document.getElementById("img2").style.display = "none";
                }
            }else if(tipo == "mostrar2"){
                if(document.getElementById("mostrar2").style.display == "block"){
                    document.getElementById("mostrar2").style.display = "none";
                    document.getElementById("mostrar1").style.display = "block";
                    document.getElementById("texto2").innerHTML="Mostrar";
                    document.getElementById("texto1").innerHTML="Fechar";
                    document.getElementById("img2").style.display = "none";
                    document.getElementById("img1").style.display = "block";
                }else if(document.getElementById("mostrar2").style.display == "none"){
                    document.getElementById("mostrar2").style.display = "block";
                    document.getElementById("mostrar1").style.display = "none";
                    document.getElementById("texto2").innerHTML="Fechar";
                    document.getElementById("texto1").innerHTML="Mostrar";
                    document.getElementById("img2").style.display = "block";
                    document.getElementById("img1").style.display = "none";
                }
            }
        }
    </script>
    @endsection
</x-app-layout>
@endguest
