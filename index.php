<?php
include("auth.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous" >

    <title>Método Post</title>
</head>
<body>
    
    
    <div class="container d-flex align-items-center justify-content-center mt-5">
        
       <div class="card card-container row">
           
            <div class="card-body">

                
                <img class="card-img-top" src="logo.png" style="width: 16rem;" />
                
                <form action=""  method="post">
                   
                    <div class="form-group mt-3">
                        <p><input type="email" name="emailForm" placeholder="Digite seu email"></p>
                    </div>
                        
                    <div class="form-group mt-3">
                        <p><input type="password" name="passwordForm" placeholder="Digite sua senha"></p>
                    </div>  
                        <p><button type="submit"  class="btn btn-lg btn-secondary btn-block btn-sigin" name="enviar">Entrar</button> </p>
                    
                </form> 

            </div>

        </div>

    </div>

</body>
</html>