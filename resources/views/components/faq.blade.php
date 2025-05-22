@props(['faqs'])

<style>
    /* .faq-container {
        max-width: 700px;
        margin: 50px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .faq-container h2 {
        text-align: center;
        color: #8fc445;
    } */

    /* .faq {
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
    } */

     .side-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 50px auto;
        padding: 20px;
    }

    .side-container div h3 {
        color: #062e39;
    }

    .side-container div p {
        color: #062e39;
    }

    .side-container div h3 span {
        color: #8fc445;
        font-weight: 700;
    }

    .side-container div hr {
        color: #8fc445;
        height: 8px;
        opacity: 1;
        /* border-radius: 5px; */
        border-top-left-radius: 50px;
        border-bottom-right-radius: 50px;
    }

    .btnfaq {
        border: none;
        border-radius: 5px;
        background-color: #8fc445;
        color: white;
        padding: 6px;
        transition: 1s;
    }

    .btnfaq:hover {
        background-color: #062e39;
        color: white;
    }

    .faq-container {
        max-width: 700px;
        margin: 50px auto;
        background: #fff;
        padding: 20px;
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

<div class="container">
    <div class="row p-2">
        <div class="side-container col-12 col-lg-5 ">
            <div>
                <h3 class="fs-2">Frequently <span>Asked Questions</span></h3>
                <hr class="w-50">
                <p>Have a look at answers to trending customer queries about our vehicle shipping services.</p>
                <a class="text-decoration-none  btnfaq" href="{{ route('faq') }}">Get Detailed Shipping Answer</a>
            </div>
        </div>
        <div class="col-12 col-lg-7">
            <div class="faq-container">
                {{-- <h2>Frequently <span style="color: #062e39">Asked Questions</span></h2> --}}
                <div class="accordion" id="faqAccordion">
                    @foreach ($faqs as $index => $faq)
                        <div class="faq">
                            <button class="faq-toggle">
                                {{ $faq['question'] }}
                                <span>+</span>
                            </button>
                            <div class="faq-content">
                                <p>{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
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
    });
</script>
