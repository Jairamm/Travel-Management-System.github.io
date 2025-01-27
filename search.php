<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="search.css">
</head>

<body>
    <div class="container">
        <form action="sendable.php">
            <input type="text" placeholder="Search anything" class="search-box" id="input-box" name="searchable"
                autocomplete="off">
            <input type="submit" value="search" id="send">
        </form>
        <div id="result-box">
        </div>
    </div>
    <script src="Js/search.js"></script>
</body>

</html>