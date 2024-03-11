

<!-- UTILISATION DE L'API DE YOUTUBE AVEC PHP -->
<?php
include('navbar.php');
// Cle de l'API
$apiKey="d0b6eab5f03efd677421fd9761dbb278";
// ID de la chaine
$channelId="UCv6qHPwghGsyOfzEYZXcfKg";
// $url="https://www.themoviedb.org/documentation/api/search?key=$apiKey";
$url="https://api.themoviedb.org/3/movie/550?api_key=d0b6eab5f03efd677421fd9761dbb278&overview=Jack Reacher";
// Recuperation des donnees
$response= file_get_contents($url);
// Conversion des donnees en tableau
$data=json_decode($response);
// var_dump($data);
// Affichage

    $homepage=$data->homepage;
    foreach($data->production_companies as $row){
        $logo_path=$row->logo_path;
        $name=$row->name;
    }
    
    $title=$data->title;
    //var_dump($name);
    // $name=$data->id->name;
    echo "<h1 style='color:white;background-color:gray;text-align:center;margin-top:5%;'>Companies: $name </br>Title: $title</h1>";
    echo"<div style='margin-top:10%'>
    <iframe width='760' style='aspect-ratio:16/9;margin:auto;display:block;margin-bottom:2%;border-color:blue;margin-top:2%;margin-bottom:2%;' src='$homepage' frameborder='40' allowfullscreen></iframe>
        </div>
        ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SANTE et Bien ETRE</title>
</head>
<body style='background-color:gray;'>
</body>
</html>
<script>
    let datas= <?=json_encode($data)?>;
    console.log(datas);
  
</script>