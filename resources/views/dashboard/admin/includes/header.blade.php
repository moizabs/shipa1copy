<style>
    /* Style for user name link */
    .nav-item .nav-link.user-name {
        color: #858796 !important;
        font-weight: bold;
        transition: color 0.3s;
    }

    .nav-item .nav-link.user-name:hover {
        color: black !important;
        border-radius: 0px !important;
    }

    /* Style for logout link */
    .nav-item .nav-link.logout-link {
        color: #858796 !important;
        border-radius: 0px !important;
        font-weight: bold;
        transition: color 0.3s;
    }

    .nav-item .nav-link.logout-link:hover {
        border-radius: 0px !important;
        color: black !important;
    }

    /* Style adjustments for better alignment */
    .nav-item .row.align-items-center {
        display: flex;
        align-items: center;
    }

    .nav-item .col-6 {
        padding: 0;
    }

    .nav-item .col-6.text-right {
        text-align: right;
    }

    .nav-item .col-6.text-left {
        text-align: left;
    }
</style>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
    style="border-bottom: 2px solid #8FC445;">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" style="color: #8FC445;">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    {{-- <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> --}}

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: #8FC445;">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle user-name" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline">{{ Auth::user()->name }}</span>
                <i class="fas fa-user-circle fa-sm"></i>
            </a>
            <!-- Dropdown Menu -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- Change Password -->
                <a class="dropdown-item" href="#" onclick="changePassModal()">
                    <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                    Change Password
                </a>
                <div class="dropdown-divider"></div>
                <!-- Logout -->
                <a class="dropdown-item logout-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
        
    </ul>
</nav>

<!-- change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="changePasswordForm">
                    <!-- Current Password -->
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="currentPassword" name="currentPassword"
                            placeholder="Enter current password" required>
                    </div>
                    <!-- New Password -->
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword"
                            placeholder="Enter new password" required>
                    </div>
                    <!-- Confirm New Password -->
                    <div class="mb-3">
                        <label for="confirmNewPassword" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword"
                            placeholder="Re-enter new password" required>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="submitChangePassword()">Change
                    Password</button>
            </div>
        </div>
    </div>
</div>

<SCript>
    // Function to open the "Change Password" modal
    function changePassModal() {
        $('#changePasswordModal').modal('show'); // Show the modal
    }

    // Attach the function to the click event
    $(document).on('click', '.changePassModal', function() {
        changePassModal();
    });

    // Function to handle form submission
    function submitChangePassword() {
        const currentPassword = $('#currentPassword').val();
        const newPassword = $('#newPassword').val();
        const confirmNewPassword = $('#confirmNewPassword').val();

        // Validation: Check if new passwords match
        if (newPassword !== confirmNewPassword) {
            alert('New passwords do not match!');
            return;
        }

        // Simulate AJAX request to the server
        $.ajax({
            url: '{{ route('change.password') }}', // Update with your server route
            method: 'POST',
            data: {
                user_id: '{{ Auth::id() }}',
                currentPassword: currentPassword,
                newPassword: newPassword,
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                alert('Password changed successfully!');
                $('#changePasswordModal').modal('hide'); // Hide the modal
            },
            error: function(xhr) {
                alert('An error occurred: ' + xhr.responseText);
            }
        });
    }

    // Attach submitChangePassword to button click
    $(document).on('click', '#submitChangePassword', function() {
        submitChangePassword();
    });
</SCript>
