<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
?>
<!-- JavaScript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- End JavaScript -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}?id=4">
    <!-- End CSS -->

    <style>
        body {
            font-family: 'Arial', sans-serif;
            /*background-color: #f4f4f4;*/
            margin: 0;
            padding: 0;
            background: transparent;
        }

        .bottom {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: #f4f4f4;
        }

        form {
            flex: 1;
            display: flex;
            align-items: center;
        }

        input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        button {
            background-color: #3f51b5;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }



    </style>

    <style>
        .typing-indicator {
            display: flex;
            align-items: center;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #555;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 250px;
        }

        .typing-indicator .avatar {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border-radius: 50%;
            object-fit: cover;
        }

        .typing-indicator .dots {
            display: inline-block;
        }

        .typing-indicator .dots::after {
            content: '...';
            animation: typing-dots 1.2s infinite steps(3, start);
        }

        @keyframes typing-dots {
            0% {
                content: '';
            }
            33% {
                content: '.';
            }
            66% {
                content: '..';
            }
            100% {
                content: '...';
            }
        }

    </style>

    <style>
        #show_history ul li {
            padding: 5px;
            cursor: pointer;
        }
        #show_history ul li.active {
            background-color: green;
            color: white;
        }
    </style>
    <style>
        .info-data {
            font-size: 10px;
            color: #777; /* Optional: You can use a light gray color for better readability */
            display: block; /* Ensures it appears on a new line */
            margin-top: 5px; /* Adds a little space between the message and the info */
        }

    </style>
    <audio id="audio_success" autostart="false">
        <source src="{{asset('public/success_sound.mp3')}}" type="audio/ogg">
        <source src="{{asset('public/success_sound.mp3')}}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div class="chat">
        <div class="row">
            <div class="col-md-2" style="border: groove;display: {{ ($user_id != 0) ? 'block' : 'none' }}" id="show_history">
                <strong><u>History </u></strong>
                <ul>

                </ul>
            </div>
            <div class="col-md-10" style="border: groove" id="chat_box">
                <input
                        type="text"
                        onkeyup="handleSearch(this)"
                        name="keyword"
                        id="keyword"
                        style="float: right;border-radius: 10px;display: none"
                        placeholder="Search Chat">
                <input type="hidden" id="thread_id_send">

                <!-- Header -->
                <div class="top">
                    <img src="{{ asset('public/favicon.webp') }}"  alt="Avatar" style="width: 80px;height: 80px;">
                    <div>
                        <p>{{ strtoupper('Shipa1 Support') }}</p>
                        <small>Online</small>
{{--                        <p>Thank you for considering Shipa1  Transport. We have agents standing by to assist you at 1 (844) 474-4721 or here on Livechat.</p>--}}

                    </div>
                </div>
                @if(!$admin)
                <div class="messages">
                    <div class="left message">
                        <div id="user-details-form" class="container mt-4" >
                            <h4 class="mb-3">Enter Your Details to Start the Chat</h4>
                            <form id="details-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="user_name" class="form-label">Name:</label>
                                        <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Enter your name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="user_email" class="form-label">Email:</label>
                                        <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Enter your email" required>
                                    </div>

                                    <div class="col-md-3">
                                        <br>
                                        <button type="submit" class="btn btn-primary w-100">Start Chat</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                @else
                <div class="messages">
                    <div class="left message">
                        <img src="{{ asset('public/favicon.webp') }}" alt="Avatar" style="width: 40px;height: 40px">
                        <p>Thank you for considering Shipa1  Transport. We have agents standing by to assist you at 1 (844) 474-4721 or here on Livechat.

                            How can we help you today?</p>
                    </div>
                </div>
                @endif
                <!-- End Header -->

                <!-- Chat -->

                <!-- End Chat -->

                <!-- Typing Indicator -->
                <div id="typingIndicator" class="typing-indicator" style="display: none;">
{{--                    <img src="{{ asset('public/favicon.webp') }}" alt="Avatar" class="avatar">--}}
                    <p>Sending <span class="dots">...</span></p>
                </div>

                <!-- Footer -->
                <div class="bottom">
                    <form style="padding: 10px;display: none" id="form_submit_chat">
                        <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
                        <a id="emoji-btn" href="#" style="margin-left: 5px;font-size: 30px">😊</a>
                        <div id="emoji-popup" style="display: none; position: absolute; border: 1px solid #ccc; background: #f9f9f9; padding: 10px; border-radius: 5px; max-width: 450px; flex-wrap: wrap;margin-top:-300px">
                            <!-- Emoji list goes here -->
                        </div>
                        <button type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>

                <!-- End Footer -->

            </div>
        </div>
    </div>

    <script>

        $("body").delegate("#show_history ul li button", "click", function () {
            $("#show_history ul li button").removeClass("active"); // Remove active class from all <li>
            $(this).addClass("active"); // Add active class to the clicked <li>
        });
        $(document).ready(function () {
           
            const emojis = ['😀', '😃', '😄', '😁', '😆', '😅', '😂', '🤣', '😊', '😇',
                '🙂', '🙃', '😉', '😌', '😍', '🥰', '😘', '😗', '😙', '😚',
                '😋', '😛', '😜', '🤪', '😝', '🤑', '🤗', '🤭', '🤫', '🤔',
                '🤐', '😷', '🤒', '🤕', '🤢', '🤮', '😵', '🤯', '😎', '🤓',
                '🧐', '😕', '😟', '🙁', '😮', '😯', '😲', '🥺', '😭', '😱'];

            // Append emojis to the popup
            emojis.forEach(function (emoji) {
                $('#emoji-popup').append(`<span class="emoji" style="cursor: pointer; font-size: 24px; margin: 5px;">${emoji}</span>`);
            });

            // Show/hide emoji popup when emoji button is clicked
            $('#emoji-btn').on('click', function (e) {
                e.stopPropagation(); // Prevent event propagation to body
                $('#emoji-popup').toggle();
            });

            // Insert emoji into the message input field when clicked
            $(document).on('click', '.emoji', function () {
                const emoji = $(this).text();
                $('#message').val($('#message').val() + emoji);
                $('#emoji-popup').hide();
                $('#message').focus();
            });

            // Hide the emoji popup when clicking outside
            $(document).on('click', function () {
                $('#emoji-popup').hide();
            });
        });

        var name = '';
        var email = '';
        $('#details-form').on('submit', function (e) {
            e.preventDefault();
             name = $('#user_name').val().trim();
             email = $('#user_email').val().trim();

            if (name && email) {

                // Hide the details form and show the chat
                $('#user-details-form').hide();
                $('#form_submit_chat').show();

                // Create the initial message data
                var initial_data = `Name: ${name} <br> Email Address: ${email}`;

                // Set the initial data to the message input field
                $("form #message").val(initial_data);

                $('#form_submit_chat').submit();
            } else {
                // If name or email is empty, alert the user
                alert('Please fill in both fields.');
            }
        });

    </script>
    <script>
        let searchTimeout;

        function handleSearch(inputElement) {
            // Clear any previously set timeout to avoid multiple triggers
            clearTimeout(searchTimeout);

            const keyword = inputElement.value;

            // Only trigger the search if the keyword length is more than 2 characters

            searchTimeout = setTimeout(() => {
                get_history('{{ date('Y-m-d') }}', '{{ $deviceId }}', null, $('#thread_id_send').val(), keyword);
            }, 100); // 1 second delay

        }
    </script>
    <script>
        var date_created = "{{ date('Y-m-d') }}";
        var ip_address = "{{ $deviceId }}";
        var user_id = {{ $user_id }};
        var c_thread_id = null;
        var admin = {{ ($admin) ? '1' : '0' }};
        @if($admin)
           $('#keyword').show();
         @else
         get_history(date_created,ip_address);
        @endif
        show_his();
        var ring = 0;
        var set_interval2;
        function show_his() {
            $.ajax({
                url: "{{ url('show_history') }}",
                method: 'GET',
                data: { date_created }
            }).done(function (res) {
                if (res) {

                    var lis = "";
                    var ring = 0;
                    var total_unread = parseInt(0);
                    var total_unread_c = parseInt(0);
                    var seperate_count = parseInt(0);

                    $.each(res, function (index, value) {
                        var text = (value.name && value.name.trim() !== '') ? `${value.name}` : `Thread: ${value.thread_id}`;
                        lis += `<li >
                    <button type="button" id="li_${value.thread_id}" onclick="get_history('${value.date_created}', '${value.ip_address}', 'admin', '${value.thread_id}')"
                    class="btn btn-outline-info btn-sm">${text}

                        ${(value.replied == 0 && value.tc > 0) ? `<span class="badge badge-danger badge-sm">(${value.tc})</span>` : ''}
                    </button>
                </li>`;
                        total_unread+= parseInt(value.tc);
                        total_unread_c+= parseInt(value.tc_c);
                        if (value.replied == 0 && admin == 1 && !$('#chat_box').is(':visible') && value.tc > 0) {
                            ring = 1;
                        }
                        if(ip_address == value.ip_address){
                            c_thread_id =value.thread_id;
                            seperate_count+= parseInt(value.tc_c);
                        }
                        if (value.replied == 1 && admin == 0 && !$('#chat_box').is(':visible') && seperate_count > 0 && value.thread_id == c_thread_id) {
                            ring = 1;
                        }
                    });

                    if (ring == 1) {
                        playNotificationSound();
                    }

                    var message = {
                        type: 'iframeMessage',
                        payload: total_unread
                    };
                    var message2 = {
                        type: 'iframeMessage2',
                        payload: seperate_count
                    };

                    window.parent.postMessage(message, '*');
                    window.parent.postMessage(message2, '*');

                    if (set_interval2) {
                        clearInterval(set_interval2);
                    }
                    set_interval2 = setInterval(function() {
                        show_his();
                    }, 10000);
                    $('#show_history ul').html(lis);
                }
            });
        }

        // Function to play notification sound
        function playNotificationSound() {
            var sound = document.getElementById("audio_success");
            sound.play();
        }


        var set_interval;
        function get_history(date_created = null,ip_address = null,admin = null,thread_id = null,keyword = null){
            c_thread_id = thread_id;
            $("#show_history ul li button").removeClass("active");
            $(`#li_${thread_id}`).addClass("active");
            if (set_interval) {
                clearInterval(set_interval);
            }

            var typeValue = (admin == 'admin') ? 1 : 0;

            if ($('#chat_box').is(':visible')) {
                $.ajax({
                    url: "{{ url('ChatUpdateRead') }}",
                    method: 'GET',
                    data: {
                        thread_id: c_thread_id,
                        type: typeValue
                    }
                }).done(function (res) {
                    // Handle response if needed
                });
            }

            set_interval = setInterval(function() {
                get_history(date_created, ip_address, admin, thread_id);
            }, 5000);
            $.ajax({
                url: "{{ url('chat_history') }}",
                method: 'GET',
                data: {date_created,ip_address,thread_id :c_thread_id,keyword: keyword}
            }).done(function (res) {
                if(res.status == 1) {
                    $('#user-details-form').hide();
                    $('#form_submit_chat').show();
                    $('.messages').remove();
                    $('.top').after(`
                        <div class="messages">
                            <div class="left message">
                            <img src="{{ asset('public/favicon.webp') }}" alt="Avatar" style="width: 40px;height: 40px">
                            <p>Thank you for considering Shipa1  Transport. We have agents standing by to assist you at 1 (844) 474-4721 or here on Livechat.How can we help you today?</p>
                            </div>
                        </div>
                        `);
                    if(res.data.length > 0) {
                        $.each(res.data, function (index, value) {
                            if (value.receive_message) {
                                make_response(value,1);
                            } else {
                                make_response(value,0);
                            }
                        })
                    }
                }
            });
        }

        function make_response(send_value, res) {
            var info = '';
            $("#typingIndicator").hide();
            $('#thread_id_send').val(send_value.thread_id);
            if (res == 0) {
                var final = send_value.send_message;
                if (admin == 1 && send_value.info_data) {
                    info = '<span class="info-data">' + send_value.info_data + '</span>';
                }
                $(".messages > .message").last().after(
                    '<div class="right message">' +
                    '<img src="{{ asset("public/user.png") }}" alt="Avatar" style="width: 50px;height: 50px">' +
                    '<div class="div">' + final + '</div>' +
                    info + // Display info below the message
                    '</div>'
                );
            } else {
                var final = send_value.receive_message;
                if (admin == 1 && send_value.info_data) {
                    info = '<span class="info-data">' + send_value.info_data + '</span>';
                }
                $(".messages > .message").last().after(
                    '<div class="left message">' +
                    '<img src="{{ asset("public/favicon.webp") }}" alt="Avatar" style="width: 40px;height: 40px">' +
                    '<div class="div">' + final + '</div>' +
                    info + // Display info below the message
                    '</div>'
                );
            }

            var messagesContainer = $(".messages");
            messagesContainer.scrollTop(messagesContainer.prop("scrollHeight"));
            $(document).scrollTop($(document).height());
        }

        //Broadcast messages

        $("#form_submit_chat").submit(function (event) {
            event.preventDefault();

            var message = $("#message").val().trim();

            // Regular expression to detect URLs
            var urlRegex = /(https?:\/\/[^\s]+)/g;

            if (urlRegex.test(message)) {
                alert("Links are not allowed in the message!");
                event.preventDefault(); // Prevent form submission
                return false;
            }
            //Stop empty messages
            if ($("#form_submit_chat #message").val().trim() === '') {
                return;
            }

            //Disable form
            $("#form_submit_chat #message").prop('disabled', true);
            $("#form_submit_chat button").prop('disabled', true);
            $("#form_submit_chat #responseType").prop('disabled', true);

            $("#typingIndicator").show();

            $.ajax({
                url: "{{ url('chat') }}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                },
                data: {
                    "model": "gpt-3.5-turbo",
                    "content": $("#form_submit_chat #message").val(),
                    "personality": $("#form_submit_chat #responseType").val(),
                    "ip_address": ip_address,
                    "user_id": user_id,
                    "thread_id": c_thread_id,
                    "name": name,
                    "email": email,
                    "reference_domain": "{{$domain}}",
                    "admin": '{{ ($admin) ? '1' : 0 }}',
                }
            }).done(function (res) {
                var send_value = $("#form_submit_chat #message").val();
                @if($admin)
                  get_history(res.data.date_created,res.data.ip_address,'admin',res.data.thread_id)
                @else
                 get_history(res.data.date_created,res.data.ip_address,null,res.data.thread_id)
                @endif

                $("#form_submit_chat #message").val('');
                $(document).scrollTop($(document).height());

                $("#form_submit_chat #message").prop('disabled', false);
                $("#form_submit_chat button").prop('disabled', false);
            });
        });

    </script>

