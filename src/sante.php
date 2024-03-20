<!-- UTILISATION DE L'API DE YOUTUBE AVEC PHP -->
<?php
include('navbar.php');
// Cle de l'API
$apiKey="AIzaSyBfOP2M8RLO7yH25GsuxNeHWKzJAS04_BA";
// ID de la chaine
$channelId="UCv6qHPwghGsyOfzEYZXcfKg";
$url="https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&parts=snippet.id&order=date&maxResults=10";
// Recuperation des donnees
$response= file_get_contents($url);
// Conversion des donnees en tableau
$data=json_decode($response);
// Affichage
foreach($data->items as $row){
    $region=$data->regionCode;
    $videoId=$row->id->videoId;
    $videoTitle=$row->id->kind;
    //echo "<h1 style='color:white;background-color:gray;text-align:center;margin-top:5%;'>Match terminé</h1>";
    echo"<div style='margin-top:10%'>
    <iframe style='aspect-ratio:16/9;width:90%;margin:auto;display:block;margin-bottom:2%;border-color:blue;margin-top:2%;' src='https://www.youtube.com/embed/$videoId' frameborder='40' allowfullscreen></iframe>
        </div>
        ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sante Mag</title>
</head>
<body style='background-color:gray;'>
</body>
</html>
<script>
    let datas= <?=json_encode($data)?>;
    console.log(datas);
</script>