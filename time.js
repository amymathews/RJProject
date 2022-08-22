

function start() {
  const startTime = new Date();
  const current = startTime.getMinutes();
  alert(current);

  
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