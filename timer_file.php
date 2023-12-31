===========================HTML======================
<div class="countdown">
  <h2>Deadline Date:</h2>
    <input type="text" placeholder="2016-09-11 13:14:00" id="endtime" value=""> 
  <button class="btn" id="start-count">Start</button>
  <h1>Countdown：</h1>
  <div class="countdown-content">
   <span id="day"></span> Days
    <span id="hour"></span> Hours
    <span id="minute"></span> Minutes
    <span id="second"></span> Seconds
  </div>
   
  
  
  <br>
  <br>
  <br>
  <br>
  <footer>&copy; 2016 Ana Robakidze</footer>
</div>

=====================CSS======================
body{
	text-align: center;
	background: #232425;
  font-family: sans-serif;
  font-weight: 100;
}

h1{
  color: #fff;
  font-weight: 100;
  font-size: 30px;
  margin: 40px 0px 20px;
}

h2{
  color: #fff;
  font-weight: 100;
  font-size: 20px;
  text-align: center;
}
	.countdown{
			font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 20px;
	}
	#endtime{
		padding: 5px;
		width: 200px;
		font-size: 12px;
	}
	.countdown-content{
		padding: 10px;
	border-radius: 3px;
	background: #4c4c4c;
	display: inline-block;
	}
	.countdown-content span{
		padding: 15px;
	border-radius: 3px;
	background: #c00;
	display: inline-block;
	}
	.btn{
		display: block;
		padding: 3px 20px;
		margin:10px auto;
		outline: none;
		border: none;
		background: #c00;
		font-size: 16px;
		font-weight: bold;
		color: #232425;
		cursor: pointer;
	}
	a{
  display: inline-block;
  color: #fff;
  font-size: 20px;
  padding: 20px;
  background: #fff;;
  border-radius: 10px;
  text-decoration: none;
}

a:hover{
  background: #fff;;
}
	.btn:hover{
		background: #c00;
	}
	.btn-disabled{
        cursor: default;
        pointer-events: none;
        background: #ccc;
	}
.smalltext{
	padding-top: 5px;
	font-size: 16px;
}

footer {
 font-size: 12px;
  clear: both;
  text-align: center;
  margin-top: auto;
  margin-right: auto;
  margin-bottom: auto;
  margin-left: auto;

        }

=============================JS========================
var timer = null;
var end;
var toZero;
var btn = document.getElementById("btn");
var oDay = document.getElementById("day");
var oHour = document.getElementById("hour");
var oMinute = document.getElementById("minute");
var oSecond = document.getElementById("second");
var endtime = document.getElementById("endtime");
var startBtn = document.getElementById("start-count");
toZero = oDay.innerHTML = oHour.innerHTML = oMinute.innerHTML = oSecond.innerHTML = "00";
startBtn.onclick = function() {
  end = endtime.value;
  if (!end) {
    alert("Please enter date！")
    return false;
  };
  countDown();
  timer = setInterval(countDown, 1000);
}

function countDown() {　　
  var timedate = new Date(Date.parse(end.replace(/-/g, "/"))); 
  var now = new Date(); 
  var date = (timedate.getTime() - now.getTime()) / 1000; 
  var day = Math.floor(date / (60 * 60 * 24));
  var _hour = date - day * 60 * 60 * 24;
  var hour = Math.floor(_hour / (60 * 60));
  var _minute = _hour - hour * 60 * 60;
  var minute = Math.floor(_minute / (60));
  var _second = _minute - minute * 60;
  var second = Math.floor(_second);

  function toDou(n) {
      if (n < 10) {
        return '0' + n;
      } else {
        return '' + n;
      }
    } 
  if (date > 0) {
    oDay.innerHTML = toDou(day);
    oHour.innerHTML = toDou(hour);
    oMinute.innerHTML = toDou(minute);
    oSecond.innerHTML = toDou(second);
  } else {
    btn.className = "";
    btn.className = "btn";
    btn.onclick = function() {
      alert("oops")
    }
    endtime.value = "";
    clearInterval(timer);
    toZero;
  }
}        