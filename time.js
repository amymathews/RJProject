var startTime, endTime;

function start() {
  startTime = performance.now();
};

function end() {
  endTime = performance.now();
}

function tottime(){
    var time = startTime-endTime;
    alert(time);
}