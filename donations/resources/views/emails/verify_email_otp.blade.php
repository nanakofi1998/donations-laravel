<!DOCTYPE html>
<html>
<head>
    <title>Bsystems DMS Account Verification</title>
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
            padding: 0;
            background-color: #ffffff;
        }
        .email-container {
            border: 1px solid #e1e1e1;
            border-radius: 4px;
            overflow: hidden;
        }
        .header {
            border-top: 4px solid #000000;
            border-bottom: 2px solid #e74c3c;
            padding: 20px;
            text-align: center;
            background-color: #ffffff;
        }
        .logo {
            max-width: 150px;
            height: auto;
        }
        .content {
            padding: 25px;
            background-color: #ffffff;
        }
        .otp-code {
            font-size: 24px;
            font-weight: bold;
            color: #e74c3c;
            letter-spacing: 2px;
            text-align: center;
            margin: 20px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 4px;
            display: inline-block;
        }
        .footer {
            border-top: 2px solid #e74c3c;
            border-bottom: 4px solid #000000;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #777777;
            background-color: #ffffff;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="./../../assets/images/bsystems_logo.png" class="logo">
            <h2 style="color: #000000; margin-top: 15px;">Email Verification</h2>
        </div>
        
        <div class="content">
            <p>Dear User,</p>
            <p>Thank you for registering with us. Please use the following One-Time Password (OTP) to verify your email address:</p>
            
            <div style="text-align: center;">
                <div class="otp-code">{{ $otp }}</div>
            </div>
            
            <p style="text-align: center;">This code will expire in 10 minutes.</p>
            
            <p>If you didn't request this code, you can safely ignore this email. Someone might have entered your email address by mistake.</p>
            
            <p style="margin-top: 30px;">Best regards,<br>The Team</p>
        </div>
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} Bsystems Limited. All rights reserved.</p>
            <p>If you have any questions, contact us at <a href="mailto:support@example.com" style="color: #e74c3c;">info@bsystemslimited.com</a></p>
        </div>
    </div>
</body>
</html>