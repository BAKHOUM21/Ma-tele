<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Ma tele</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand text-danger" href="index.php">Ma tele</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul></ul>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Canal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bbc.php">BBC</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Autres chaines
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="tfm.php">TFM</a></li>
                <li><a class="dropdown-item" href="marodi.php">Marodi</a></li>
                <li><a class="dropdown-item" href="sante.php">Sante</a></li>
                <li><a class="dropdown-item" href="novelas.php">Novelas</a></li>
              </ul>
            </li>
           
          </ul>
         
          <button id='fermer'><i class="fa fa-power-off ml-1" aria-hidden="true"  onclick="fermer()"></i></button>
        </div>
        
      </div>
    </nav>
    
    <!-- End Example Code -->
  </body>
</html>
<script>
  let x=document.querySelectorAll("#fermer");
  function fermer(){
    x.forEach(elt=>{
      window.close();
    });
  }
 
</script>