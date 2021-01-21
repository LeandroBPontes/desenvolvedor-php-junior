<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script type="text/javascript" src="jquery.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
    <!--<script src="https://code.jquery.com/jquery.js"></script>-->
   
    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    
    <!--PROJECT BY: LEANDRO BARROS PONTES -->


    <title></title>
    
  </head>
  
   <body>

    <header><!--inicio cabeçalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente ">
        <div class="container">
            <h4>Tela de Cadastramento de Usuario </h4>
                   
          </div>
      </nav>
    </header><!--Fim cabeçalho -->

    <div id="box_form">
        <h1 class="titulos ml-2"> Cadastro</h1>
    </div>

        <!--Formulario de cadastramento --- algumas alterações feitas  -->
    <form action= "cadastrar.php" method="POST" enctype="multipart/form-data" >
        <input type="text" name="nome" class="campos_cad form-control form-control-sm m-2" placeholder="Nome">

        <input type="text" minlength="14" maxlength="14" id="cpf" name="cpf" placeholder="CPF" class="campos_cad form-control form-control-sm m-2">

        <input type="date" name="data" min="1920-12-31" max="2002-01-00" class="campos_cad form-control form-control-sm m-2">

        <input type="email" name="email" class="campos_cad form-control form-control-sm m-2" placeholder="E-mail">

        <input type="tel" name="telefone" placeholder="Celular" id="celular" class="campos_cad form-control form-control-sm m-2">
            
        <input id="cep"  name="cep" class="campos_cad form-control form-control-sm m-2"  placeholder="CEP" type="text" required/>
        
        <input id="logradouro" name="logradouro" class="campos_cad form-control form-control-sm m-2"  placeholder="Logradouro" type="text" required/>
        
        <input id="numero" name="numero" class="campos_cad form-control form-control-sm m-2"  placeholder="Numero" type="text" />
        
        <input id="complemento" name="complemento" class="campos_cad form-control form-control-sm m-2"  placeholder="Complemento" type="text"/>
        
        <input id="bairro" name="bairro" type="text" class="campos_cad form-control form-control-sm m-2"  placeholder="Bairro"required/>

       

        <!-- Mascaras para alguns campos -->
        <script>
            jQuery(function($){
            $("#cpf").mask("000.000.000-00");
            $("#celular").mask("(99) 99999-9999");
            
            });
        </script>

         <!-- CAMPOS ESTADOS --- LOCALE NAO FUNCIONANDO -->
        
        
        <select name="estado" id="estados" class="m-2">
            <?php
            
            
            include "connect.php"; // CONEXAO COM O BANCO

            setlocale(LC_ALL,'pt_BR.UTF8');
           
            // CHAMADA AO BANCO, ORDENANDO OS ESTADOS PELO NOME           
            $query = mysqli_query($link, "SELECT * FROM estados ORDER BY nome ASC"); 
            
            $stmt = mysqli_prepare($link, $query);
            mysqli_stmt_execute($stmt);

            $fetchAll = mysqli_fetch_all($query, MYSQLI_ASSOC);

            foreach($fetchAll as $estados){
          
            echo '<option  name="'.$estados['nome'].'" value="'.$estados['id'].'">'.$estados['nome'].'</option>';

            }
            ?>

       </select>
       <!-- SELECT COM DISPLAY NONE - APENAS VISUALIZADO EM TEMPO DE EXECUÇÃO -->

       <select id="cidades" name="cidades" class="ml-2 mt-1" style="display:none"></select>

         <!-- INICIO JQUERY COM AJAX -->

        <script>
          $("#estados").on("change", function(){
          var idEstado = $("#estados").val();
        
          $.ajax({
        
            url:'pega_cidades.php',
            type:'POST',
            data:{id:idEstado},
            beforeSend: function(){
                    $("#cidades").css({'display':'block'});
                    $("#cidades").html("Carregando...");
            },
            success: function(data)
            {
                $("#cidades").css({'display':'block'});
                    $("#cidades").html(data);
            },
            error: function(data)
            {
                $("#cidades").css({'display':'block'});
                    $("#cidades").html("Houve um erro ao carregar");
            }

        });

    });
       
</script>
<br><br>
         <!-- BOTOES FORMATADOS COM BOOTSTRAP -->
        <input type="submit" value="Cadastrar" class="ml-2 mb-2 btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-primary mb-2 "><br>

             <br>
        <?php 
        echo "<pre><a href='usuario.php'> Listar </a> <a href='cliente.php'>| Alterar </a> <a href='exclui_cliente.php'>| Excluir </a> <a href='index.php'>| Sair </a>";
        ?>
         <br>
          <br>


 </form>
    

      <!-- BIBLIOTECAS E AFINS -->
      <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
     
   
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

     
   
          
        


 