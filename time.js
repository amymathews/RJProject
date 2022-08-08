var startTime, endTime;

function start() {
  startTime = new Date().getTime();
  alert("st", startTime);

  
};

function end() {
  endTime = new Date().getTime();
  alert("et", endTime);

}

function tottime(startTime,endTime){
    // alert("st", startTime);
    // alert("et", endTime);
    var time = startTime-endTime;
    alert(time);
}