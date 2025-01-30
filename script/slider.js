var i=0;
var imgArray=[
  "img/slide1.jpg",
  "img/slide2.jpg",
  "img/slide3.jpg",
  "img/HudaPowder.png"
];

function ndrroImg(){
  document.getElementById('slideshow').src=imgArray[i];
  if(i < imgArray.length -1){
    i++;
  }else{
    i=0;
 
  }
}
document.body.addEventListener('load',ndrroImg());