<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>PRT Stream</title>

<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css"/>

<style>
html,body{
    margin:0;
    background:#000;
    width:100%;
    height:100%;
    overflow:hidden;
}
#player{
    width:100%;
    height:100vh;
}
</style>
</head>
<body>

<video id="player" controls autoplay playsinline>
    <source src="proxy.php" type="video/mp4">
</video>

<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>

<script>
new Plyr('#player', {
    fullscreen: { enabled: true },
    controls: [
        'play-large',
        'play',
        'progress',
        'current-time',
        'mute',
        'volume',
        'settings',
        'pip',
        'airplay',
        'fullscreen'
    ]
});
</script>

</body>
</html>
