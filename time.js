var timeflag = 0;
var startTime;
var result = 0;
var currminGlobal = 0;
function start() {

if( timeflag == 0){
  console.log("flag is 0");
  startTime = new Date();
  currminGlobal = startTime.getMinutes();
  console.log("currmin: " + currmin);
  console.log("currminGlobal in flag 0: " + currminGlobal);

//   var currmin = parseInt(startTime.getMinutes());
  console.log("type: " + currmin);

  
}

    if( timeflag == 1) {
        console.log("curminGlobal in flag 1: " + currminGlobal);
        console.log("flag is 1");
        var endTime = new Date();
        var endmin = endTime.getMinutes();
        result = (endmin - currminGlobal);
        console.log("minutes elapsed" + result);
        
    }
    return;
}
    function switchflag(){
        console.log("in the switch");

        timeflag = 1;
        start();
    }
