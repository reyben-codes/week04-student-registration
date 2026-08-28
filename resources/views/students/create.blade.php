<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >
    <title>Student Registration</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --primary: #1e3a8a;
            --primary-light: #2563eb;
            --primary-soft: #eff6ff;

            --text-dark: #0f172a;
            --text: #334155;
            --text-light: #64748b;

            --border: #dbe2ea;
            --background: #f1f5f9;
            --white: #ffffff;

            --danger: #dc2626;
            --danger-bg: #fef2f2;
            --danger-border: #fecaca;

            --success: #15803d;
            --success-bg: #f0fdf4;

            --shadow:
                0 20px 50px rgba(15, 23, 42, 0.08);
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background:
                linear-gradient(
                    180deg,
                    #eaf1ff 0,
                    #f8fafc 340px,
                    #f1f5f9 100%
                );
            color: var(--text);
            min-height: 100vh;
        }

        /* =========================
           HEADER
        ========================== */

        .page-header {
            background:
                linear-gradient(
                    135deg,
                    #172554,
                    #1e3a8a 55%,
                    #2563eb
                );
            color: white;
            padding: 42px 20px 78px;
            text-align: center;
        }

        .header-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 18px;

            background: rgba(255,255,255,0.13);
            border: 1px solid rgba(255,255,255,0.2);

            font-size: 29px;
        }

        .page-header h1 {
            font-size: clamp(26px, 4vw, 38px);
            font-weight: 800;
            letter-spacing: -0.5px;
            margin-bottom: 9px;
        }

        .page-header p {
            font-size: 15px;
            opacity: 0.9;
        }

        /* =========================
           LAYOUT
        ========================== */

        .container {
            width: min(1050px, calc(100% - 32px));
            margin: -46px auto 60px;
        }

        .registration-card {
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
            border: 1px solid rgba(219, 226, 234, 0.7);
        }

        .card-heading {
            padding: 34px 38px 28px;
            border-bottom: 1px solid #eef2f7;
        }

        .eyebrow {
            display: inline-block;
            color: var(--primary-light);
            background: var(--primary-soft);
            padding: 6px 11px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 12px;
        }

        .form-title {
            color: var(--text-dark);
            font-size: 27px;
            margin-bottom: 8px;
        }

        .form-description {
            color: var(--text-light);
            font-size: 14px;
            line-height: 1.6;
        }

        .required-note {
            display: block;
            margin-top: 9px;
            font-size: 12px;
            color: var(--text-light);
        }

        .form-wrapper {
            padding: 34px 38px 40px;
        }

        /* =========================
           ALERT
        ========================== */

        .alert-danger {
            display: flex;
            gap: 14px;

            background: var(--danger-bg);
            border: 1px solid var(--danger-border);
            border-left: 4px solid var(--danger);

            border-radius: 12px;

            padding: 17px 18px;
            margin-bottom: 30px;
        }

        .alert-icon {
            width: 34px;
            height: 34px;
            min-width: 34px;

            border-radius: 50%;

            background: #fee2e2;
            color: var(--danger);

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: 800;
        }

        .alert-content strong {
            color: #991b1b;
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .alert-content ul {
            color: #b91c1c;
            padding-left: 18px;
            font-size: 13px;
            line-height: 1.6;
        }

        /* =========================
           FORM SECTIONS
        ========================== */

        .form-section {
            margin-bottom: 34px;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 21px;
            padding-bottom: 13px;

            border-bottom: 1px solid #e8edf3;
        }

        .section-icon {
            width: 38px;
            height: 38px;
            min-width: 38px;

            border-radius: 10px;

            background: var(--primary-soft);
            color: var(--primary);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 18px;
        }

        .section-heading h3 {
            color: var(--text-dark);
            font-size: 16px;
            margin-bottom: 2px;
        }

        .section-heading p {
            color: var(--text-light);
            font-size: 12px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .form-group {
            min-width: 0;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        label {
            display: block;

            font-size: 13px;
            font-weight: 700;
            color: var(--text-dark);

            margin-bottom: 8px;
        }

        .required {
            color: var(--danger);
        }

        input,
        select,
        textarea {
            width: 100%;

            font: inherit;
            font-size: 14px;
            color: var(--text-dark);

            background: #ffffff;

            border: 1px solid var(--border);
            border-radius: 10px;

            padding: 12px 14px;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease,
                background 0.2s ease;
        }

        input::placeholder,
        textarea::placeholder {
            color: #94a3b8;
        }

        input:hover,
        select:hover,
        textarea:hover {
            border-color: #aebdce;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.10);
        }

        select {
            cursor: pointer;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
            line-height: 1.5;
        }

        .input-error {
            border-color: var(--danger) !important;
            background: #fffafa !important;
        }

        .input-error:focus {
            box-shadow: 0 0 0 4px rgba(220, 38, 38, 0.09);
        }

        .error-message {
            display: flex;
            align-items: center;
            gap: 5px;

            margin-top: 6px;

            font-size: 12px;
            color: var(--danger);
        }

        .error-message::before {
            content: "!";
            width: 15px;
            height: 15px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: var(--danger);
            color: white;

            font-size: 10px;
            font-weight: bold;
        }

        .field-note {
            display: block;
            margin-top: 7px;

            font-size: 11px;
            color: var(--text-light);
        }

        /* =========================
           FILE INPUT
        ========================== */

        input[type="file"] {
            padding: 9px;
            color: var(--text-light);
            background: #f8fafc;
        }

        input[type="file"]::file-selector-button {
            border: none;
            background: var(--primary);
            color: white;

            padding: 9px 13px;
            margin-right: 12px;

            border-radius: 7px;

            font-weight: 700;
            cursor: pointer;
        }

        input[type="file"]::file-selector-button:hover {
            background: var(--primary-light);
        }

        /* =========================
           BUTTON
        ========================== */

        .form-actions {
            border-top: 1px solid #e8edf3;
            padding-top: 26px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .privacy-note {
            max-width: 470px;

            color: var(--text-light);
            font-size: 11px;
            line-height: 1.5;
        }

        .submit-button {
            border: none;

            background:
                linear-gradient(
                    135deg,
                    #1e3a8a,
                    #2563eb
                );

            color: white;

            padding: 13px 25px;
            border-radius: 10px;

            font-size: 14px;
            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 8px 18px rgba(37, 99, 235, 0.20);

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        .submit-button:hover {
            transform: translateY(-1px);

            box-shadow:
                0 12px 24px rgba(37, 99, 235, 0.26);
        }

        .submit-button:active {
            transform: translateY(0);
        }
        .section-icon i,
        .header-icon i,
        .success-icon i,
        .alert-icon i,
        .verified-dot i {
            line-height: 1;
        }

        .submit-button,
        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 768px) {

            .page-header {
                padding: 32px 18px 66px;
            }

            .container {
                width: min(100% - 24px, 1050px);
            }

            .card-heading,
            .form-wrapper {
                padding-left: 24px;
                padding-right: 24px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full-width {
                grid-column: auto;
            }

            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .submit-button {
                width: 100%;
            }

            .privacy-note {
                max-width: none;
                text-align: center;
            }
        }

        @media (max-width: 480px) {

            .page-header {
                padding-top: 28px;
            }

            .header-icon {
                width: 52px;
                height: 52px;
            }

            .container {
                margin-top: -38px;
            }

            .registration-card {
                border-radius: 15px;
            }

            .card-heading {
                padding: 26px 19px 23px;
            }

            .form-wrapper {
                padding: 25px 19px 30px;
            }

            .form-title {
                font-size: 23px;
            }

            .section-header {
                align-items: flex-start;
            }

            .alert-danger {
                padding: 14px;
            }
        }
    </style>
</head>

<body>

<header class="page-header">

    <div class="header-icon">
        <i class="fa-solid fa-graduation-cap"></i>
    </div>

    <h1>Student Registration System</h1>

    <p>
        College of Information Technology
    </p>

</header>


<main class="container">

    <div class="registration-card">

        <div class="card-heading">

            <span class="eyebrow">
                Registration Portal
            </span>

            <h2 class="form-title">
                Create Student Profile
            </h2>

            <p class="form-description">
                Complete the registration form below with accurate
                student information.
            </p>

            <span class="required-note">
                Fields marked with
                <span class="required">*</span>
                are required.
            </span>

        </div>


        <div class="form-wrapper">

            @if($errors->any())

                <div class="alert-danger">

                    <div class="alert-icon">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>

                    <div class="alert-content">

                        <strong>
                            Please review your information.
                        </strong>

                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>

                    </div>

                </div>

            @endif


            <form
                action="{{ route('students.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                {{-- ===================================
                     STUDENT INFORMATION
                ==================================== --}}

                <section class="form-section">

                    <div class="section-header">

                    <div class="section-icon">
                        <i class="fa-solid fa-id-card"></i>
                    </div>

                        <div class="section-heading">
                            <h3>Student Information</h3>

                            <p>
                                Basic school identification and account details
                            </p>
                        </div>

                    </div>


                    <div class="form-grid">

                        <div class="form-group">

                            <label for="student_id">
                                Student ID
                                <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="student_id"
                                name="student_id"
                                value="{{ old('student_id') }}"
                                class="@error('student_id') input-error @enderror"
                                placeholder="e.g. 0124-0987"
                                required
                            >

                            @error('student_id')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label for="email">
                                Email Address
                                <span class="required">*</span>
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="@error('email') input-error @enderror"
                                placeholder="student@example.com"
                                required
                            >

                            @error('email')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                    </div>

                </section>


                {{-- ===================================
                     PERSONAL INFORMATION
                ==================================== --}}

                <section class="form-section">

                    <div class="section-header">

                    <div class="section-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>

                        <div class="section-heading">
                            <h3>Personal Information</h3>

                            <p>
                                Student's personal and contact details
                            </p>
                        </div>

                    </div>


                    <div class="form-grid">

                        <div class="form-group">

                            <label for="first_name">
                                First Name
                                <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="first_name"
                                name="first_name"
                                value="{{ old('first_name') }}"
                                class="@error('first_name') input-error @enderror"
                                placeholder="Enter first name"
                                required
                            >

                            @error('first_name')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label for="middle_name">
                                Middle Name
                            </label>

                            <input
                                type="text"
                                id="middle_name"
                                name="middle_name"
                                value="{{ old('middle_name') }}"
                                class="@error('middle_name') input-error @enderror"
                                placeholder="Enter middle name"
                            >

                            @error('middle_name')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label for="last_name">
                                Last Name
                                <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="last_name"
                                name="last_name"
                                value="{{ old('last_name') }}"
                                class="@error('last_name') input-error @enderror"
                                placeholder="Enter last name"
                                required
                            >

                            @error('last_name')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label for="mobile_number">
                                Mobile Number
                                <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="mobile_number"
                                name="mobile_number"
                                value="{{ old('mobile_number') }}"
                                class="@error('mobile_number') input-error @enderror"
                                placeholder="09XXXXXXXXX"
                                required
                            >

                            @error('mobile_number')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label for="date_of_birth">
                                Date of Birth
                                <span class="required">*</span>
                            </label>

                            <input
                                type="date"
                                id="date_of_birth"
                                name="date_of_birth"
                                value="{{ old('date_of_birth') }}"
                                class="@error('date_of_birth') input-error @enderror"
                                required
                            >

                            @error('date_of_birth')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label for="gender">
                                Gender
                                <span class="required">*</span>
                            </label>

                            <select
                                id="gender"
                                name="gender"
                                class="@error('gender') input-error @enderror"
                                required
                            >

                                <option value="">
                                    Select gender
                                </option>

                                <option
                                    value="Male"
                                    {{ old('gender') == 'Male' ? 'selected' : '' }}
                                >
                                    Male
                                </option>

                                <option
                                    value="Female"
                                    {{ old('gender') == 'Female' ? 'selected' : '' }}
                                >
                                    Female
                                </option>

                                <option
                                    value="Other"
                                    {{ old('gender') == 'Other' ? 'selected' : '' }}
                                >
                                    Other
                                </option>

                                <option
                                    value="Prefer not to say"
                                    {{ old('gender') == 'Prefer not to say' ? 'selected' : '' }}
                                >
                                    Prefer not to say
                                </option>

                            </select>

                            @error('gender')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                    </div>

                </section>


                {{-- ===================================
                     ACADEMIC INFORMATION
                ==================================== --}}

                <section class="form-section">

                    <div class="section-header">

                    <div class="section-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>

                        <div class="section-heading">
                            <h3>Academic Information</h3>

                            <p>
                                Program and current year level
                            </p>
                        </div>

                    </div>


                    <div class="form-grid">

                        <div class="form-group">

                            <label for="program">
                                Program
                                <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="program"
                                name="program"
                                value="{{ old('program') }}"
                                class="@error('program') input-error @enderror"
                                placeholder="e.g. BS Information Technology"
                                required
                            >

                            @error('program')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label for="year_level">
                                Year Level
                                <span class="required">*</span>
                            </label>

                            <select
                                id="year_level"
                                name="year_level"
                                class="@error('year_level') input-error @enderror"
                                required
                            >

                                <option value="">
                                    Select year level
                                </option>

                                <option value="1"
                                    {{ old('year_level') == '1' ? 'selected' : '' }}>
                                    1st Year
                                </option>

                                <option value="2"
                                    {{ old('year_level') == '2' ? 'selected' : '' }}>
                                    2nd Year
                                </option>

                                <option value="3"
                                    {{ old('year_level') == '3' ? 'selected' : '' }}>
                                    3rd Year
                                </option>

                                <option value="4"
                                    {{ old('year_level') == '4' ? 'selected' : '' }}>
                                    4th Year
                                </option>

                                <option value="5"
                                    {{ old('year_level') == '5' ? 'selected' : '' }}>
                                    5th Year
                                </option>

                                <option value="6"
                                    {{ old('year_level') == '6' ? 'selected' : '' }}>
                                    6th Year
                                </option>

                            </select>

                            @error('year_level')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                    </div>

                </section>


                {{-- ===================================
                     ADDRESS & PROFILE
                ==================================== --}}

                <section class="form-section">

                    <div class="section-header">

                    <div class="section-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                        <div class="section-heading">
                            <h3>Address & Profile</h3>

                            <p>
                                Residential address and identification photo
                            </p>
                        </div>

                    </div>


                    <div class="form-grid">

                        <div class="form-group full-width">

                            <label for="address">
                                Complete Address
                                <span class="required">*</span>
                            </label>

                            <textarea
                                id="address"
                                name="address"
                                class="@error('address') input-error @enderror"
                                placeholder="House number, street, barangay, city/municipality, province"
                                required
                            >{{ old('address') }}</textarea>

                            @error('address')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <div class="form-group full-width">

                            <label for="profile_picture">
                                Profile Picture
                                <span class="required">*</span>
                            </label>

                            <input
                                type="file"
                                id="profile_picture"
                                name="profile_picture"
                                class="@error('profile_picture') input-error @enderror"
                                accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                required
                            >

                            @error('profile_picture')
                                <span class="error-message">
                                    {{ $message }}
                                </span>
                            @enderror

                            <span class="field-note">
                                JPG, JPEG, or PNG only. Maximum file size: 2 MB.
                            </span>

                        </div>

                    </div>

                </section>


                <div class="form-actions">

                    <p class="privacy-note">
                        Please review the information before submitting.
                        Student information will be securely processed by the
                        registration system.
                    </p>

                    <button
                        type="submit"
                        class="submit-button"
                    >
                        Register Student →
                    </button>

                </div>

            </form>

        </div>

    </div>

</main>

</body>
</html>