// Código para el ScrollReveal
window.sr = ScrollReveal();

let distance = '0px';

if(screen.width < 780){
  distance = '10px'
}else{
  distance = '500px'
}

sr.reveal('.reveal-left', {
  duration: 2000,
  origin: 'left',
  distance: `${distance}`,
})

sr.reveal('.reveal-right', {
  duration: 2000,
  origin: 'right',
  distance: `${distance}`,
})

sr.reveal('.form', {
  duration: 2000,
  distance: `${distance}`,
  origin: 'top'
});