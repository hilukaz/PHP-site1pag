<html>
    <head>
        <title>boots</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    
    <body>

    <?php if (!isset($_GET['tela'])){?>
      <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                    <img src="img/comp.png" width="50" height="40" class="d-inline-block align-top" alt="">
                    Seguran??a da informa????o
                    </a>
                </nav>
              </div>
            </div>
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg Navbar-dark bg-dark"> 
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">P??gina inicial </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Saber mais
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="index.php?tela=02">Privacidade</a>
                                  <a class="dropdown-item" href="index.php?tela=01">Autenticidade</a>
                                  <a class="dropdown-item" href="index.php?tela=03">Integridade</a>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </div>
              </div>
              <div class="row">
                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="img/pexels-nao-triponez-129208.jpg" height="500px" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/pexels-negative-space-97077.jpg" height="500px" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/pexels-pixabay-207580.jpg" height="500px" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
              </div>
              <br/>
              <div class="row">
                
                <div class="col">
                  <figure class="figure">
                      <style>
                          .img-fluid {
                             height: 250px; 
                             width: 415px;
                          }
                      </style>
                    <a href="index.php?tela=01"><img src="img/secure.jfif" class="figure-img img-fluid rounded" alt="..."></a>
                    <figcaption class="figure-caption">Autenticidade</figcaption>
                  </figure>
                </div>
                <div class="col">
                  <figure class="figure">
                    <a href="index.php?tela=03"><img src="img/securee.jfif" class="figure-img img-fluid rounded" alt="..."></a>
                    <figcaption class="figure-caption text-center">Integridade</figcaption>
                  </figure>
                </div>
                <div class="col">
                  <figure class="figure">
                    <a href="index.php?tela=02"><img src="img/seguranca-da-informacao.jpg" class="figure-img img-fluid rounded" alt="..."></a>
                    <figcaption class="figure-caption text-end">Privacidade</figcaption>
                  </figure>
                </div>
                </div>
              </div>

        </div>
            
        <?php }else{ ?>  
                  <?php if($_GET['tela'] == 1) { ?><!--pega o valor passado pelo url e faz uso da l??gica de decis??o-->
      <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                    <img src="img/comp.png" width="50" height="40" class="d-inline-block align-top" alt="">
                    Seguran??a da informa????o
                    </a>
                </nav>
              </div>
            </div>
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg Navbar-dark bg-dark"> 
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">P??gina inicial </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Saber mais
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="privacidade.html">Privacidade</a>
                                <a class="dropdown-item" href="integridade.html">Integridade</a>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </div>
              </div>
              <br>
                <div class="row">
                    <div class="col">
                        <img src="img/pexels-nao-triponez-129208.jpg" class="img-fluid" alt="...">
                      <br>
                      <br>
                      <h2>Autenticidade</h2>
                      <h5>Esse processo realiza a tarefa de identificar e registrar o usu??rio que est?? enviando ou modificando a informa????o. Ou seja, autenticidade ?? quando um usu??rio vai manipular algum dado e ocorre uma documenta????o sobre essa a????o.</h5>
                    </div>
                   
                    <div class="col">
                      <h3>Conte??do Program??tico: </h3>
                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Conceito
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Autenticidade garante a veracidade da autoria da informa????o, por??m, n??o garante a veracidade do conte??do da informa????o. A autenticidade garante a veracidade do autor, de quem de fato produziu aquela informa????o, n??o importando se o conte??do ?? verdadeiro ou falso.
                          </div>
                        </div>
                      </div>
                        
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Finalidade
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          A autenticidade ?? importante para garantir a seguran??a das informa????es corporativas das poss??veis amea??as, que podem ter origens tanto externas quanto internas. Elas podem ser uma pessoa, um evento ou uma ideia capaz de causar danos ao sistema.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Consequ??ncias ao n??o aplicar
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          O n??o uso desses m??todos podem ocasionar amea??as externas e internas.
                          <br>
                          As amea??as externas s??o tentativas de ataque ou desvio de informa????es vindas de fora da empresa, normalmente originadas por pessoas com a inten????o de prejudicar a corpora????o.
                          <br>
                          As internas podem ser causadas por colaboradores de forma intencional. Essas amea??as podem causar pequenos incidentes e at?? preju??zos graves, por isso tamb??m devem ser levados em conta na hora do planejamento dos processos de seguran??a da empresa.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Aplica????o
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          ?? importante que o profissional de SI mantenha sempre em alta a import??ncia da seguran??a dos dados corporativos entre todos os usu??rios. H?? diversas formas de manter a prote????o da informa????o e n??o apenas criando mecanismos que realizam esse trabalho, mas desenvolver projetos que envolvam os usu??rios para conscientiz??-los.
                        </div>
                      </div>
                      </div>
                      </div>
                  </div>
              </div>
            
            <br/>
            
            </div>

      </div>     

        <?php }else if($_GET['tela']==2){?><!--abre se a chave do php na hora de fazer a decis??o, j?? que a vari??vel est?? constituido no c??digo do php e ?? s?? l?? que pode ser reutilizada-->  
          <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                    <img src="img/comp.png" width="50" height="40" class="d-inline-block align-top" alt="">
                    Seguran??a da informa????o
                    </a>
                </nav>
              </div>
            </div>
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg Navbar-dark bg-dark"> 
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">P??gina inicial </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Saber mais
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="integridade.html">Integridade</a>
                                <a class="dropdown-item" href="autenticidade.html">Autenticidade</a>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </div>
              </div>
              <br>
                <div class="row">
                    <div class="col">
                        <img src="img/pexels-nao-triponez-129208.jpg" class="img-fluid" alt="...">
                      <br>
                      <br>
                      <h2>Privacidade</h2>
                      <h5>Privacidade se refere ?? prote????o de informa????es que n??o devem ser acessadas por indiv??duos n??o autorizados. Isso significa dizer que, literalmente, determinadas informa????es s??o confidenciais e s?? disp??e de seu acesso aqueles que possuem autoriza????o para tal.</h5>
                    </div>
                   
                    <div class="col">
                      <h3>Conte??do Program??tico: </h3>
                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Conceito
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            O Conceito de Privacidade busca atuar sobre como a informa????o ?? coletada, distribu??da e utilizada dentro de uma organiza????o.                          </div>
                        </div>
                      </div>
                        
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Finalidade
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Assim, esse pilar tem como principal objetivo assegurar a prote????o dos sistemas de cunho confidencial e sigiloso.
                          <br>
                          Para cumprir com seu objetivo, esse aspecto da seguran??a da informa????o ?? implementado por diversos mecanismos, como logins, senhas, tokens, criptografia, entre outros.

                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Consequ??ncias ao n??o aplicar
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          A falha de confidencialidade, seja intencional ou acidental, n??o pode ser remediada, uma vez que esses dados foram revelados. Ou seja, quem teve acesso a eles n??o pode simplesmente esquec??-los. Atualmente, grande parte dos casos dos incidentes de seguran??a se referem ?? quebra de confidencialidade.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Aplica????o
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Dentro da seguran??a da informa????o ?? comum que os dados confidenciais sejam categorizados conforme o seu n??vel de criticidade.
                          <br>
                          Isso quer dizer que aqueles dados que possuem maior extens??o de danos, caso expostos, e os que necessitam de maiores ou mais complexas medidas de seguran??a, conforme essa caracter??stica, s??o priorizados.
                          
                        </div>
                      </div>
                      
                      
                  </div>
              </div>
            
            <br/>
            
            </div>

      </div>

        <?php }else if($_GET['tela']==3){?><!--abre se a chave do php na hora de fazer a decis??o, j?? que a vari??vel est?? constituido no c??digo do php e ?? s?? l?? que pode ser reutilizada-->  
          <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                    <img src="img/comp.png" width="50" height="40" class="d-inline-block align-top" alt="">
                    Seguran??a da informa????o
                    </a>
                </nav>
              </div>
            </div>
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg Navbar-dark bg-dark"> 
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">P??gina inicial </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Saber mais
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="privacidade.html">Privacidade</a>
                                <a class="dropdown-item" href="autenticidade.html">Autenticidade</a>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </div>
              </div>
              <br>
                <div class="row">
                    <div class="col">
                        <img src="img/pexels-nao-triponez-129208.jpg" class="img-fluid" alt="...">
                      <br>
                      <br>
                      <h2>Integridade</h2>
                      <h5>Identificar se as informa????es n??o sofreram altera????es durante o seu processamento, pois todos documentos precisam ser preservados como foram criados (ativos da informa????o). Vamos ter acesso ?? informa????o quando precisarmos dela, sendo acesso a qualquer momento pelos colaboradores.</h5>
                    </div>
                   
                    <div class="col">
                        <h3>Conte??do Program??tico: </h3>
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Conceito
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              J?? o conceito de integridade na seguran??a da informa????o est?? relacionado ?? plenitude do armazenamento dos dados. Isto ??, da mesma forma que as informa????es s??o fornecidas, elas devem ser armazenadas, sem qualquer altera????o em seu conte??do.
                            </div>
                          </div>
                        </div>
                          
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Finalidade
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            O princ??pio de integridade garante que todas as informa????es estejam em seu formato original e verdadeiro, a fim de servir para os prop??sitos para o qual foram designadas. Ou seja, elas devem permanecer ??ntegras.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Consequ??ncias ao n??o aplicar
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A perda de integridade se resume a uma condi????o em que determinada informa????o fica exposta ao manuseio de um indiv??duo n??o autorizado que, por sua vez, efetua altera????es dessas informa????es.
                                    <br>
                                    Contudo, as falhas de integridade n??o s??o causadas exclusivamente pelo fator humano, altera????es de informa????es tamb??m podem estar relacionadas a acidentes, como de falhas de servidor, por exemplo.
                                    
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Aplica????o
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Assim como a confidencialidade, a seguran??a da informa????o utiliza-se de alguns mecanismos para garantir a integridade da informa????o. Exemplos desses mecanismos s??o criptografia, hashing e assinaturas digitais.
                                    <br>
                                    Outros mecanismos indispens??veis para a manuten????o da integridade das informa????es incluem o uso da defini????o de permiss??es para acesso a arquivos por meio de c??digos de verifica????o e senhas, al??m do uso do backup.
                          </div>
                        </div>
                        
                        
                    </div>
                </div>
              
              <br/>
              
              </div>

        </div>

        <?php }
        
        else{?>              
        
          
        <?php }?>
        <?php } ?>
       
                
    </body>
</html>