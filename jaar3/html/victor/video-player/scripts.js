var vid = document.querySelector("[data-video='video']");
var vidVolume = document.querySelector("[data-video='input-volume']");
var vidProgress = document.querySelector("[data-video='video-progress']");
var vidProgressBar = document.querySelector("[data-video='progress-bar']");

function playVid() {
    if (vid.paused) {
        vid.play();
    } else {
        vid.pause();
    }
}
function volume() {
    vid.volume = vidVolume.value;
}
function playbackRate() {
    vid.playbackRate = document.querySelector("[data-video='input-playbackRate']").value;
}
function skipReturn10s() {
    vid.currentTime = vid.currentTime - 10;
}
function skipGo25s() {
    vid.currentTime = vid.currentTime + 25;
}
function progressBarPosition() {
    var progressBarWidthPercentage = (event.clientX - (document.body.clientWidth - vidProgress.offsetWidth) / 2) / vidProgress.offsetWidth * 100;
    vidProgressBar.style.width = progressBarWidthPercentage + "%";
    vidProgressBar.style.flexBasis = progressBarWidthPercentage + "%";
    vid.currentTime = (vid.duration / 100) * progressBarWidthPercentage;
}

document.querySelector("[data-video='btn-play']").addEventListener("click", playVid);
vidVolume.addEventListener("click", volume);
vidVolume.addEventListener("mousemove", volume);
document.querySelector("[data-video='input-playbackRate']").addEventListener("click", playbackRate);
document.querySelector("[data-video='input-playbackRate']").addEventListener("mousemove", playbackRate);
document.querySelector("[data-skip='-10']").addEventListener("click", skipReturn10s);
document.querySelector("[data-skip='25']").addEventListener("click", skipGo25s);

vid.addEventListener("timeupdate", function(){
    vidProgressBar.style.width = (vid.currentTime / vid.duration) * 100 + "%";
    vidProgressBar.style.flexBasis = (vid.currentTime / vid.duration) * 100 + "%";
});

vidProgress.addEventListener("mousedown", function(){
    progressBarPosition();
    vidProgress.onmousemove = function() {
        progressBarPosition();
    }
});

vidProgress.addEventListener("mouseup", function() {
    vidProgress.onmousemove = null;
});