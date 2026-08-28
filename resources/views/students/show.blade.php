<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

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
            max-width: 950px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .profile-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }

        .profile-top {
            padding: 32px;
            text-align: center;
            border-bottom: 1px solid #e5e7eb;
        }

        .profile-picture {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #1e3a8a;
            margin-bottom: 18px;
        }

        .student-name {
            font-size: 26px;
            color: #111827;
            margin-bottom: 7px;
        }

        .student-id {
            color: #6b7280;
            font-size: 14px;
        }

        .profile-content {
            padding: 32px;
        }

        .section-title {
            font-size: 18px;
            color: #1e3a8a;
            margin-bottom: 18px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .info-item {
            background: #f9fafb;
            border-radius: 8px;
            padding: 15px;
        }

        .info-item.full-width {
            grid-column: 1 / -1;
        }

        .info-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            color: #6b7280;
            margin-bottom: 6px;
        }

        .info-value {
            font-size: 15px;
            color: #111827;
            word-break: break-word;
        }

        .actions {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .button {
            display: inline-block;
            background: #1e3a8a;
            color: white;
            padding: 12px 25px;
            border-radius: 7px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .button:hover {
            background: #1d4ed8;
        }

        @media (max-width: 768px) {
            .container {
                margin: 25px auto;
            }

            .profile-top,
            .profile-content {
                padding: 24px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-item.full-width {
                grid-column: auto;
            }
        }

        @media (max-width: 480px) {
            .page-header {
                padding: 20px 15px;
            }

            .page-header h1 {
                font-size: 22px;
            }

            .container {
                margin: 18px auto;
                padding: 0 12px;
            }

            .profile-top,
            .profile-content {
                padding: 20px;
            }

            .profile-picture {
                width: 110px;
                height: 110px;
            }

            .student-name {
                font-size: 22px;
            }

            .button {
                width: 100%;
                text-align: center;
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

    <div class="profile-card">

        <div class="profile-top">

            <img
                src="{{ asset('storage/' . $student->profile_picture) }}"
                alt="Profile picture of {{ $student->first_name }}"
                class="profile-picture"
            >

            <h2 class="student-name">
                {{ $student->first_name }}

                @if($student->middle_name)
                    {{ $student->middle_name }}
                @endif

                {{ $student->last_name }}
            </h2>

            <p class="student-id">
                Student ID: {{ $student->student_id }}
            </p>

        </div>


        <div class="profile-content">

            <h3 class="section-title">
                Personal Information
            </h3>

            <div class="info-grid">

                <div class="info-item">
                    <span class="info-label">Email Address</span>

                    <span class="info-value">
                        {{ $student->email }}
                    </span>
                </div>

                <div class="info-item">
                    <span class="info-label">Mobile Number</span>

                    <span class="info-value">
                        {{ $student->mobile_number }}
                    </span>
                </div>

                <div class="info-item">
                    <span class="info-label">Date of Birth</span>

                    <span class="info-value">
                        {{ $student->date_of_birth }}
                    </span>
                </div>

                <div class="info-item">
                    <span class="info-label">Gender</span>

                    <span class="info-value">
                        {{ $student->gender }}
                    </span>
                </div>

            </div>


            <h3 class="section-title">
                Academic Information
            </h3>

            <div class="info-grid">

                <div class="info-item">
                    <span class="info-label">Program</span>

                    <span class="info-value">
                        {{ $student->program }}
                    </span>
                </div>

                <div class="info-item">
                    <span class="info-label">Year Level</span>

                    <span class="info-value">
                        {{ $student->year_level }}
                    </span>
                </div>

            </div>


            <h3 class="section-title">
                Address
            </h3>

            <div class="info-grid">

                <div class="info-item full-width">
                    <span class="info-label">Complete Address</span>

                    <span class="info-value">
                        {{ $student->address }}
                    </span>
                </div>

            </div>


            <div class="actions">

                <a
                    href="{{ route('students.create') }}"
                    class="button"
                >
                    Register Another Student
                </a>

            </div>

        </div>

    </div>

</main>

</body>
</html>