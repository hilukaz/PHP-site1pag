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
                    Segurança da informação
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
                                <a class="nav-link" href="#">Página inicial </a>
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
                  <?php if($_GET['tela'] == 1) { ?><!--pega o valor passado pelo url e faz uso da lógica de decisão-->
      <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                    <img src="img/comp.png" width="50" height="40" class="d-inline-block align-top" alt="">
                    Segurança da informação
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
                                <a class="nav-link" href="index.html">Página inicial </a>
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
                      <h5>Esse processo realiza a tarefa de identificar e registrar o usuário que está enviando ou modificando a informação. Ou seja, autenticidade é quando um usuário vai manipular algum dado e ocorre uma documentação sobre essa ação.</h5>
                    </div>
                   
                    <div class="col">
                      <h3>Conteúdo Programático: </h3>
                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Conceito
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Autenticidade garante a veracidade da autoria da informação, porém, não garante a veracidade do conteúdo da informação. A autenticidade garante a veracidade do autor, de quem de fato produziu aquela informação, não importando se o conteúdo é verdadeiro ou falso.
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
                          A autenticidade é importante para garantir a segurança das informações corporativas das possíveis ameaças, que podem ter origens tanto externas quanto internas. Elas podem ser uma pessoa, um evento ou uma ideia capaz de causar danos ao sistema.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Consequências ao não aplicar
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          O não uso desses métodos podem ocasionar ameaças externas e internas.
                          <br>
                          As ameaças externas são tentativas de ataque ou desvio de informações vindas de fora da empresa, normalmente originadas por pessoas com a intenção de prejudicar a corporação.
                          <br>
                          As internas podem ser causadas por colaboradores de forma intencional. Essas ameaças podem causar pequenos incidentes e até prejuízos graves, por isso também devem ser levados em conta na hora do planejamento dos processos de segurança da empresa.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Aplicação
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          É importante que o profissional de SI mantenha sempre em alta a importância da segurança dos dados corporativos entre todos os usuários. Há diversas formas de manter a proteção da informação e não apenas criando mecanismos que realizam esse trabalho, mas desenvolver projetos que envolvam os usuários para conscientizá-los.
                        </div>
                      </div>
                      </div>
                      </div>
                  </div>
              </div>
            
            <br/>
            
            </div>

      </div>     

        <?php }else if($_GET['tela']==2){?><!--abre se a chave do php na hora de fazer a decisão, já que a variável está constituido no código do php e é só lá que pode ser reutilizada-->  
          <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                    <img src="img/comp.png" width="50" height="40" class="d-inline-block align-top" alt="">
                    Segurança da informação
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
                                <a class="nav-link" href="index.html">Página inicial </a>
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
                      <h5>Privacidade se refere à proteção de informações que não devem ser acessadas por indivíduos não autorizados. Isso significa dizer que, literalmente, determinadas informações são confidenciais e só dispõe de seu acesso aqueles que possuem autorização para tal.</h5>
                    </div>
                   
                    <div class="col">
                      <h3>Conteúdo Programático: </h3>
                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Conceito
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            O Conceito de Privacidade busca atuar sobre como a informação é coletada, distribuída e utilizada dentro de uma organização.                          </div>
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
                          Assim, esse pilar tem como principal objetivo assegurar a proteção dos sistemas de cunho confidencial e sigiloso.
                          <br>
                          Para cumprir com seu objetivo, esse aspecto da segurança da informação é implementado por diversos mecanismos, como logins, senhas, tokens, criptografia, entre outros.

                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Consequências ao não aplicar
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          A falha de confidencialidade, seja intencional ou acidental, não pode ser remediada, uma vez que esses dados foram revelados. Ou seja, quem teve acesso a eles não pode simplesmente esquecê-los. Atualmente, grande parte dos casos dos incidentes de segurança se referem à quebra de confidencialidade.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Aplicação
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Dentro da segurança da informação é comum que os dados confidenciais sejam categorizados conforme o seu nível de criticidade.
                          <br>
                          Isso quer dizer que aqueles dados que possuem maior extensão de danos, caso expostos, e os que necessitam de maiores ou mais complexas medidas de segurança, conforme essa característica, são priorizados.
                          
                        </div>
                      </div>
                      
                      
                  </div>
              </div>
            
            <br/>
            
            </div>

      </div>

        <?php }else if($_GET['tela']==3){?><!--abre se a chave do php na hora de fazer a decisão, já que a variável está constituido no código do php e é só lá que pode ser reutilizada-->  
          <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                    <img src="img/comp.png" width="50" height="40" class="d-inline-block align-top" alt="">
                    Segurança da informação
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
                                <a class="nav-link" href="index.html">Página inicial </a>
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
                      <h5>Identificar se as informações não sofreram alterações durante o seu processamento, pois todos documentos precisam ser preservados como foram criados (ativos da informação). Vamos ter acesso à informação quando precisarmos dela, sendo acesso a qualquer momento pelos colaboradores.</h5>
                    </div>
                   
                    <div class="col">
                        <h3>Conteúdo Programático: </h3>
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Conceito
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              Já o conceito de integridade na segurança da informação está relacionado à plenitude do armazenamento dos dados. Isto é, da mesma forma que as informações são fornecidas, elas devem ser armazenadas, sem qualquer alteração em seu conteúdo.
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
                            O princípio de integridade garante que todas as informações estejam em seu formato original e verdadeiro, a fim de servir para os propósitos para o qual foram designadas. Ou seja, elas devem permanecer íntegras.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Consequências ao não aplicar
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A perda de integridade se resume a uma condição em que determinada informação fica exposta ao manuseio de um indivíduo não autorizado que, por sua vez, efetua alterações dessas informações.
                                    <br>
                                    Contudo, as falhas de integridade não são causadas exclusivamente pelo fator humano, alterações de informações também podem estar relacionadas a acidentes, como de falhas de servidor, por exemplo.
                                    
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Aplicação
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Assim como a confidencialidade, a segurança da informação utiliza-se de alguns mecanismos para garantir a integridade da informação. Exemplos desses mecanismos são criptografia, hashing e assinaturas digitais.
                                    <br>
                                    Outros mecanismos indispensáveis para a manutenção da integridade das informações incluem o uso da definição de permissões para acesso a arquivos por meio de códigos de verificação e senhas, além do uso do backup.
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