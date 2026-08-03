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
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#4facfe,#00f2fe);
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .container{
            background:#fff;
            width:500px;
            padding:30px;
            border-radius:15px;
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
        }

        h1{
            text-align:center;
            color:#0d6efd;
            margin-bottom:25px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        td{
            padding:12px;
            border-bottom:1px solid #ddd;
        }

        td:first-child{
            font-weight:bold;
            width:40%;
            color:#333;
        }

        td:last-child{
            color:#555;
        }

        .footer{
            text-align:center;
            margin-top:20px;
            color:#666;
            font-size:14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Student Information</h1>

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
        Laravel Homepage Activity
    </div>
</div>

</body>
</html>