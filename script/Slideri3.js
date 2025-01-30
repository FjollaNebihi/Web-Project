var i=0;
var imagesArray=[
"img/2faced.jpeg",
"img/OIP.jpg",
"img/O2jpg.jpg",
"img/OIP3.png"
];

function FotoTjeter(){
  document.getElementById('slider').src=imagesArray[i];
  if(i < imagesArray.length -1){
    i++;
  }else{
    i=0;
 
  }
}
document.body.addEventListener('load',FotoTjeter());