<?php
 require_once('traducir.php');
// Convert Words (text) to Speech (MP3)
// ------------------------------------
 if($_POST['words'] == ''){
    header("Location: index.php");
    exit();
 }


// Google Translate API cannot handle strings > 100 characters
   //$words = substr($_GET['words'], 0, 100);

 //RECOJE 100 CARACTERES DE EL TEXTO LEIDO
 $words = substr($_POST['words'],0,100);
 //RECOJE EL FORMATO DE LENGUAJE
 $from = $_POST['idiomas'];
 //TOMA LOS PRIMEROS DOS CARACTERES
 $toTake = 0;
 if(strlen($from) > 5){
    $toTake = 8;
 }
 else{
    $toTake = 2;
 }
 $fromFinal = substr($from, 0, $toTake);
 //DESTINO INGLES POR DEFAULT
 $to = $_POST['idiomas2'];
 if(strlen($to) > 5){
    $toTake = 8;
 }
 else{
    $toTake = 2;
 }
 $toFinal = substr($to, 0, $toTake);

 $wordsFinal = translate($words,$fromFinal,$to);
// Replace the non-alphanumeric characters 
// The spaces in the sentence are replaced with the Plus symbol
   //$words = urlencode($_GET['words']);
 //$wordsFinal = urldecode($wordsFinal);
 $wordsFinal = urlencode($wordsFinal);

 
// Name of the MP3 file generated using the MD5 hash
   $file  = md5($wordsFinal);
  
// Save the MP3 file in this folder with the .mp3 extension 
   $file = "audio/" . $file . ".mp3";
 
// If the MP3 file exists, do not create a new request
   if (!file_exists($file)) {
    // $mp3 = file_get_contents('http://translate.google.com/translate_tts?q=' . $words);
    $mp3 = file_get_contents('http://translate.google.com/translate_tts?ie=UTF-8&tl='.$toFinal.'&q='.$wordsFinal);
     file_put_contents($file, $mp3);
   }
?>
<html>
<head>
  <title>Universal Translator | Result</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="stylesheet" type="text/css" href="semantic.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
   <link rel="icon" type="image/png" href="http://png-3.findicons.com/files/icons/1580/devine_icons_part_2/128/mic.png" />

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="semantic.js"></script>
  <script src="homepage.js"></script>
  <style>
  *{
    margin: 0px;
    padding: 0px;
  }
  body{
    text-align: center;
    background-image: url("images/bg.jpg");
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
  #previa{
    background: rgba(0,0,0,0.5);
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
  }
  #formu{
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -200px;
    width: 400px;
    min-height: 100px;
  }
</style>
</head>
<body>
  
  <div id="previa">
   <div id="formu">
   
     <audio controls="controls" autoplay="autoplay">
    <source src="<?php echo $file; ?>" type="audio/mp3" />
      </audio><br /><br />
       <div class="ui inverted animated button button">
      <div class="visible content">Back</div>
      <a href="index.php" class="hidden content"><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-left-128.png" width="20" height="20"></a>
  </div>
   </div>
  </div>




</body>
</html>

