<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f8f8;
        } */
        .side-container{
           display: flex;
           justify-content: center;
           align-items: center;
           margin: 50px auto;
           padding:20px;
        }
        .side-container div h2{
            color: #062e39;
        }
        .side-container div p {
            color: #062e39;
        }
        .side-container div h2 span{
            color: #8fc445;
            font-weight: 700;
        }
        .side-container div hr{
            color: #8fc445;
            height: 8px;    
            opacity: 1; 
            /* border-radius: 5px; */
            border-top-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .btnfaq{
            border: none;
            border-radius: 5px;
            background-color: #8fc445;
            color: white;
            padding: 6px ;
            transition: 1s;
        }
        .btnfaq:hover{
            background-color: #062e39;
            color: white;
        }
        .faq-container {
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding:20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .faq-container h2 {
            text-align: center;
            color: #8fc445;
        }
        .faq {
            border-bottom: 1px solid #ddd;
        }
        .faq button {
            width: 100%;
            background: none;
            color: #062e39;
            border: none;
            text-align: left;
            font-size: 18px;
            padding: 15px;
            cursor: pointer;
            outline: none;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .faq button:hover {
            background: #f1f1f1;
        }
        .faq-content {
            display: none;
            padding: 15px;
            font-size: 16px;
            background: #f9f9f9;
            border-radius: 5px;
        }
        .open-faq {
            background: #d22;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row p-5">
       <div class="side-container col-12 col-lg-5 ">
            <div>
                <h2>Frequently <span>Asked Questions</span> </h2>
                <hr class="w-50">
                <p>Have a look at answers to trending customer queries about our vehicle shipping services.</p>
                    <a class="text-decoration-none  btnfaq" href="{{ route('faq') }}">Get Detailed Shipping Answer</a>
            </div>
       </div>

       <div class="col-12 col-lg-7">
        <div class="faq-container">
            <div class="faq">
                <button class="faq-toggle">How is ShipA1 the trusted automobile transport agency in the USA?<span>+</span></button>
                <div class="faq-content">
                    <p>Simply put, we offer qualified carriers, benefits to customers with door-to-door vehicle shipping, and back automobiles with one hundred percent insurance support.</p>
                </div>
            </div>
        
            <div class="faq">
                <button class="faq-toggle">Does ShipA1 offer the cheapest car shipping services in the USA? <span>+</span></button>
                <div class="faq-content">
                    <p>ShipA1 never aims to trap its existing and potential customers by highlighting offering cheap car shipping services. Our customized car transport service plans come under budget-friendly ranges.</p>
                </div>
            </div>
        
            <div class="faq">
                <button class="faq-toggle">How much time does it take to hire the best car shipping agency near me?<span>+</span></button>
                <div class="faq-content">
                    <p>Locating and hiring a car shipping agency depends on your digital exploration and selected car transport partner. However, At ShipA1, you get quotes and order booking confirmation within minutes.</p>
                </div>
            </div>
            
            <div class="faq">
                <button class="faq-toggle">How do I identify a reliable and trusted vehicle shipping partner?<span>+</span></button>
                <div class="faq-content">
                    <p>As per our experienced shipping team, clients should explore the digital presence, read online reviews, and ask for licensed verification to identify their top-picked freight.</p>
                </div>
            </div>
        
            <div class="faq">
                <button class="faq-toggle">How can I get fast automobile transport services right now?<span>+</span></button>
                <div class="faq-content">
                    <p>Connect with ShipA1 and click on “Get a Quote”. By following a simple order booking process, you can get your automobile shipping consignment started.</p>
                </div>
            </div>
        
        </div>
       </div>
    </div>
</div>


<script>
    document.querySelectorAll(".faq-toggle").forEach(button => {
        button.addEventListener("click", () => {
            const faqContent = button.nextElementSibling;
            const isOpen = button.classList.contains("open-faq");

            document.querySelectorAll(".faq-toggle").forEach(btn => {
                btn.classList.remove("open-faq");
                btn.nextElementSibling.style.display = "none";
                btn.querySelector("span").textContent = "+";
            });

            if (!isOpen) {
                button.classList.add("open-faq");
                faqContent.style.display = "block";
                button.querySelector("span").textContent = "-";
            }
        });
    });
</script>

</body>
</html>
