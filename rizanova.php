<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parser RizaNova</title>
</head>
<body>
<?php
for($y = 1; $y<3;$y++)
{
    $url = file_get_contents("https://rizanova.uz/music/all?page=$y");

    $res = explode('<script id="__NEXT_DATA__" type="application/json">',$url);
    $res = explode('</script>',$res[1]);
    $dd = json_decode($res[0],1);
    $res = $dd["props"]["pageProps"]["data"]["models"];

    for($i = 0; $i<12;$i++)
    {
        echo $res[$i]["author"]["name"] ." - ". $res[$i]["name"] ." |  ". $res[$i]["filename_mp3"]."<br />";
    }
}
?>  
</body>
</html>