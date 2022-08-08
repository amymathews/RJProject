var startTime, endTime;

function start() {
  startTime = performance.now();
  tottime(startTime);
};

function end() {
  endTime = performance.now();
  tottime(endTime);
}

function tottime(startTime,endTime){
    alert("st", startTime);
    alert("et", endTime);
    var time = startTime-endTime;
    alert(time);
}