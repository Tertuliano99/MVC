<?php
echo $this->addNavBar();
echo $this->addSideBar();

$generos=$this->dados['generos'];
$periodos=$this->dados['periodos'];
$cursos=$this->dados['cursos'];
$formacoes=$this->dados['formacoes'];
//var_dump($generos);
//exit;

?>
<!-- Main Content -->
<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Novo</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h1>Cadastrar formando</h1>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-grid">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="card-header-title">Dados do Novo formando</div>

                            <nav class="card-header-actions">
                                <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                                    <i data-feather="minus-circle"></i>
                                </a>

                                <div class="dropdown">
                                    <a class="card-header-action" href="#" role="button" id="card1Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="settings"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card1Settings">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>

                                <a href="#" class="card-header-action">
                                    <i data-feather="x-circle"></i>
                                </a>
                            </nav>
                        </div>
                        <div class="card-body collapse show" id="card1">
                            <!-- <form>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
                      </div> 
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
                      </div> 
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
                      </div>
                    
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>-->
                            <form action="<?php echo DIRPAGE."formando/save"?>" method="POST">
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom01">NOME COMPLETO</label>
                                        <input type="text" class="form-control" id="validationCustom01" name="nome" placeholder="Nome completo" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom02">EMAIL</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="" name="email" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="exampleFormControlSelect1">GENERO</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="genero_id">
                                            <?php 
                                                foreach($generos as $genero){
                                                    echo "<option value=".$genero['id'].">".$genero['designacao']."</option>";

                                                }
                                            ?>
                                        </select>
                                            
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom03">TELEFONE</label>
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="" name="telefone" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom04">DATA DE NASCIMENTO</label>
                                        <input type="date" class="form-control" id="validationCustom02" placeholder="" name="dtnascimento" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom04">MORADA</label>
                                        <input type="text" class="form-control" id="validationCustom04" placeholder="" name="morada" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="curso">CURSO</label>
                                        <select class="form-control" name="curso" id="curso" onchange="getFormacao()">
                                        <?php 
                                                foreach($cursos as $value){
                                                    echo "<option value=".$value['id'].">".$value['designacao']."</option>";

                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="formacao">FORMAÇÕES</label>
                                        <select class="form-control" name="formacao" id="formacoes">
                                           <?php 
                                                foreach($formacoes as $value){
                                                    echo "<option value=".$value['id'].">".$value['designacao']."</option>";

                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="exampleFormControlSelect1">PERIODO</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="periodo">
                                        <?php 
                                                foreach($periodos as $value){
                                                    echo "<option value=".$value['id'].">".$value['designacao']."</option>";

                                                }
                                            ?>
                                        </select>
                                            
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label" for="validationCustom05">DATA DE INICIO</label>
                                        <input type="date" class="form-control" id="validationCustom05" placeholder="" value="" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label" for="validationCustom06">DATA DE CONCLUSAO</label>
                                        <input type="date" class="form-control" id="validationCustom06" placeholder="" value="" required>
                                    </div>
                                    
                                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                                    <?php 
                                        if(isset($_SESSION['sucess'])){
                                            echo $_SESSION['sucess'].'<br>';
                                        }else{
                                            if(isset($_SESSION['error'])){
                                                echo $_SESSION['error'].'<br>';
                                                echo "<pre>";
                                                print_r($_SESSION['error']);
                                                echo"</pre>";
                                            }
                                        }
                                    ?>
                            </form>
                        </div>

                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</div>
<!-- // Main Content -->