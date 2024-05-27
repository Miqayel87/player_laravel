<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    <div class="video_container">
        <video id="video" src="{{ asset('large.mp4') }}" loop>

        </video>
        <button class="paused" id="play">
            <div id="icon">
                <img class="icon" src="{{asset('icons/play.png')}}" alt="">
            </div>
        </button>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>

    function videoAction(){
        $('#icon').empty();
        if ($('#video')[0].paused) {
            $('#video').trigger('play')
            $('#icon').append(`<img class="icon" src="{{asset('icons/pause.png')}}" alt="">`)
        } else {
            $('#video').trigger('pause');
            $('#icon').append(`<img class="icon" src="{{asset('icons/play.png')}}" alt="">`)
        }
    }

    $('#play').click(videoAction)
    $('#video').click(videoAction)
</script>

</html>
