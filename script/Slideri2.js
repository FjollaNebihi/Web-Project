var i=0;
var img=[
 "img/R (1).png",
 "img/R (2).png",
 "img/R.png",
 "img/R (3).png"
];

function FotoTjeter(){
  document.getElementById('slideshow1').src=img[i];
  if(i < img.length -1){
    i++;
  }else{
    i=0;
 
  }
}
document.body.addEventListener('load',FotoTjeter());