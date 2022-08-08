var startTime, endTime;

function start() {
    alert("here at start!");
  startTime = new Date();
};

function end() {
    alert("here at end");
  endTime = new Date();
  var timeDiff = endTime - startTime; //in ms
  // strip the ms
  timeDiff /= 1000;

  // get seconds 
  var seconds = Math.round(timeDiff);
  console.log(seconds + " seconds");
}