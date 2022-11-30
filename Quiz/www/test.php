<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width" />
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Css/bootstrap.min.css">
    <link rel="stylesheet" href="./customCss/2.913d2f6e.chunk.css">
    <link rel="stylesheet" href="./customCss/main.a08b3a1b.chunk.css">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-9127811-7"></script>
    <script src="./js/analytics.js"></script>
    
    <script src="./Js/jquery.min.js"></script>
    <script src="./Js/bootstrap.min.js"></script>
  <style>
    output { 
  position: absolute;
  background-image: linear-gradient(#444444, #999999);
  width: 40px; 
  height: 30px; 
  text-align: center; 
  color: white; 
  border-radius: 10px; 
  display: inline-block; 
  font: bold 15px/30px Georgia;
  bottom: 175%;
  left: 0;
  margin-left: -1%;
}
output:after { 
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-top: 10px solid #999999;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  margin-top: -1px;
}
form { 
  position: relative; 
  margin: 50px;
}
body {
  padding: 20px;
}
  </style>
</head>

<body>

  <form>
<input type="range" name="foo" min="0" max="100">
<output for="foo" onforminput="value = foo.valueAsNumber;"></output>
</form>

<form>
<input type="range" name="foo" min="0" max="100" style="width: 300px;">
<output for="foo" onforminput="value = foo.valueAsNumber;"></output>
</form>

<form>
<input type="range" name="foo" min="0" max="100">
<output for="foo" onforminput="value = foo.valueAsNumber;"></output>
</form> 
</body>
<script>
var el, newPoint, newPlace, offset;
 
// Select all range inputs, watch for change
$("input[type='range']").change(function() {

 // Cache this for efficiency
 el = $(this);
 
 // Measure width of range input
 width = el.width();
 
 // Figure out placement percentage between left and right of input
 newPoint = (el.val() - el.attr("min")) / (el.attr("max") - el.attr("min"));
  
  offset = -1;

 // Prevent bubble from going beyond left or right (unsupported browsers)
 if (newPoint < 0) { newPlace = 0; }
 else if (newPoint > 1) { newPlace = width; }
 else { newPlace = width * newPoint + offset; offset -= newPoint; }
 
 // Move bubble
 el
   .next("output")
   .css({
     left: newPlace,
     marginLeft: offset + "%"
   })
     .text(el.val());
 })
 // Fake a change to position bubble at page load
 .trigger('change');
</script>
</html>