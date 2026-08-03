<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Homepage</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Courier New', Courier, monospace;
        }

        body{
            background:radial-gradient(circle at 20% 20%, #1a1440 0%, #0a0a1a 45%, #050510 100%);
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            overflow:hidden;
            position:relative;
        }

        /* subtle floating stars */
        body::before{
            content:"";
            position:fixed;
            inset:0;
            background-image:
                radial-gradient(2px 2px at 20px 30px, #ffffff55, transparent),
                radial-gradient(2px 2px at 120px 80px, #ffffff33, transparent),
                radial-gradient(1px 1px at 90px 150px, #ffffff44, transparent),
                radial-gradient(2px 2px at 200px 220px, #ffffff2e, transparent),
                radial-gradient(1px 1px at 260px 60px, #ffffff40, transparent);
            background-repeat:repeat;
            background-size:300px 300px;
            animation:drift 60s linear infinite;
            pointer-events:none;
        }

        @keyframes drift{
            from{ background-position:0 0; }
            to{ background-position:-300px 300px; }
        }

        .container{
            background:rgba(15, 14, 35, 0.85);
            backdrop-filter:blur(10px);
            width:520px;
            max-width:90vw;
            padding:35px 30px;
            border-radius:14px;
            border:1px solid rgba(139, 92, 246, 0.35);
            box-shadow:
                0 0 25px rgba(139, 92, 246, 0.25),
                0 0 60px rgba(45, 212, 191, 0.08),
                0 10px 25px rgba(0,0,0,0.5);
            position:relative;
            z-index:1;
        }

        .terminal-bar{
            display:flex;
            gap:6px;
            margin-bottom:20px;
        }

        .terminal-bar span{
            width:11px;
            height:11px;
            border-radius:50%;
            display:inline-block;
        }

        .terminal-bar .red{ background:#ff5f56; }
        .terminal-bar .yellow{ background:#ffbd2e; }
        .terminal-bar .green{ background:#27c93f; }

        .prompt{
            color:#2dd4bf;
            font-size:13px;
            margin-bottom:6px;
            opacity:0.8;
        }

        .prompt::before{
            content:"> ";
            color:#a78bfa;
        }

        h1{
            text-align:left;
            color:#f5f3ff;
            margin-bottom:4px;
            font-size:22px;
            letter-spacing:0.5px;
        }

        h1 span{
            color:#a78bfa;
        }

        .subtitle{
            color:#7c7a9c;
            font-size:12px;
            margin-bottom:22px;
            border-bottom:1px dashed rgba(139, 92, 246, 0.3);
            padding-bottom:16px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        tr{
            transition:background 0.2s ease;
        }

        tr:hover{
            background:rgba(139, 92, 246, 0.08);
        }

        td{
            padding:12px 8px;
            border-bottom:1px solid rgba(139, 92, 246, 0.15);
            font-size:14px;
        }

        td:first-child{
            font-weight:bold;
            width:42%;
            color:#a78bfa;
        }

        td:first-child::before{
            content:"$ ";
            color:#2dd4bf;
            opacity:0.7;
        }

        td:last-child{
            color:#e5e3f5;
        }

        .footer{
            text-align:center;
            margin-top:24px;
            color:#5a5876;
            font-size:12px;
            letter-spacing:0.5px;
        }

        .footer .blink{
            color:#2dd4bf;
            animation:blink 1.2s step-start infinite;
        }

        @keyframes blink{
            50%{ opacity:0; }
        }

        @media (max-width:560px){
            .container{ padding:25px 20px; }
            h1{ font-size:19px; }
            td{ font-size:13px; padding:10px 6px; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="terminal-bar">
        <span class="red"></span>
        <span class="yellow"></span>
        <span class="green"></span>
    </div>

    <div class="prompt">whoami --student</div>
    <h1>Student <span>Information</span></h1>
    <div class="subtitle">Laravel Homepage Activity</div>

    <table>
        <tr>
            <td>Student Name</td>
            <td>{{ $studentName }}</td>
        </tr>

        <tr>
            <td>Student Number</td>
            <td>{{ $studentNumber }}</td>
        </tr>

        <tr>
            <td>Course</td>
            <td>{{ $course }}</td>
        </tr>

        <tr>
            <td>Section</td>
            <td>{{ $section }}</td>
        </tr>

        <tr>
            <td>Subject</td>
            <td>{{ $subject }}</td>
        </tr>

        <tr>
            <td>Current Date</td>
            <td>{{ $currentDate }}</td>
        </tr>
    </table>

    <div class="footer">
        <span class="blink">●</span> process exited with code 0
    </div>
</div>

</body>
</html>