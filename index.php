<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">

    <title>Nexmo</title>
</head>
<body>
    <form action="send.php" method="get">
        <div>
            <label for="api_key">API Key</label>
            <input type="text" id="api_key" name="api_key" placeholder="*******" required>
        </div>
        <div>
            <label for="api_secret">API Secret</label>
            <input type="text" id="api_secret" name="api_secret" placeholder="***************" required>
        </div>
        <div>
            <label for="from">From (number or alphanumeric sender ID)</label>
            <input type="text" id="from" name="from" placeholder="?0651000000 or BOURSORAMA" required>
        </div>
        <div>
            <label for="to">To (prepended with 33)</label>
            <input type="text" id="to" name="to" placeholder="33651000000" required>
        </div>
        <div>
            <label for="message">Message</label>
            <input type="text" id="message" name="message" required>
        </div>
        <button type="submit">Send</button>
    </form>
</body>
</html>