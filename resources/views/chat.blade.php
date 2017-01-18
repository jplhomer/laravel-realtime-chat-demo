<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chatroom</title>

        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="app">
            <h1>Chatroom</h1>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="addMessage"></chat-composer>
        </div>
        <script src="js/app.js" charset="utf-8"></script>
    </body>
</html>
