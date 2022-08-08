var startTime, endTime;

function start() {
  startTime = new Date().getTime();
  alert(startTime);

  
};

function end() {
  endTime = new Date().getTime();
  var time = startTime-endTime;
  alert(time);

}

// function tottime(){
//     alert(startTime);
//     alert(endTime);
//     var time = startTime-endTime;
//     alert(time);
// }