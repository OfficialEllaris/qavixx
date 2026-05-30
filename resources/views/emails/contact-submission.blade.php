<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} Priority Intake: {{ $data['case_type'] }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000000;
            color: #d1d5db;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .wrapper {
            background-color: #000000;
            padding: 40px 15px;
            width: 100%;
        }
        .container {
            max-width: 640px;
            margin: 0 auto;
            background-color: #0a0a0a;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.08);
            position: relative;
        }
        .top-glow {
            height: 2px;
            background: linear-gradient(90deg, transparent, #e2a154, transparent);
            width: 100%;
        }
        .header {
            background-color: #050505;
            padding: 40px 30px 30px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            background-image: radial-gradient(circle at top, rgba(226, 161, 84, 0.08) 0%, transparent 60%);
        }
        .logo {
            max-height: 65px;
            display: inline-block;
            margin-bottom: 20px;
        }
        .security-badge {
            display: inline-block;
            background-color: rgba(34, 197, 94, 0.08);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.25);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 10px;
            font-family: 'Space Grotesk', monospace;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
        }
        .security-badge span {
            display: inline-block;
            width: 6px;
            height: 6px;
            background-color: #22c55e;
            border-radius: 50%;
            margin-right: 6px;
            vertical-align: middle;
            margin-top: -2px;
        }
        .content {
            padding: 35px 30px;
        }
        .title-wrapper {
            margin-bottom: 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding-bottom: 20px;
        }
        .title {
            color: #ffffff;
            font-size: 22px;
            font-weight: 400;
            margin: 0;
            letter-spacing: -0.5px;
        }
        .title strong {
            font-weight: 700;
            color: #e2a154;
        }
        .data-grid {
            width: 100%;
            margin-bottom: 15px;
        }
        .data-row {
            margin-bottom: 25px;
        }
        .data-label {
            font-family: 'Space Grotesk', monospace;
            font-size: 10px;
            color: #8c93a1;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 8px;
            display: block;
        }
        .data-value {
            font-size: 16px;
            color: #f3f4f6;
            background-color: #111111;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 16px 20px;
            line-height: 1.5;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.3);
        }
        .data-value.highlight {
            border-left: 3px solid #e2a154;
            color: #ffffff;
            font-weight: 500;
            background-color: rgba(226, 161, 84, 0.05);
        }
        .message-box {
            white-space: pre-wrap;
            font-size: 15px;
            color: #e5e7eb;
            line-height: 1.7;
            background-color: #111111;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 24px;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.3);
        }
        .footer {
            background-color: #050505;
            padding: 30px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }
        .footer-terminal {
            font-family: 'Space Grotesk', monospace;
            font-size: 11px;
            color: #555555;
            line-height: 1.8;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .footer-terminal span {
            color: #e2a154;
        }
        
        /* Mobile Responsiveness */
        @media only screen and (max-width: 600px) {
            .col {
                display: block !important;
                width: 100% !important;
            }
            .col-spacer {
                display: block !important;
                height: 0px !important;
                width: 100% !important;
            }
            .content {
                padding: 25px 20px !important;
            }
            .header {
                padding: 30px 20px 25px !important;
            }
            .footer {
                padding: 25px 20px !important;
            }
            .wrapper {
                padding: 20px 10px !important;
            }
        }
    </style>
</head>
<body>
    <table width="100%" cellpadding="0" cellspacing="0" role="presentation" class="wrapper">
        <tr>
            <td align="center">
                <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                    <tr>
                        <td class="top-glow"></td>
                    </tr>
                    <tr>
                        <td class="header">
                            <img src="{{ $message->embed(public_path('images/logo.png')) }}" alt="{{ config('app.name') }} Logo" class="logo">
                            <br>
                            <div class="security-badge">
                                <span></span> 256-Bit Encrypted Transmission
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="content">
                            <div class="title-wrapper">
                                <h2 class="title">New Intake <strong>Dossier</strong></h2>
                            </div>
                            
                            <div class="data-row">
                                <span class="data-label">Incident Classification</span>
                                <div class="data-value highlight">{{ $data['case_type'] }}</div>
                            </div>
                            
                            <table class="data-grid" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td width="48%" valign="top" class="col">
                                        <div class="data-row">
                                            <span class="data-label">Client Identifier</span>
                                            <div class="data-value">{{ $data['name'] }}</div>
                                        </div>
                                    </td>
                                    <td width="4%" class="col-spacer"></td>
                                    <td width="48%" valign="top" class="col">
                                        <div class="data-row">
                                            <span class="data-label">Secure Routing (Email)</span>
                                            <div class="data-value">{{ $data['email'] }}</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            @if(!empty($data['phone']))
                            <div class="data-row">
                                <span class="data-label">Direct Line (Phone)</span>
                                <div class="data-value">{{ $data['phone'] }}</div>
                            </div>
                            @endif

                            <div class="data-row" style="margin-bottom: 0;">
                                <span class="data-label">Case Details & Evidence</span>
                                <div class="message-box">{{ $data['message'] }}</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="footer">
                            <p class="footer-terminal">
                                // CLASSIFIED CONFIDENTIAL // <br>
                                GENERATED VIA QAVIXX SECURE INTAKE PORTAL <br>
                                <span>TIMESTAMP: {{ now()->format('Y-m-d\TH:i:s\Z') }}</span>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
