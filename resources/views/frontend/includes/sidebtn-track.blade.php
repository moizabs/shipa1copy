<style>
    .Rightbutton {
        display: flex;
        position: fixed;
        right: -370px;
        top: 35%;
        transition: right 0.4s;
        z-index: 999;
    }
    .Rightbutton.active {
        right: 0;
    }
    .clickbutton {
        border-left: 4px solid #8fc445;
        background: #062e39;
        width: 40px;
        height: 160px;
        cursor: pointer;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        position: relative;
        box-shadow: -20px 7px 18px -7px rgba(87, 184, 151, 0.09);
        border-radius: 30px 0 0 3px;
    }
    .crossplus {
        text-wrap: nowrap;
        position: absolute;
        left: -22px;
        bottom: 70px;
        display: block;
        transform: rotate(-90deg);
        transition: transform 0.4s;
    }
    .crossplus.rotate {
        transform: rotate(45deg);
    }
    .crossplus i {
        font-size: 18px;
        color: #fff;
        margin: 17px 0 0 15px;
    }
    .banner-form {
        border-bottom: 4px solid #8fc445;
        border-top: 4px solid #8fc445;
        background: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }
</style>
<div class="Rightbutton">
    <div class="clickbutton">
        <div class="crossplus">Track Order</div>
    </div>
    <div class="banner-form">
        <form id="orderTrackingForm" class="form">
            @csrf
            <input type="hidden" name="modal" value="1">
            <h3 class="text-dark">Get Status of Your Order</h3>
            <div class="form-group">
                <label for="order_num">Order #:</label>
                <input type="text" class="form-control" name="order_num" id="order_num" placeholder="Enter Order Number" />
            </div>
            <div class="tj-theme-button"> 
                <button class="tj-transparent-btn" type="button" id="submitButton">Track Order<i class="flaticon-right-1"></i></button>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="trackingResultModal" tabindex="-1" role="dialog" aria-labelledby="trackingResultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trackingResultModalLabel">Order Tracking Result</h5>
            </div>
            <div class="modal-body" id="orderTrackingHtml"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#submitButton').click(function() {
            Swal.fire({
                icon: 'info',
                title: 'Processing...',
                text: 'Please wait while we process your Order Tracking Request.',
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                }
            });
            var formData = $('#orderTrackingForm').serialize();
            $.ajax({
                type: 'POST',
                url: '{{ route('track.order') }}',
                data: formData,
                success: function(response) {
                    Swal.close();
                    if (response.status_code === 400) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                        $('#orderTrackingHtml').html('');
                    } else {
                        $('#orderTrackingHtml').html(response);
                        $('#trackingResultModal').modal('show');
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    const response = xhr.responseJSON;
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            });
        });
        $(window).keydown(function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
            }
        });
        $(document).on('click', '.clickbutton', function() {
            console.log("Click button clicked");
            $('.Rightbutton').toggleClass("active");
        });
        $(document).on('click', '.floating_strip .rotatekaro a', function(e) {
            e.preventDefault();
            console.log("Floating strip clicked");
            $('.floating_form').toggleClass("open");
        });
    });
</script>