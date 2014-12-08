<meta charset="utf-8">
<?php
function translate($text,$from,$to){
      $frase = urlencode($text);
      $obtener = file_get_contents('http://translate.google.es/translate_a/t?client=t&sl='.$from.'&tl='.$to.'&hl='.$from.'&sc=2&ie=UTF-8&oe=UTF-8&oc=1&otf=2&ssel=0&tsel=0&q='.$frase);
      $obtener = explode('"',$obtener,3);
      return $obtener[1];
  }  
?>