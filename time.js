var timeflag = 0;

function start() {

if( timeflag == 0){
  var startTime = new Date();
  console.log("starttime" + startTime);
  
}

    if( timeflag == 1) {
        var endTime = new Date();
        let endhour = endTime.getHours();
        let endmin = endTime.getMinutes();
        let endsec = endTime.getSeconds();
        console.log("hour" + endhour);
        console.log("minute" + endmin);
        console.log("second" + endsec);
        var result = (endTime - startTime)/1000;
        console.log("minutes elapsed" + result);
        
    }
}
    function switchflag(){
        timeflag = 1;
        start();
    }
