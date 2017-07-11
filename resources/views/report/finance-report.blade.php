<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Simple Financial Management System </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th, td {
            border: 1px solid #7FDBFF;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .footer {
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 50px;
            background-color: #6600CC;
        }
        .noborders td {
            border:0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <table cellpadding="0">
            <tr>
                <td>
                    <p>
                        Strummels Investment<br>
                        Nairobi,<br>
                        Kenya.
                    </p>
                </td>
                <td>
                    <p style="text-align: center; font-size: 17px; color: #0083ff">Missions</p>
                    Being the investment company of choice in every household in Africa.
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="container">
    <div class="row">

        <h3 style="text-align: center; color: #0083ff">Submitted Forms by Investors</h3>
        <table>
            <tr>
                <th style="text-align: center">First Name</th>
                <th style="text-align: center">Last Name</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Phone Number</th>
                <th style="text-align: center">Id Number</th>
            </tr>
            @foreach($financeUserDetails as $detail)
            <tr>
                <td style="text-align: center"> {{ $detail->first_name}} </td>
                <td style="text-align: center"> {{ $detail->last_name }} </td>
                <td style="text-align: center"> {{ $detail->email}}</td>
                <td style="text-align: center"> {{ $detail->phone_number }}</td>
                <td style="text-align: center"> {{ $detail->id_number }} </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="container">
    <div class="row"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <p style="text-align: center">Copyright &copy; <?php echo date("Y"); ?> Simple Financial Management System</p>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
</body>
</html>