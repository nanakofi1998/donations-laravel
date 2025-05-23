@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Auth - Create New User</a></li>
            </ol>
        </div>
        <div class="container-fluid">
            <!-- row -->
            <div class="row ">
                <div class="col-xl-12 col-xxl-12 bg-white rounded-3 shadow-lg">
                    <form action="" method="POST">
                        <div class="row">
                            <h2 class="text-dark">Create New User</h2>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="role">Role <span class="text-danger">*</span></label>
                                    <select class="form-select" id="role" name="role" required>
                                        <option value="" selected>--Select User Role--</option>
                                        <option value="user">User</option>
                                        <option value="sys_admin">System Admin</option>
                                        <option value="sys_officer">System Officer</option>
                                        <option value="sys_support">System Support</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <small id="passwordHelp" class="form-text text-muted"></small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-danger mt-3 mb-3">Create User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validatePasswordStrength(password) {
            const strengthCriteria = [{
                    regex: /[A-Z]/,
                    message: "at least one uppercase letter"
                },
                {
                    regex: /[a-z]/,
                    message: "at least one lowercase letter"
                },
                {
                    regex: /[0-9]/,
                    message: "at least one number"
                },
                {
                    regex: /[\W_]/,
                    message: "at least one special character"
                },
                {
                    regex: /.{8,}/,
                    message: "at least 8 characters long"
                }
            ];

            const failedCriteria = strengthCriteria.filter(criteria => !criteria.regex.test(password));
            return failedCriteria.map(criteria => criteria.message);
        }

        document.getElementById('password_confirmation').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            const passwordHelp = document.getElementById('passwordHelp');

            const strengthErrors = validatePasswordStrength(password);
            if (strengthErrors.length > 0) {
                passwordHelp.textContent = `Password must have: ${strengthErrors.join(', ')}.`;
                passwordHelp.style.color = 'red';
            } else if (password !== confirmPassword) {
                passwordHelp.textContent = 'Passwords do not match.';
                passwordHelp.style.color = 'red';
            } else {
                passwordHelp.textContent = 'Passwords match and are strong.';
                passwordHelp.style.color = 'green';
            }
        });
    </script>
@endsection