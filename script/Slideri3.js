var i=0;
var imgArray=[
"img/2faced.jpeg",
"img/OIP.jpg",
"img/O2jpg.jpg",
"img/OIP3.png"
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