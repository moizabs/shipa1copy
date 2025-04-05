<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interactive Map</title>
    <style>
        .map-container{
            width: 90%;
            margin: auto
        }
        .map-container svg {
            width: 60%;
            height: auto;
            cursor: pointer;
        }

        #svg-container-map path.hovered {
            fill: #8fc445 !important;
        }

        .tooltip {
            position: absolute;
            background-color: #062e39;
            color: white;
            padding: 5px;
            border-radius: 5px;
            font-size: 14px;
            display: none;
            opacity: 1;
        }
    </style>
</head>

<body>
    <div id="tooltip" class="tooltip"></div>
    <div class="map-container text-center py-5">
        <h4 style="color: #8fc445;">ShipA1’s Competitive Edge & Unstoppable Service from New York to California</h4>
        <p class="">Our services aren’t limited to just a couple of regions. Leaving all mediocre auto transport companies behind, 
        ShipA1 has achieved the excellence of becoming the leading vehicle shipping agency all across the USA, serving all 
        fifty states. </p>
        <div id="svg-container-map">

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch("public/frontend/images/about/usa-labels-boxes.svg")
                .then((response) => response.text())
                .then((data) => {
                    document.getElementById("svg-container-map").innerHTML = data;

                    // Tooltip ko body ke andar move kar do
                    let tooltip = document.getElementById("tooltip");
                    document.body.appendChild(tooltip);

                    document.querySelectorAll("#svg-container-map path").forEach((state) => {
                        state.addEventListener("click", function() {
                            let stateId = this.getAttribute("id");
                            if (stateId) openStateRoute(stateId);
                        });

                        state.addEventListener("mouseenter", function(event) {
                            this.classList.add("hovered");
                            const stateFullName = this.getAttribute("data-name") || this
                                .getAttribute("id") || "Unknown State";
                            // console.log(stateFullName, "stateFullName")
                            tooltip.textContent = stateFullName;
                            tooltip.style.display = "block";
                            tooltip.style.position = "absolute";

                            tooltip.style.left = event.pageX + 15 + "px";
                            tooltip.style.top = event.pageY + 15 + "px";
                        });

                        state.addEventListener("mousemove", function(event) {
                            tooltip.style.left = event.pageX + 15 + "px";
                            tooltip.style.top = event.pageY + 15 + "px";
                        });

                        state.addEventListener("mouseleave", function() {
                            this.classList.remove("hovered");
                            tooltip.style.display = "none";
                        });
                    });
                })
                .catch((error) => console.error("Error loading SVG:", error));
        });



        function openStateRoute(stateId) {
            if (!stateId) return;


            const routes = {
                AL: "https://www.shipa1.com/car-transportation-in-alabama",
                AK: "https://www.shipa1.com/car-transportation-in-alaska",
                AZ: "https://www.shipa1.com/car-transportation-arizona",
                AR: "https://www.shipa1.com/car-transportation-arkansas",
                CA: "https://www.shipa1.com/car-transportation-california",
                CO: "https://www.shipa1.com/car-transportation-colorado",
                CT: "https://www.shipa1.com/car-transportation-connecticut",
                DE: "https://www.shipa1.com/car-transportation-delaware",
                FL: "https://www.shipa1.com/car-transportation-florida",
                GA: "https://www.shipa1.com/car-transportation-in-georgia",
                HI: "https://www.shipa1.com/car-transportation-in-hawaii",
                ID: "https://www.shipa1.com/car-transportation-in-idaho",
                IL: "https://www.shipa1.com/car-transportation-illinois",
                IN: "https://www.shipa1.com/car-transportation-indiana",
                IA: "https://www.shipa1.com/car-transportation-in-iowa",
                KS: "https://www.shipa1.com/car-transportation-in-kansas",
                KY: "https://www.shipa1.com/car-transportation-kentucky",
                LA: "https://www.shipa1.com/car-transportation-louisiana",
                ME: "https://www.shipa1.com/car-transportation-in-maine",
                MD: "https://www.shipa1.com/car-transportation-maryland",
                MA: "https://www.shipa1.com/car-transportation-massachusetts",
                MI: "https://www.shipa1.com/car-transportation-michigan",
                MN: "https://www.shipa1.com/car-transportation-minnesota",
                MS: "https://www.shipa1.com/car-transportation-mississippi",
                MO: "https://www.shipa1.com/car-transportation-missouri",
                MT: "https://www.shipa1.com/car-transportation-montana",
                NE: "https://www.shipa1.com/car-transportation-nebraska",
                NV: "https://www.shipa1.com/car-transportation-nevada",
                NH: "https://www.shipa1.com/car-transportation-new-hampshire",
                NJ: "https://www.shipa1.com/car-transportation-new-jersey",
                NM: "https://www.shipa1.com/car-transportation-new-mexico",
                NY: "https://www.shipa1.com/car-transportation-new-york",
                NC: "https://www.shipa1.com/car-transportation-north-carolina",
                ND: "https://www.shipa1.com/car-transportation-north-dakota",
                OH: "https://www.shipa1.com/car-transportation-ohio",
                OK: "https://www.shipa1.com/car-transportation-oklahoma",
                OR: "https://www.shipa1.com/car-transportation-oregon",
                PA: "https://www.shipa1.com/car-transportation-pennsylvania",
                RI: "https://www.shipa1.com/car-transportation-rhode-island",
                SC: "https://www.shipa1.com/car-transportation-south-carolina",
                SD: "https://www.shipa1.com/car-transportation-south-dakota",
                TN: "https://www.shipa1.com/car-transportation-tennessee",
                TX: "https://www.shipa1.com/car-transportation-texas",
                UT: "https://www.shipa1.com/car-transportation-utah",
                VT: "https://www.shipa1.com/car-transportation-vermont",
                VA: "https://www.shipa1.com/car-transportation-virginia",
                WA: "https://www.shipa1.com/car-transportation-washington",
                WV: "https://www.shipa1.com/car-transportation-west-virginia",
                WI: "https://www.shipa1.com/car-transportation-wisconsin",
                WY: "https://www.shipa1.com/car-transportation-wyoming",
            };


            if (routes[stateId]) {
                window.location.href = routes[stateId];
            } else {
                alert("Route not defined for this state!");
            }
        }
    </script>
</body>

</html>
