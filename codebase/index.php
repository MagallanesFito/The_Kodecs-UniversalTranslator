<?php
  $dir = 'audio/';
  $handle = opendir($dir);
  while($file = readdir($handle)){
    if(is_file($dir.$file)){
      unlink($dir.$file);
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Universal Translator</title>

  <link rel="stylesheet" type="text/css" href="semantic.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <link rel="icon" type="image/png" href="http://png-3.findicons.com/files/icons/1580/devine_icons_part_2/128/mic.png" />

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="semantic.js"></script>
  <script src="homepage.js"></script>

</head>
<body id="home" style="background-color: #1b1c1d;">
  <div class="ui inverted masthead segment">
    <div class="ui page grid">
      <div class="column">
        <div class="ui inverted black menu">
          <div class="header item"><a href="index.php">Home</a></div>
          <!--<div class="right menu">
            <div class="ui mobile dropdown link item">
              Menu
              <i class="dropdown icon"></i>
              <div class="menu">
                <a class="item">Classes</a>
                <a class="item">Cocktail Hours</a>
                <a class="item">Community</a>
              </div>
            </div>
            <div class="ui dropdown link item">
              Courses
              <i class="dropdown icon"></i>
              <div class="menu">
                <a class="item">Petting</a>
                <a class="item">Feeding</a>
                <a class="item">Mind Reading</a>
              </div>
            </div>
            <a class="item">Library</a>
            <a class="item">Community</a>
          </div> -->
        </div>
        <!-- <img src="images/cat.png" class="ui medium image"> -->
        <div class="ui hidden transition information">
          <h1 class="ui inverted header">
            Welcome to the future
          </h1>
          <h3 class="ui inverted header">Universal translator: breaking all language barriers. This is a Web App which translate everything you say to a foreign language. . .  Let's try it out!</h3>
          <!--<div class="large basic inverted animated fade ui button">
            <div class="visible content">Come to ICU 2013</div>
            <div class="hidden content">Register Now</div>
          </div> -->
          <br /><br />
        </div>
      </div>
    </div>
  </div>
  <div class="ui vertical feature segment">
    <div class="ui centered page grid">
      <div class="fourteen wide column">
        <div class="ui two column center aligned stackable divided grid">
          <div class="column">
            <div class="ui icon header">
              <img src="https://cdn3.iconfinder.com/data/icons/linecons-free-vector-icons-pack/32/world-256.png" width="50" height="50"><br>
              About
            </div>
            <p>This project was created by <a href="https://twitter.com/FragosoAdolfo" target="_blank">Adolfo Fragoso</a> from The_Kodecs team for the Global #Hackathon.</p>
            
            <div class="ui icon header">How it works?</div>
            <p>First of all, select the input and the output languages, then just click on the microphone button to start recording. When you finish, click on the button again to stop. Then click on the "Translate" button from below.</p>
          </div>




          <!--HOW IT WORKS? -->
          <div class="column">
            <h2 class="ui black header">Try it out!</h2>

            <!--BOTON DE GRABAR -->
            <div class="small basic red animated fade ui button">
              <div class="visible content"><img src="http://png-3.findicons.com/files/icons/1580/devine_icons_part_2/128/mic.png" width="30" height="30"></div>
              <a id="start_button" onclick="startDictation(event)" style="color: red;" class="hidden content">Start/Stop</a>
            </div><br>
            <!--BOTON DE GRABAR -->


            <!--FORM -->
            <div class="ui form">
              <form action="text.php" method="post">
                <div class="field">
                  <label>User Text</label>
                  <textarea type="text" id="final_span" class="final" rows="4" name="words"></textarea>
                </div>

                <label>Select the input languaje</label>
                <select id="idiomas" name="idiomas" class="ui selection dropdown">
                  <div class="menu">
                  <option value="en-US">English (United States)
                  <option value="en-GB">English (United Kingdom)
                  <option value="en-AU">English (Australia)
                  <option value="en-CA">English (Canada)
                  <option value="es-MX">Español (México)
                  <option value="es-ES">Español (España)
                  <option value="eu-ES">Euskara
                  <option value="fr-FR">Français
                  <option value="gl-ES">Galego
                  <option value="hr_HR">Hrvatski
                  <option value="zu-ZA">IsiZulu
                  <option value="is-IS">Íslenska
                  <option value="it-IT">Italiano
                  <option value="hu-HU">Magyar
                  <option value="nl-NL">Nederlands
                  <option value="nb-NO">Norsk bokmål
                  <option value="pl-PL">Polski
                  <option value="pt-BR">Português (Brasil)
                  <option value="pt-PT">Português (Portugal)
                  <option value="ro-RO">Română
                  <option value="sk-SK">Slovenčina
                  <option value="sv-SE">Svenska
                  <option value="tr-TR">Türkçe
                  <option value="bg-BG">български
                  <option value="ru-RU">Pусский
                  <option value="sr-RS">Српски
                  <option value="ko-KR">한국어
                  <option value="cmn-Hans-CN">中文 (普通话 (中国大陆))
                  <option value="cmn-Hans-HK">中文 (普通话 (香港))
                  <option value="cmn-Hant-TW">中文 (中文 (台灣))
                  <option value="ja-JP">日本語
                  </div>
                </select><br /><br />

                <label>Select the output languaje</label>
                <select name="idiomas2" class="ui selection dropdown">
                  <div class="menu">
                  <option value="en-US">English (United States)
                  <option value="en-GB">English (United Kingdom)
                  <option value="en-AU">English (Australia)
                  <option value="en-CA">English (Canada)
                  <option value="es-MX">Español (México)
                  <option value="es-ES">Español (España)
                  <option value="eu-ES">Euskara
                  <option value="fr-FR">Français
                  <option value="gl-ES">Galego
                  <option value="hr_HR">Hrvatski
                  <option value="zu-ZA">IsiZulu
                  <option value="is-IS">Íslenska
                  <option value="it-IT">Italiano
                  <option value="hu-HU">Magyar
                  <option value="nl-NL">Nederlands
                  <option value="nb-NO">Norsk bokmål
                  <option value="pl-PL">Polski
                  <option value="pt-BR">Português (Brasil)
                  <option value="pt-PT">Português (Portugal)
                  <option value="ro-RO">Română
                  <option value="sk-SK">Slovenčina
                  <option value="sv-SE">Svenska
                  <option value="tr-TR">Türkçe
                  <option value="bg-BG">български
                  <option value="ru-RU">Pусский
                  <option value="sr-RS">Српски
                  <option value="ko-KR">한국어
                  <option value="cmn-Hans-CN">中文 (普通话 (中国大陆))
                  <option value="cmn-Hans-HK">中文 (普通话 (香港))
                  <option value="cmn-Hant-TW">中文 (中文 (台灣))
                  <option value="ja-JP">日本語
                  </div>
                </select><br /><br />

                <input type="submit" value="Translate" class="ui blue right labeled button">
              </form>

            </div><!--FORM -->

          </div><!--HOW IT WORKS? -->



          
        </div>
      </div>
    </div>
  </div>

<!--SCRIPT-->
<script type="text/javascript">
var final_transcript = '';
var recognizing = false;
 
if ('webkitSpeechRecognition' in window) {
 
  var recognition = new webkitSpeechRecognition();
 
  recognition.continuous = true;
  recognition.interimResults = true;
 
  recognition.onstart = function() {
    recognizing = true;
  };
 
  recognition.onerror = function(event) {
    console.log(event.error);
  };
 
  recognition.onend = function() {
    recognizing = false;
  };
 
  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    }
    final_transcript = capitalize(final_transcript);
    final_span.innerHTML = linebreak(final_transcript);
    interim_span.innerHTML = linebreak(interim_transcript);
    
  };
}
 
var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}
 
function capitalize(s) {
  return s.replace(s.substr(0,1), function(m) { return m.toUpperCase(); });
}
 
function startDictation(event) {
  if (recognizing) {
    recognition.stop();
    return;
  }
  var lenguaje = document.getElementById("idiomas").value;
  final_transcript = '';
  //recognition.lang = 'en-US';
  recognition.lang = lenguaje;
  recognition.start();
  final_span.innerHTML = '';
  interim_span.innerHTML = '';

}
</script>
<!--SCRIPT-->



  </body>

</html>