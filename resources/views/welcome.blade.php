<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('f2a962d05bd34b53b093', {
            cluster: 'ap2'
        });
        var channel = pusher.subscribe('private-orcas');
        channel.bind('App\\Events\\ExampleEvent', function (data) {
            console.log('heeeeeeeeeeey');
            alert(JSON.stringify(data));
        });
    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
</p>
</body>
