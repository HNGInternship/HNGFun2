var h = window.innerHeight;
$('.page-overlay').css('height',h);
var al = 0;
function progressSim(){
  document.querySelector('.page-overlay>.text>p').innerHTML = al+'%';
  if(al>=100){
      clearTimeout(sim);
    }
    al++;
  }
  var sim = setInterval(progressSim,50);
  $('.inside').hide();

  setTimeout(function(){
    $('.page-overlay').hide();
    $('.inside').show();
  },5500);