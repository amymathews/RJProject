var timeflag = 0;

function start() {

if( timeflag == 0){
  var startTime = new Date();
  var minute = startTime.getMinutes();
  console.log("starttime" + startTime);
  
}

    if( timeflag == 1) {
        var endTime = new Date();
        let endhour = endTime.getHours();
        let endmin = endTime.getMinutes();
        let endsec = endTime.getSeconds();
        var mintuend = endTime.getMinutes();
        console.log("endtime " + endTime);
        var result = Math.abs(endTime-startTime)/36e5;


        console.log("minutes elapsed" + result);
        
    }
}
    function switchflag(){
        timeflag = 1;
        start();
    }
