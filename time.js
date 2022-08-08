var startTime, endTime;

function start() {
  startTime = performance.now();
};

function end() {
  endTime = performance.now();
}

function tottime(){
    alert("st", startTime);
    alert("et", endTime);
    var time = startTime-endTime;
    alert(time);
}