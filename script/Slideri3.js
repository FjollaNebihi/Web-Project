var i=0;
var Array=[
"img/2faced.jpeg",
"img/OIP.jpg",
"img/O2jpg.jpg",
"img/OIP3.png"
];

function FotoTjeter2(){
  document.getElementById('slideshow2').src=Array[i];
  if(i < Array.length -1){
    i++;
  }else{
    i=0;
 
  }
}
document.body.addEventListener('load',FotoTjeter2()); 