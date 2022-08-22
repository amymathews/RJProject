var timeflag = 0;

function start() {

if( timeflag == 0){
  const startTime = new Date();
  let currhour = startTime.getHours();
  let currmin = startTime.getMinutes();
  let currsec = startTime.getSeconds();
  console.log("hour" + currhour)
  console.log("minute" + currmin);
  console.log("second" + currsec);
}

    if( timeflag == 1) {
        const endTime = new Date();
        let endhour = endTime.getHours();
        let endmin = endTime.getMinutes();
        let endsec = endTime.getSeconds();
        console.log("hour" + endhour)
        console.log("minute" + endmin);
        console.log("second" + endsec);
        let result = endmin - currmin;
        console.log("minutes elapsed" + result);
        
    }
}
    function switchflag(){
        timeflag = 1;
        start();
    }
