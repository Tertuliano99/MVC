<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="=IPVX">
    <meta name="description" content="<?php echo $this->getDescription()?>">
    <meta name="keywords" content="<?php echo $this->getKeywords()?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . '/adminx.css' ?>">
    <title><?php echo $this->getTitle()?></title>
</head>

<body>
    <div class="adminx-container">
        <?php
        echo $this->addMain()
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="<?php echo DIRJS . '/vendor.js';?>"></script>
    <script src="<?php echo DIRJS . '/adminx.js';?>"></script>
    <script src="<?php echo DIRJS . '/adminx.vanilla.js';?>"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <!--<script src="https://unpkg.com/sweetalert@2.0.4/dist/sweetalert.min.js"></script>-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        function deleteItem(valor){
          swal({
                  title: "Tem certeza?",
                  text: "Estes registos e seus detalhes serao eliminado para sempre!",
                  icon: "warning",
                  buttons: ["Cancelar","Sim"],
                 // dangerMode: true,
                })
                .then((value) => {
                  if (value) {
                    //alert(valor)
                    var url='delete/'+valor
            $.ajax(
                {
                    url:url,
                    type:"GET",
                    success:function(dataResult){
                        var data =JSON.parse(dataResult)
                        console.log(data.status)
                     
                       if(data.status==200){
                        window.location.reload();
                       }else if(data.statusCode==201){

                       }
                       
                    }
                })

              };
                });

              }

        function getFormacao(){
            var curso = document.getElementById("curso").value;
            var url="formacoes/"+curso;
            $.ajax(
                {
                    url:url,
                    type:"GET",
                    success:function(dataResult){
                        var data =JSON.parse(dataResult)
                        console.log(data.status)
                        $('#formacoes').empty();
                       if(data.status==200){
                        data.formacoes.forEach(element=>{
                            console.log(element)
                            $('#formacoes').append(
                                `<option value="${element.id}">${element.designacao}</option>`);
                        });
                       }else if(data.statusCode==201){

                       }
                       setTimeout(()=>{
                        $("#success").hide();
                       },5000);
                    }
                })
        }
    </script>


<script>
      $(document).ready(function() {
        var table = $('[data-table]').DataTable({
          "columns": [
            null,
            null,
            null,
            null,
            null,
            { "orderable": false }
          ]
        });

        /* $('.form-control-search').keyup(function(){
          table.search($(this).val()).draw() ;
        }); */
      });
</script>
<script>
      $(document).ready(function() {
        var table = $('[data-table-7]').DataTable({
          "columns": [
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            { "orderable": false }
          ]
        });

        /* $('.form-control-search').keyup(function(){
          table.search($(this).val()).draw() ;
        }); */
      });
</script>
</body>

</html>