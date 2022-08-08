

function start() {
    var startTime;
    alert("here at start!");
  startTime = new Date();
  alert(startTime);
  end(startTime)
};

function end(startTime) {

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