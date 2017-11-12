<!--
<script>
  window.onload = function() {
  alert("Loaded");
    if (window.jQuery) {  
         //jQuery is loaded  
        alert("Yeah!");
    } else {
         //jQuery is not loaded
        alert("Doesn't Work");
    }
}
</script>
-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <jdoc:include type="head" />
    <!--    <link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get(' googleFontName ');?>:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />-->
    <style type="text/css">
      p {
        font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName'));?>', sans-serif;
      }
    </style>
    <!--[if lt IE 9]>
  <script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
  <![endif]-->
  </head>