var i=0;
var imgArray=[
 "img/R (1).png",
 "img/R (2).png",
 "img/R.png",
 "img/R (3).png"
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