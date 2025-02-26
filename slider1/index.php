<!doctype html>
<head>
<link rel='stylesheet' href='css/style.css'>
<script src="https://kit.fontawesome.com/7c1792080b.js" crossorigin="anonymous"></script>
</head>

<body>
<!--
algorithm behind the image slider
1. create images of same width and height
2. create html div tags for the image with same class title
3. set all the div tags under one div class container
4. set the images with same div tag using css properties, with position:absolute, top:0px;
5. add active to the first image class e.g, <div class='slider active'><img src=''> </div>
6. the div tag of the rest images called slider should be set to opacity:0;
7. set the div class active to opacity:1; visibility:visible;
8.create a javascript tag or <fieldset>
9. use the javascript document.getElementsByClassName(), add, remove, classList method to create the effect for the next and previous
options
10. use the setInterval() method to make it flow continously
............goodLuck

</fieldset>
</fieldset>




-->
<div class='all_slider'>
<div class='slider active'>
<img src='img/slider1.png' width='100%'  >
</div>

<div class='slider'>
<img src='img/slider2.jpg' width='100%' >
</div>

<div class='slider'>
<img src='img/slider3.jpg' width='100%' >
</div>

<button id='prev' class='prev' onclick='prev()'><i class='fas fa-arrow-left'> </i> </button>
<button id='next' class='next' onclick='next()'><i class='fas fa-arrow-right'> </i> </button>

<script>
setInterval(function(){
const slider = document.getElementsByClassName('slider');
if( slider[0].classList.contains('active') ){
slider[1].classList.add('active');
slider[0].classList.remove('active');
}

else if(slider[1].classList.contains('active')){
slider[2].classList.add('active');
slider[1].classList.remove('active');
}



else if(slider[2].classList.contains('active')){
slider[0].classList.add('active');
slider[2].classList.remove('active');
}


}, 5000);

</script>





<script>

function next(){
  const slider = document.getElementsByClassName('slider');
  if( slider[0].classList.contains('active') ){
  slider[1].classList.add('active');
  slider[0].classList.remove('active');
  }

  else if(slider[1].classList.contains('active')){
  slider[2].classList.add('active');
  slider[1].classList.remove('active');
  }



  else if(slider[2].classList.contains('active')){
  slider[0].classList.add('active');
  slider[2].classList.remove('active');
  }


}


</script>



<script>

function prev(){

const slider = document.getElementsByClassName('slider');
  if( slider[0].classList.contains('active') ){
  slider[2].classList.add('active');
  slider[0].classList.remove('active');
  }

  else if(slider[2].classList.contains('active')){
  slider[1].classList.add('active');
  slider[2].classList.remove('active');
  }



  else if(slider[1].classList.contains('active')){
  slider[0].classList.add('active');
  slider[1].classList.remove('active');
  }









}


</script>
