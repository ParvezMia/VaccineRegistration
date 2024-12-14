<!DOCTYPE html>
<html>

<head>
    <title>Vaccination Appointment Scheduled</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: #4CAF50;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        .details {
            background: #f4f4f4;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .details ul {
            list-style: none;
            padding: 0;
        }

        .details li {
            margin: 10px 0;
        }

        .details strong {
            color: #333;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-top: 20px;
            padding: 10px;
            border-top: 1px solid #e0e0e0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Vaccination Appointment Scheduled</h1>
        </div>
        <div class="content">
            <p>Dear <b>{{ $user->name }}</b>,</p>
            <p>We are pleased to inform you that your vaccination appointment has been scheduled.</p>
            <div class="details">
                <h2><b>Appointment Details</b></h2>
                <ul>
                    <li><strong>Date:</strong> {{ $scheduleDateTime->format('l, F j, Y') }}</li>
                    <li><strong>Time:</strong> {{ $scheduleDateTime->format('g:i A') }}</li>
                    <li><strong>Location:</strong> {{ $vaccineCenter->name }}</li>
                </ul>
            </div>
            <p>Please arrive at least <b>15 minutes before</b> your scheduled time. Bring a <b>valid ID</b> and your
                registration
                confirmation.</p>
            <p>If you have any questions or need to reschedule, please contact our vaccination center.</p>
            <p>Best regards,<br>Vaccination Team</p>
        </div>
        <div class="footer">
            &copy; 2024 Vaccination Center. All rights reserved.
        </div>
    </div>
</body>

</html>
