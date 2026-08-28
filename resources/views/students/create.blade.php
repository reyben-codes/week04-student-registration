<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #1f2937;
            min-height: 100vh;
        }

        .page-header {
            background: #1e3a8a;
            color: white;
            padding: 24px;
            text-align: center;
        }

        .page-header h1 {
            font-size: 28px;
            margin-bottom: 6px;
        }

        .page-header p {
            font-size: 14px;
            opacity: 0.9;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .registration-card {
            background: white;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }

        .form-title {
            margin-bottom: 8px;
            font-size: 24px;
            color: #111827;
        }

        .form-description {
            color: #6b7280;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .section-title {
            font-size: 17px;
            margin-bottom: 18px;
            color: #1e3a8a;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 10px;
        }

        .form-section {
            margin-bottom: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .required {
            color: #dc2626;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 14px;
            background: white;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        input[type="file"] {
            padding: 9px;
        }

        .field-note {
            margin-top: 6px;
            font-size: 12px;
            color: #6b7280;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }

        .submit-button {
            border: none;
            background: #1e3a8a;
            color: white;
            padding: 12px 28px;
            border-radius: 7px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .submit-button:hover {
            background: #1d4ed8;
        }

        /* Tablet */
        @media (max-width: 768px) {
            .container {
                margin: 25px auto;
            }

            .registration-card {
                padding: 24px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full-width {
                grid-column: auto;
            }
        }

        /* Mobile */
        @media (max-width: 480px) {
            .page-header {
                padding: 20px 15px;
            }

            .page-header h1 {
                font-size: 22px;
            }

            .container {
                padding: 0 12px;
                margin: 18px auto;
            }

            .registration-card {
                padding: 18px;
                border-radius: 8px;
            }

            .form-title {
                font-size: 20px;
            }

            .submit-button {
                width: 100%;
            }

            .form-actions {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<header class="page-header">
    <h1>Student Registration System</h1>
    <p>College of Information Technology</p>
</header>

<main class="container">

    <div class="registration-card">

        <h2 class="form-title">Student Registration</h2>

        <p class="form-description">
            Please provide the required student information below.
        </p>

        <form
            action="{{ route('students.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            {{-- Student Information --}}
            <section class="form-section">

                <h3 class="section-title">
                    Student Information
                </h3>

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
                            placeholder="Enter student ID"
                        >
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
                            placeholder="student@example.com"
                        >
                    </div>

                </div>

            </section>


            {{-- Personal Information --}}
            <section class="form-section">

                <h3 class="section-title">
                    Personal Information
                </h3>

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
                            placeholder="Enter first name"
                        >
                    </div>

                    <div class="form-group">
                        <label for="middle_name">
                            Middle Name
                        </label>

                        <input
                            type="text"
                            id="middle_name"
                            name="middle_name"
                            placeholder="Enter middle name"
                        >
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
                            placeholder="Enter last name"
                        >
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
                            placeholder="Enter mobile number"
                        >
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
                        >
                    </div>

                    <div class="form-group">
                        <label for="gender">
                            Gender
                            <span class="required">*</span>
                        </label>

                        <select
                            id="gender"
                            name="gender"
                        >
                            <option value="">
                                Select gender
                            </option>

                            <option value="Male">
                                Male
                            </option>

                            <option value="Female">
                                Female
                            </option>

                            <option value="Other">
                                Other
                            </option>

                            <option value="Prefer not to say">
                                Prefer not to say
                            </option>
                        </select>
                    </div>

                </div>

            </section>


            {{-- Academic Information --}}
            <section class="form-section">

                <h3 class="section-title">
                    Academic Information
                </h3>

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
                            placeholder="Enter academic program"
                        >
                    </div>

                    <div class="form-group">
                        <label for="year_level">
                            Year Level
                            <span class="required">*</span>
                        </label>

                        <input
                            type="number"
                            id="year_level"
                            name="year_level"
                            min="1"
                            placeholder="Enter year level"
                        >
                    </div>

                </div>

            </section>


            {{-- Address and Profile --}}
            <section class="form-section">

                <h3 class="section-title">
                    Address & Profile
                </h3>

                <div class="form-grid">

                    <div class="form-group full-width">
                        <label for="address">
                            Address
                            <span class="required">*</span>
                        </label>

                        <textarea
                            id="address"
                            name="address"
                            placeholder="Enter complete address"
                        ></textarea>
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
                            accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                        >

                        <span class="field-note">
                            Accepted formats: JPG, JPEG, and PNG.
                        </span>
                    </div>

                </div>

            </section>


            <div class="form-actions">

                <button
                    type="submit"
                    class="submit-button"
                >
                    Register Student
                </button>

            </div>

        </form>

    </div>

</main>

</body>
</html>