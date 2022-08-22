

function start() {
  const startTime = new Date();
  const current = startTime.getMinutes()*60 + startTime.getSeconds();
  console.log(current);

  
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