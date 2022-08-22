var timeflag = 0;
var startTime;
var result;

function start() {

if( timeflag == 0){
  startTime = new Date();
  console.log("starttime" + startTime);
  
}

    if( timeflag == 1) {
        
        // let endhour = endTime.getHours();
        // let endmin = endTime.getMinutes();
        // let endsec = endTime.getSeconds();
        // var mintuend = endTime.getMinutes();
        result = Math.round(((new Date()).getTime() - startTime.getTime()) / 1000);        

        console.log("minutes elapsed" + result);
        
    }
}
    function switchflag(){
        timeflag = 1;
        start();
    }
