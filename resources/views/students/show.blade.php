<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >

    <title>Student Profile</title>

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

            --border: #e2e8f0;
            --background: #f1f5f9;

            --success: #15803d;
            --success-bg: #f0fdf4;
            --success-border: #bbf7d0;

            --shadow:
                0 20px 50px rgba(15, 23, 42, 0.08);
        }

        body {
            font-family: Arial, Helvetica, sans-serif;

            background:
                linear-gradient(
                    180deg,
                    #eaf1ff 0,
                    #f8fafc 330px,
                    #f1f5f9 100%
                );

            min-height: 100vh;

            color: var(--text);
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
            padding: 38px 20px 80px;
            text-align: center;
        }

        .header-icon {
            width: 58px;
            height: 58px;

            margin: 0 auto 14px;

            border-radius: 17px;

            background: rgba(255,255,255,0.13);
            border: 1px solid rgba(255,255,255,0.2);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 27px;
        }

        .page-header h1 {
            font-size: clamp(26px, 4vw, 36px);
            margin-bottom: 8px;
        }

        .page-header p {
            opacity: 0.9;
            font-size: 14px;
        }

        /* =========================
           LAYOUT
        ========================== */

        .container {
            width: min(960px, calc(100% - 32px));
            margin: -45px auto 60px;
        }

        /* =========================
           SUCCESS
        ========================== */

        .success-alert {
            display: flex;
            align-items: center;
            gap: 13px;

            background: var(--success-bg);
            border: 1px solid var(--success-border);
            border-left: 4px solid var(--success);

            border-radius: 12px;

            padding: 16px 18px;
            margin-bottom: 18px;

            color: #166534;

            box-shadow:
                0 8px 20px rgba(21,128,61,0.07);
        }

        .success-icon {
            width: 34px;
            height: 34px;
            min-width: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #dcfce7;
            border-radius: 50%;

            font-weight: 900;
            color: var(--success);
        }

        .success-text strong {
            display: block;
            font-size: 14px;
            margin-bottom: 2px;
        }

        .success-text span {
            font-size: 12px;
            color: #3f7453;
        }

        /* =========================
           PROFILE
        ========================== */

        .profile-card {
            background: white;

            border-radius: 20px;

            box-shadow: var(--shadow);

            overflow: hidden;

            border: 1px solid rgba(226,232,240,0.8);
        }

        .profile-hero {
            position: relative;

            background:
                linear-gradient(
                    135deg,
                    #f8fbff,
                    #edf4ff
                );

            text-align: center;

            padding: 46px 25px 34px;

            border-bottom: 1px solid var(--border);
        }

        .profile-picture-wrapper {
            position: relative;

            display: inline-block;

            margin-bottom: 18px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;

            border-radius: 50%;
            object-fit: cover;

            background: white;

            border: 5px solid white;

            box-shadow:
                0 0 0 4px var(--primary),
                0 10px 25px rgba(15,23,42,0.15);
        }

        .verified-dot {
            position: absolute;

            right: 7px;
            bottom: 9px;

            width: 30px;
            height: 30px;

            border-radius: 50%;

            background: #22c55e;
            border: 4px solid white;

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;
            font-weight: 900;
        }

        .student-name {
            color: var(--text-dark);

            font-size: clamp(24px, 4vw, 31px);

            margin-bottom: 7px;
        }

        .student-id {
            color: var(--text-light);

            font-size: 14px;
            margin-bottom: 13px;
        }

        .badges {
            display: flex;
            justify-content: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .badge {
            display: inline-flex;
            align-items: center;

            padding: 7px 12px;

            border-radius: 999px;

            background: var(--primary-soft);
            color: var(--primary);

            font-size: 12px;
            font-weight: 700;
        }

        .profile-content {
            padding: 36px 38px 40px;
        }

        /* =========================
           SECTIONS
        ========================== */

        .profile-section {
            margin-bottom: 34px;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 11px;

            padding-bottom: 13px;
            margin-bottom: 18px;

            border-bottom: 1px solid var(--border);
        }

        .section-icon {
            width: 36px;
            height: 36px;

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--primary-soft);

            font-size: 17px;
        }

        .section-title {
            color: var(--text-dark);
            font-size: 17px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }

        .info-card {
            background: #f8fafc;

            border: 1px solid #edf1f5;

            border-radius: 12px;

            padding: 17px 18px;

            min-width: 0;
        }

        .info-card.full-width {
            grid-column: 1 / -1;
        }

        .info-label {
            display: block;

            color: var(--text-light);

            font-size: 10px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 0.7px;

            margin-bottom: 7px;
        }

        .info-value {
            color: var(--text-dark);

            font-size: 14px;
            font-weight: 600;

            line-height: 1.45;

            overflow-wrap: anywhere;
        }

        /* =========================
           ACTIONS
        ========================== */

        .actions {
            border-top: 1px solid var(--border);

            padding-top: 25px;

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
        }

        .profile-note {
            color: var(--text-light);
            font-size: 11px;
            line-height: 1.5;
        }

        .button {
            display: inline-block;

            color: white;
            text-decoration: none;

            background:
                linear-gradient(
                    135deg,
                    #1e3a8a,
                    #2563eb
                );

            padding: 12px 21px;

            border-radius: 10px;

            font-size: 13px;
            font-weight: 700;

            box-shadow:
                0 7px 16px rgba(37,99,235,0.20);

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        .button:hover {
            transform: translateY(-1px);

            box-shadow:
                0 11px 22px rgba(37,99,235,0.25);
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
                padding-bottom: 70px;
            }

            .container {
                width: min(100% - 24px, 960px);
            }

            .profile-content {
                padding: 28px 24px 32px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-card.full-width {
                grid-column: auto;
            }

            .actions {
                flex-direction: column;
                align-items: stretch;
            }

            .profile-note {
                text-align: center;
            }

            .button {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 480px) {

            .page-header {
                padding-top: 28px;
            }

            .container {
                margin-top: -38px;
            }

            .profile-card {
                border-radius: 15px;
            }

            .profile-hero {
                padding:
                    36px 18px 28px;
            }

            .profile-picture {
                width: 120px;
                height: 120px;
            }

            .profile-content {
                padding: 25px 18px 28px;
            }

            .success-alert {
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

    <h1>
        Student Registration System
    </h1>

    <p>
        College of Information Technology
    </p>

</header>


<main class="container">


    {{-- ===================================
         SUCCESS MESSAGE
    ==================================== --}}

    @if(session('success'))

        <div class="success-alert">

            <div class="success-icon">
                <i class="fa-solid fa-check"></i>
            </div>

            <div class="success-text">

                <strong>
                    {{ session('success') }}
                </strong>

                <span>
                    The student's information has been saved successfully.
                </span>

            </div>

        </div>

    @endif


    <article class="profile-card">


        {{-- ===================================
             PROFILE HEADER
        ==================================== --}}

        <div class="profile-hero">

            <div class="profile-picture-wrapper">

                <img
                    src="{{ asset('storage/' . $student->profile_picture) }}"
                    alt="Profile picture of {{ $student->first_name }}"
                    class="profile-picture"
                >

                <div class="success-icon">
                    <i class="fa-solid fa-check"></i>
                </div>

            </div>


            <h2 class="student-name">

                {{ $student->first_name }}

                @if($student->middle_name)
                    {{ $student->middle_name }}
                @endif

                {{ $student->last_name }}

            </h2>


            <p class="student-id">
                Student ID:
                {{ $student->student_id }}
            </p>


            <div class="badges">

                <span class="badge">
                    {{ $student->program }}
                </span>


                <span class="badge">

                    @switch($student->year_level)

                        @case(1)
                            1st Year
                            @break

                        @case(2)
                            2nd Year
                            @break

                        @case(3)
                            3rd Year
                            @break

                        @case(4)
                            4th Year
                            @break

                        @case(5)
                            5th Year
                            @break

                        @case(6)
                            6th Year
                            @break

                        @default
                            Year {{ $student->year_level }}

                    @endswitch

                </span>

            </div>

        </div>


        <div class="profile-content">


            {{-- ===================================
                 PERSONAL INFORMATION
            ==================================== --}}

            <section class="profile-section">

                <div class="section-header">

                    <div class="section-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <h3 class="section-title">
                        Personal Information
                    </h3>

                </div>


                <div class="info-grid">

                    <div class="info-card">

                        <span class="info-label">
                            Email Address
                        </span>

                        <span class="info-value">
                            {{ $student->email }}
                        </span>

                    </div>


                    <div class="info-card">

                        <span class="info-label">
                            Mobile Number
                        </span>

                        <span class="info-value">
                            {{ $student->mobile_number }}
                        </span>

                    </div>


                    <div class="info-card">

                        <span class="info-label">
                            Date of Birth
                        </span>

                        <span class="info-value">
                            {{ $student->date_of_birth }}
                        </span>

                    </div>


                    <div class="info-card">

                        <span class="info-label">
                            Gender
                        </span>

                        <span class="info-value">
                            {{ $student->gender }}
                        </span>

                    </div>

                </div>

            </section>


            {{-- ===================================
                 ACADEMIC INFORMATION
            ==================================== --}}

            <section class="profile-section">

                <div class="section-header">

                    <div class="section-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>

                    <h3 class="section-title">
                        Academic Information
                    </h3>

                </div>


                <div class="info-grid">

                    <div class="info-card">

                        <span class="info-label">
                            Program
                        </span>

                        <span class="info-value">
                            {{ $student->program }}
                        </span>

                    </div>


                    <div class="info-card">

                        <span class="info-label">
                            Year Level
                        </span>

                        <span class="info-value">

                            @switch($student->year_level)

                                @case(1)
                                    1st Year
                                    @break

                                @case(2)
                                    2nd Year
                                    @break

                                @case(3)
                                    3rd Year
                                    @break

                                @case(4)
                                    4th Year
                                    @break

                                @case(5)
                                    5th Year
                                    @break

                                @case(6)
                                    6th Year
                                    @break

                                @default
                                    Year {{ $student->year_level }}

                            @endswitch

                        </span>

                    </div>

                </div>

            </section>


            {{-- ===================================
                 ADDRESS
            ==================================== --}}

            <section class="profile-section">

                <div class="section-header">

                    <div class="section-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <h3 class="section-title">
                        Address Information
                    </h3>

                </div>


                <div class="info-grid">

                    <div class="info-card full-width">

                        <span class="info-label">
                            Complete Address
                        </span>

                        <span class="info-value">
                            {{ $student->address }}
                        </span>

                    </div>

                </div>

            </section>


            {{-- ===================================
                 ACTIONS
            ==================================== --}}

            <div class="actions">

                <p class="profile-note">
                    Registration record successfully stored in the
                    Student Registration System.
                </p>


                <a
                    href="{{ route('students.create') }}"
                    class="button"
                >
                    + Register Another Student
                </a>

            </div>

        </div>

    </article>

</main>

</body>
</html>