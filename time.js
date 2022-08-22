

function start() {
  const startTime = new Date();
  const current = startTime.getMinutes()*60;
  const currsec = startTime.getSeconds();
  console.log("minute" + current);
  console.log("second" + currsec);

  
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