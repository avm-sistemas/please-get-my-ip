<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: *, X-Requested-With');
$jsonObj = '{ "ip": "' .$_SERVER['REMOTE_ADDR'].'" } '; 
   //echo $_SERVER['REMOTE_ADDR']; 
echo $jsonObj;
?>

<?php /*
<!DOCTYPE html><html lang="en">
<head>
  <meta charset="utf-8">
  <title>MEU IP</title>
  <base href="/">
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta http-equiv="CACHE-CONTROL" content="NO-CACHE" />
  <meta http-equiv="CONTENT-LANGUAGE" content="en-GB,en-US,pt-BR,pt-PT,fr" />
  <meta http-equiv="PRAGMA" content="NO-CACHE">
  <meta name="AUTHOR" content="Andre Mesquita" />  
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="Andre Mesquita,Meu IP" />
  <meta name="description" content="Utilitário simples que exibe o próprio IP." />
  <meta name="twitter:widgets:theme" content="dark" />
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <meta property="og:site_name" content="Meu IP" />
  <meta property="og:type" content="internet protocol" />
  <meta property="og:title" content="Meu IP" />
  <meta property="og:url" content="https://ip.andremesquita.com/" />
  <meta property="og:description" content="Utilitário simples que exibe o próprio IP" />
  <meta property="og:image" content="https://www.andremesquita.com/wp-content/uploads/2020/02/20191224_100525.jpg" />  
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NCS6X6F75L"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-NCS6X6F75L');
  </script>  
</head>
<body><?php echo $_SERVER['REMOTE_ADDR']; ?></body></html>
*/