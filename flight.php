<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight Tracker</title>
  <link rel="stylesheet" href="style_flight.css">
  <link rel="stylesheet" href="style1_flight.css">

</head>

<body>
  <a href="index1.html" type="button"><button class="btn btn-outline-success " type="button">HOME</button></a>
  <div class="container" id="com">
    <!-- Search Section -->

    <d class="search-section">
      <h1>Where is my Flight <img src="https://img.icons8.com/?size=100&id=8771&format=png&color=000000" height="30px"
          alt="flight"></h1>
      <div class="input-group">
        <input type="text" id="start-city" placeholder="Enter Departure City">
        <input type="text" id="destination-city" placeholder="Enter Arrival City">
        <button id="search-btn" onclick="findFlights()">Search Flights</button>
      </div>

      <!-- Results Section (Main Page) -->
      <div class="results-section" id="results-page">
        <!-- <h2> --- Available Flights --- </h2> -->
        <div id="flights-list" class="flights-container"></div>
      </div>

  </div>
  <!-- Flight Details Section (Details Page) -->
  <div class="details-section" id="details-page" style="display: none;">
    <button id="back-btn">Back to Flights</button>
    <button id="send-btn" onclick="send()">Send TO ME</button><br><br>
    <button type="click" onclick="show()" class="small">Check More</button>




    <h2><u>Flight Details</u></h2>

    <div id="flight-details"></div>
  </div>
  </div>


  <div id="conto"></div>

  <script src="script.js"></script>
  <script>
    <?php
    $data = $_POST['data'];
    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client;
    $sid = "AC9a5563502b08a5583f1d49a32e4a9c24";
    $token = "7d21a7e7dead33715538405bb75e2a94";
    $client = new Client($sid, $token);
    $message = $client->messages->create(
      +918840205753,
      [
        'from' => '+12087684633',
        'body' => $data
      ]
    );
    if ($message) {
      echo "Message Sent now";
    } else {
      echo "Something went wrong";
    }
    ?>
  </script>


</body>

</html>