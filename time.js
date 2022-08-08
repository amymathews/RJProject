var startTime, endTime;

function start() {
    alert("here at start!");
  startTime = new Date();
  alert(startTime);
};

function end() {
    alert("here at end");
  endTime = new Date();
  var timeDiff = endTime - startTime; //in ms
  // strip the ms
  timeDiff /= 1000;
  alert(timeDiff/1000);

  // get seconds 
  var seconds = Math.round(timeDiff);
  console.log(seconds + " seconds");
}