<?php 
if(isset($_GET)){

  $openFile = json_decode(file_get_contents('files.json'), true);
  foreach($_GET as $key => $val){
    $req = $key;
  }
  for($i=0;$i<count($openFile);$i++){
    if($openFile[$i][$req]){
      header('LOCATION: '.$openFile[$i][$req]);
    }
  }
  
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Personal URL Shortener</title>
  <meta content="" name="description">
  <meta content="" name="author">
  
  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta content="width=device-width, initial-scale=1" name="viewport">
  
  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/skeleton.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.0/styles/metro/notify-metro.min.css">

  <!-- JAVASCRIPT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.0/notify.min.js"></script>
  <script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>
  
</head>
<body>
  <div id="particles-background" class=""></div>
  <div id="particles-foreground" class=""></div>
  <div class="vertical-centered-box">
    <div class="content">
      <div class="forms">
        <form id="shrt" action="post.php" method="post">
          <label>
            <input class="url" type="url" placeholder="Shorten URL" name="url" required/>
          </label>
        </form>
      </div>
    </div>
  </div>
  <div class="gtbtn">
  <!-- Place this tag where you want the button to render. -->
    <a class="github-button" href="https://github.com/luqmanyasin/Luau/fork" data-icon="octicon-repo-forked" aria-label="Fork luqmanyasin/Luau on GitHub">Fork</a>
    <a href="" value="" class="u-pull-right addMore button-primary button">Add More Links</a>

  </div>
  <script src="scripts.js"></script>
</body>
</html>
