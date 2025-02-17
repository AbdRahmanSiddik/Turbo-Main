<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Baru untuk {{ $user['name'] }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table align="center" width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; background: #ffffff; margin: 20px auto; border-radius: 8px; box-shadow: 0px 2px 10px rgba(0,0,0,0.1);">
        <!-- Header -->
        <tr>
            <td align="center" style="background: #007bff; color: #ffffff; padding: 15px; font-size: 20px; font-weight: bold; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                🔑 Password Baru
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding: 20px;">
                <p style="font-size: 16px; color: #333;">Halo {{ $user['name'] }},</p>
                <p style="font-size: 14px; color: #555;">Berikut adalah password baru Anda:</p>

                <table width="100%" cellpadding="5" cellspacing="0" style="font-size: 14px; color: #333; border-collapse: collapse;">
                    <tr>
                        <td style="font-weight: bold; width: 120px;">Password</td>
                        <td>: {{ $password }}</td>
                    </tr>
                </table>

                <p style="font-size: 14px; color: #555; margin-top: 20px;">Silakan segera ganti password ini setelah login untuk keamanan akun Anda.</p>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td align="center" style="background: #007bff; color: #ffffff; padding: 15px; font-size: 12px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                &copy; {{ date('Y') }} Turbo-Main Community. All Rights Reserved.
            </td>
        </tr>
    </table>
</body>
</html>
