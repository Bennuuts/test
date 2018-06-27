<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="video.css" rel="stylesheet">
    <title>Document</title>
    <style>video {
  width: 100%;
}

.video-container {
  width: 70%;
  margin: auto;
}

.play-button {
  width: 100%;
  background: #00AA11;
  font-size: 1.5rem;
  text-align: center;
  font-family: sans-serif;
  transition: font-size 0.1s;
}
.stop-button {
  width: 100%;
  background: #AA1100;
  font-size: 1.5rem;
  text-align: center;
  font-family: sans-serif;
  transition: font-size 0.1s;
}
.play-button:hover, .stop-button:hover {
  color: #111;
  cursor: pointer;
  font-size: 1.8rem;
}

.hidden {
  display: none;
}
</style>
  </head>
  <body>
    <div class="video-container">
      <div class="play-button">
        <span>LIRE LA VIDEO</span>
      </div>
      <div class="stop-button hidden">
        <span>STOPER LA VIDEO</span>
      </div>
      <video autobuffer id="video-tag">
        <source id="mp4" src="http://grochtdreis.de/fuer-jsfiddle/video/sintel_trailer-480.mp4" type="video/mp4">
      </video>  

    </div>
  </body>
  <script>const videoElement = document.querySelector("#video-tag");

const playButton = document.querySelector(".play-button");

const stopButton = document.querySelector(".stop-button");

const sendStartRequest = () => {
	const xhttp = new XMLHttpRequest();
	xhttp.open("GET", "api.php?type=start", true);
	xhttp.send();
}

const sendPauseRequest = () => {
	const xhttp = new XMLHttpRequest();
	xhttp.open("GET", "api.php?type=stop", true);
	xhttp.send();
}

videoElement.onplay = sendStartRequest;

videoElement.onpause = sendPauseRequest;


playButton.addEventListener('click', () =>{
	playButton.classList.add("hidden");
  stopButton.classList.remove("hidden");
	videoElement.play();
});

stopButton.addEventListener('click', () =>{
	stopButton.classList.add("hidden");
  playButton.classList.remove("hidden");
	videoElement.pause();
});
</script>
</html>
