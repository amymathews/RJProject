var timeflag = 0;

function start() {

if( timeflag == 0){
  var startTime = new Date();
  var currhour = startTime.getHours();
  var currmin = startTime.getMinutes();
  var currsec = startTime.getSeconds();
  var val = valueOf(currmin);
  console.log("hour" + currhour)
  console.log("minute" + currmin);
  console.log("second" + currsec);
}

    if( timeflag == 1) {
        var endTime = new Date();
        var endhour = endTime.getHours();
        var endmin = endTime.getMinutes();
        var endsec = endTime.getSeconds();
        console.log("hour" + endhour)
        console.log("minute" + endmin);
        console.log("second" + endsec);
        var endval = valueOf(endmin);
        var finalmin = endval-val;
        console.log("minutes elapsed" + finalmin);
        
    }
}
    function switchflag(){
        timeflag = 1;
        start();
    }
