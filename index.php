<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Record Audio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Audio Recording With WebAudioRecorder.js</h1>
        <div style="max-width: 28em;">
            <p>Convert recorded audio to:</p>
            <select id="encodingTypeSelect">
                <option value="wav">Waveform Audio (.wav)</option>
                <option value="mp3">MP3 (MPEG-1 Audio Layer III) (.mp3)</option>
                <option value="ogg">Ogg Vorbis (.ogg)</option>
            </select>
            <div id="controls">
                <button id="recordButton">Record</button>
                <button id="stopButton" disabled>Stop</button>
            </div>
            <div id="formats"></div>
            <pre>Log</pre>
            <pre id="log"></pre>
            
            <pre>Recordings</pre>
            <ol id="recordingsList"></ol>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/WebAudioRecorder.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>