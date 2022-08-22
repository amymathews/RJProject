var timeflag = 0;

function start() {

if( timeflag == 0){
  const startTime = new Date();
  const currhour = startTime.getHours();
  const currmin = startTime.getMinutes();
  const currsec = startTime.getSeconds();
  console.log("hour" + currhour)
  console.log("minute" + currmin);
  console.log("second" + currsec);
}

    if( timeflag == 1) {
        const endTime = new Date();
        const endhour = endTime.getHours();
        const endmin = endTime.getMinutes();
        const endsec = endTime.getSeconds();
        console.log("hour" + endhour)
        console.log("minute" + endmin);
        console.log("second" + endsec);
        const finalmin = currmin-currsec;
        console.log("minutes elapsed" + finalmin);
        
    }
}
    function switchflag(){
        timeflag = 1;
        start();
    }
