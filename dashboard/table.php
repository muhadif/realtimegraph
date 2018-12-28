<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <script src="jQuery-3.1.1.min.js"></script>

    <script src="script.js" ></script>

    <script>

        window.onload = function () {
            var updateInterval = 1000;
            var dataLength = 20; // number of dataPoints visible at any point
            var x = 20;
            var table = document.getElementById("myTable");

            var data = document.getElementById("dom-target");
            var time = document.getElementById("dom-target-time");

            var x = 0;
            var updateTable = function (count) {
                    var row = table.insertRow(table.rows.length);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    cell1.innerHTML = x+1;
                    cell2.innerHTML = data.innerText;
                    cell3.innerText = time.innerText;
                    x++;

                }
            updateTable(dataLength);
            setInterval(function(){updateTable()}, updateInterval);

        }
    </script>
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Check Your Water</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">

</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/checkyourwater/dashboard/">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/checkyourwater/dashboard/table.php">
                            <span data-feather="book"></span>
                            Tabel <span class="sr-only"></span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Table</h1>
            </div>

            <table id="myTable" class="table table-bordered text-center">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Turbidity</th>
                    <th scope="col">Time</th>
                </tr>
                </thead>
                <tbody>


                </tbody>
            </table>


            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
            <div id="dom-target" style="display: none">0</div>
            <div id="dom-target-avg" style="display:none ">0</div>

            <div id="dom-target-time" style="display:none ">sa</div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    </div>
    </main>
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>-->
<!--    <script src="../../../../assets/js/vendor/popper.min.js"></script>-->
<!--    <script src="../../../../dist/js/bootstrap.min.js"></script>-->

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>


</body>
</html>
