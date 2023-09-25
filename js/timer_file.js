const startingMinutes = 10;
let time = startingMinutes * 60;

const countdownEl = document.getElementById("countdown");

setInterval(updateCountdown, 1000);

function updateCountdown() {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;

    countdownEl.innerHTML = `${minutes}:${seconds}`;
    // if(time < 1){
    //     clearInterval(interval);
    //     document.getElementById("my_form").submit();
    // }

    time--;


}

// <?php 
// echo "const startingMinutes = document.getElementById(\"startingminutes\");
// let time = startingMinutes * 60;

// const countdownEl = document.getElementById(\"countdown\");

// setInterval(updateCountdown, 1000);

// function updateCountdown() {
//     const minutes = Math.floor(time / 60);
//     let seconds = time % 60;

//     seconds = seconds< 10 ? '0' + seconds : seconds;

//     countdownEl.innerHTML = `${minutes}: ${seconds}`;
//     time--;


// }";