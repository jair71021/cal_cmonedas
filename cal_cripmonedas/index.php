<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Precio de criptomonedas</title>
  </head>
  <body>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"></h1>
          <div class="card">
            <div class="card-body">
              <form method="post" onsubmit="return calcu()" id="frm_monedas">
                <div class="row">
                  <div class="col-sm-12">
                    <label for="cantidad">Monton a gastar</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" pattern="[0-9]+">     
                  </div>
                </div>
                  
                  <hr>
                    <h3>Monedas a comprar</h3>
                      <div class="row">
                        <div class="col-sm-6">
                          <input type="radio" name="mac" id="bitcoin" value="bitcoin">
                            <label for="bitcoin"><h3>Bitcoin</h3></label>
                        </div>   
                        <div class="col-sm-6">
                          <input type="radio" name="mac" id="mana" value="mana">
                            <label for="mana"><h3>Mana</h3></label>
                        </div>                      
                        <div class="col-sm-6">
                          <input type="radio" name="mac" id="etherium" value="etherium">
                            <label for="etherium"><h3>Etherium</label>
                        </div>
                        <div class="col-sm-6">
                          <input type="radio" name="mac" id="bat" value="bat">
                          <label for="bat"><h3>Bat</label>
                        </div>
                        <div class="col-sm-6">
                          <input type="radio" name="mac" id="xrp" value="xrp">
                          <label for="xrp"><h3>xrp</h3></label>
                        </div> 
                                          
                      </div>
                          <br>
                      <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-outline-primary">Calcular</button>
                                <span class="btn btn-outline-success" onclick="limpiar()">Limpiar</span>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="Total_Pagar" class="form-control" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
