var startTime, endTime;

function start() {
    alert("here at start!");
  startTime = new Date();
  alert(startTime);
};

function end() {

    alert("here at end");
  endTime = new Date();
  var timeDiff = endTime.getTime() - startTime.getTime(); //in ms
  // strip the ms
  timeDiff /= 1000;
  alert("this is the timediff", timeDiff);

  // get seconds 
  var seconds = Math.round(timeDiff);
  console.log(seconds + " seconds");
}