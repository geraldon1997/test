/*(function(){
    var canvas = document.getElementById('canvas'),
        context = canvas.getContext('2d'),
        video = document.getElementById('video'),
        vendorUrl = window.URL || window.webkitURL;

        navigator.getMedia =    navigator.getUserMedia ||
                                navigator.webkitGetUserMedia ||
                                navigator.mozGetUserMedia ||
                                navigator.msGetUserMedia;

        navigator.getMedia({
            video : true,
            audio : false
        },function(stream){
            video.src = vendorUrl.createObjectURL(stream);
            video.play()
        },function(error){
            //an error occurred
            //error.code
        });

        video.addEventListener('play', function () {
            draw(this, context, 500,300);
        },false);

        function draw(video, context, width, height){
            context.drawImage(video,0,0,width, height);
            setTimeout(draw,10,video, context, width, height);
        }
})();*/

(function(){
    video = document.getElementById('video'),
            canvas = document.getElementById('canvas'),
            context = canvas.getContext('2d'),
            vendorUrl = window.URL || window.webkitURL;

    navigator.getMedia =    navigator.getUserMedia ||
                            navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia ||
                            navigator.msGetUserMedia;

    //capture video

    navigator.getMedia({
        video: true,
        audio: false
    },function(stream){
        video.src = vendorUrl.createObjectURL(stream);
        video.play();
    },function(error){
        //an error occurred
        //error.code
    });

    document.getElementById('capture').addEventListener('click', function(){
        context.drawImage(video,0,0,400,300);
    });
})();