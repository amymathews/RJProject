var timeflag = 0;

function start() {

if( timeflag == 0){
  var startTime = new Date();
  console.log("starttime" + startTime);
  
}

    if( timeflag == 1) {
        
        // let endhour = endTime.getHours();
        // let endmin = endTime.getMinutes();
        // let endsec = endTime.getSeconds();
        // var mintuend = endTime.getMinutes();
        var result = new Date() - startTime;
        result /= 1000;
        var seconds = Math.round(result);


        console.log("minutes elapsed" + seconds);
        
    }
}
    function switchflag(){
        timeflag = 1;
        start();
    }
