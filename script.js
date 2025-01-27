const cityToIATA = {
  "New York": "JFK",
  "Los Angeles": "LAX",
  Chicago: "ORD",
  Houston: "IAH",
  Phoenix: "PHX",
  Philadelphia: "PHL",
  "San Antonio": "SAT",
  "San Diego": "SAN",
  Dallas: "DFW",
  "San Jose": "SJC",
  Mumbai: "BOM",
  Delhi: "DEL",
  Bengaluru: "BLR",
  Hyderabad: "HYD",
  Chennai: "MAA",
  Kolkata: "CCU",
  Ahmedabad: "AMD",
  Pune: "PNQ",
  Jaipur: "JAI",
  Lucknow: "LKO",
  Cochin: "COK",
  Goa: "GOI",
  Thiruvananthapuram: "TRV",
  Visakhapatnam: "VTZ",
  Vadodara: "BDQ",
  Nagpur: "NAG",
  Surat: "STV",
  Indore: "IDR",
  Bhopal: "BHO",
  Mysore: "MYQ",
  Coimbatore: "CJB",
  Ranchi: "IXR",
  Patna: "PAT",
  Amritsar:"ATQ",
};
const options = {
  method: "GET",
};

const getData = async (startCity, destinationCity) => {
  const startIATA = cityToIATA[startCity];
  const destinationIATA = cityToIATA[destinationCity];

  const url = `http://api.aviationstack.com/v1/flights?access_key=b8462e85a423fc247cfbce88e05b931a&dep_iata=${startIATA}&arr_iata=${destinationIATA}`;

  try {
    let response = await fetch(url, options);
    let data = await response.json();
    // console.log(data);

    // Check for valid data response
    if (data && data.data && data.data.length > 0) {
      displayFlights(data.data);
    } else {
      alert("Something Went Wrong Please Try Later ");
    }
  } catch (error) {
    console.error("Failed to fetch data:", error);
  }
};
let $message1 = ""; 
// Display the flights list on the main page
const displayFlights = (flights) => {
  const flightsContainer = document.getElementById("flights-list");
  flightsContainer.innerHTML = ""; // Clear any previous results

  flights.slice(0, 40).forEach((flight, index) => {
    const {
      flight: { number, flight_status },
      departure: { airport: depAirport, scheduled: depTime },
      arrival: { airport: arrAirport, scheduled: arrTime },
      airline: { name: airlineName },
    } = flight;

    // Create flight item with a button to view details
    const flightItem = document.createElement("div");
    flightItem.classList.add("flight-item");
    flightItem.innerHTML = `

     <center> <div>
        <strong>Flight:</strong> ${number} (${airlineName}) <span style="Color:red">${flight.flight_status}</span><br>
        </div>
        <div><strong>From:</strong> ${depAirport}</div>
        <div><strong>To:</strong> ${arrAirport}</div></center>
        <button onclick="showDetails(${index})">View Details</button>
    `;

    // Store flight data for reference
    flightItem.dataset.flightData = JSON.stringify(flight);
    flightsContainer.appendChild(flightItem);
  });
};

// Show selected flight details on the details page
const showDetails = (index) => {
  const startCity = document.getElementById("start-city").value.trim();
  const destinationCity = document
    .getElementById("destination-city")
    .value.trim();

  const flightItems = document.querySelectorAll(".flight-item");
  const selectedFlight = JSON.parse(flightItems[index].dataset.flightData);

  const {
    flight: { number },
    departure,
    arrival,
    airline: { name: airlineName },
  } = selectedFlight;

  // Toggle page views
  document.getElementById("results-page").style.display = "none";
  document.getElementById("details-page").style.display = "block";

  // Populate flight details
  const flightDetails = document.getElementById("flight-details");
  flightDetails.innerHTML = `
  <center><br>
    <strong>Flight Number:</strong> ${number} (${airlineName})<br>
    <strong>From:</strong> ${departure.airport} - ${new Date(
    departure.scheduled
  ).toLocaleString()}<br>
    <strong>To:</strong> ${arrival.airport} - ${new Date(
    arrival.scheduled
  ).toLocaleString()}<br>
  <strong> Cities : ${startCity}</strong> - - - > <strong>${destinationCity}</strong></center>
  `;

  // Prepare message for messaging app
  const $message = `
    Flight Number: ${number} (${airlineName})
    From: ${departure.airport} at ${new Date(
    departure.scheduled
  ).toLocaleString()}
    To: ${arrival.airport} at ${new Date(arrival.scheduled).toLocaleString()}
    Tickets Cities :${startCity}(${departure.iata})  --->  ${destinationCity}(${
    arrival.iata
  })
  `;
  // console.log("Tickets Booking SuccessFully Complete:", $message);

  $message1 = $message;
  
};
// Go back to the main page
const goBack = () => {
  document.getElementById("results-page").style.display = "block";
  document.getElementById("details-page").style.display = "none";
};
document.getElementById("back-btn").addEventListener("click", goBack);

// Handle the search action
function findFlights() {
  const startCity = document.getElementById("start-city").value.trim();
  const destinationCity = document
    .getElementById("destination-city")
    .value.trim();

  if (!startCity || !destinationCity) {
    alert("Please enter both departure and arrival cities.");
    return;
  }

  // Fetch and display flight data
  getData(startCity, destinationCity);
}
async function show() {
      const destinationCity = document.getElementById("destination-city").value.trim();
     const url = `https://booking-com.p.rapidapi.com/v1/hotels/locations?name=${destinationCity}&locale=en-gb`;
   const options = {
     method: "GET",
     headers: {
       "x-rapidapi-key": "bf9bc04037mshb27486fd47b92dcp12e88ajsne6fe0f68ff94",
       "x-rapidapi-host": "booking-com.p.rapidapi.com",
     },
   };
     try {
       console.log("Getting Data...");
       let response = await fetch(url, options);
       let data = await response.json();
       console.log(data);
   const imageUrl = data[0].image_url;
  //  document.getElementById("logo").src = ``;
    document.getElementById("conto").innerHTML = `
     <h3>We Suggest the Best hotel for You _ _ _ <img src='https://img.icons8.com/?size=100&id=AVe9YeyAXTql&format=png&color=000000' height='50px'> </h3>
               <div class="hotel-table-container">
                   <table class="hotel-table">
                       <thead>
                           <tr>
                               <th>${data[0].dest_type}</th>
                               <th>${data[1].dest_type}</th>
                               <th>${data[2].dest_type}</th>
                               <th>View</th>

                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>${data[0].label}</td>
                               <td>${data[1].name},</td>
                               <td>${data[2].name} , ${data[3].name} , ${data[4].name}</td>
                                <td><img src='${imageUrl}'id='logo'style='border-radius: 50%'></td>
                                </tr>
                       </tbody>
                   </table>
               </div>`;
     }
     catch (error) {
       console.error("Failed to fetch data:", error);
    }
}
function send() {
  alert("Sending ...");
   fetch("flight.php", {
     method: "POST",
     headers: {
       "Content-Type": "application/x-www-form-urlencoded", // Set header for form data
     },
     body: `data=${encodeURIComponent($message1)}`, // Send data in request body
   });
}

