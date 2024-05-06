<?php 
    echo $this->addNavBar();
    echo $this->addSideBar();
    $formandos=$this->dados['formandos'];
?>
<!-- Main Content -->
<div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Formando</a></li>
                <li class="breadcrumb-item active " aria-current="page">Listagem</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Formandos</h1>
            </div>

            <div class="row">
              <div class="col">
                <div class="alert alert-warning" role="alert">
                  <strong>Listagem de todos os formandos cadastrado</strong>  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
                  <div class="table-responsive-md">
                    <table class="table table-actions table-striped table-hover mb-0" data-table-7>
                      <thead>
                        <tr>
                          <th scope="col">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-all">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <th scope="col">Nome Completo</th>
                          <th scope="col">Genero</th>
                          <th scope="col">Email</th>
                          <th scope="col">Telefone</th>
                          <th scope="col">Data de Nascimento</th>
                          <th scope="col">Data de Resgistro</th>
                          <th scope="col">Acões</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            foreach($formandos as $value){
                                echo '
                                <tr>
                                <th scope="row">
                                  <label class="custom-control custom-checkbox m-0 p-0">
                                    <input type="checkbox" class="custom-control-input table-select-row">
                                    <span class="custom-control-indicator"></span>
                                  </label>
                                </th>
                                <td>'.$value['formando'].'</td>
                                <td>'.$value['genero'].'</td>
                                <td>'.$value['email'].'</td>
                                <td>'.$value['telefone'].'</td>
                                <td>
                                  <span class="badge badge-pill badge-primary">'.$value['dtnascimento'].'</span>
                                </td>
                                <td>'.$value['dta_registo'].'</td>
                                <td>
                                  <button class="btn btn-sm btn-primary">
                                    <span class="text-center">
                                    <i data-feather="edit"></i>
                                    </span>
                                </button>
                                  <button class="btn btn-sm btn-danger" onclick="deleteItem('.$value['cd_formando'].')">
                                    <span class="text-center">
                                    <i data-feather="trash"></i>
                                    </span>
                                  </button>
                                  
                                 <button class="btn btn-sm btn-info">
                                    <span class="text-center">
                                    <i data-feather="eye"></i>
                                    </span>
                                </button>
                                </td>
                              </tr>
                                ';
                            }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- // Main Content -->