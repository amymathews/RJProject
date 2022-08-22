var timeflag = 0;
var startTime;
var result = 0;
var currminGlobal = 0;
function start() {

if( timeflag == 0){
  console.log("flag is 0");
  startTime = new Date();
  currminGlobal = startTime.getMinutes();
  console.log("currminGlobal in flag 0: " + currminGlobal);

//   var currmin = parseInt(startTime.getMinutes());
  
}
if(timeflag == 1){
    endtime(currminGlobal);
}
}

function endtime(a){
    console.log("a: " + a)
    end = new Date();
    var endmin = end.getMinutes();
    result = endmin - a;
    console.log("result: " + result);

}
function switchflag(){
    console.log("in the switch");
    timeflag = 1;
    start();
}
