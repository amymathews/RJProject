var startTime, endTime;

function start() {
  startTime = new Date().getTime();
  tottime(startTime);
};

function end() {
  endTime = new Date().getTime();
  tottime(endTime);
}

function tottime(startTime,endTime){
    alert("st", startTime);
    alert("et", endTime);
    var time = startTime-endTime;
    alert(time);
}