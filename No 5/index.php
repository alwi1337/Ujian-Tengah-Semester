<!DOCTYPE html>
<html>

<head>
    <title>Baca Excel Gratis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Program Membaca File Excel </a>
        </div>
    </nav>
    <div class="container mt-5">
        <br />
        <h3 align="center">Read File Excel Using PHP</h3>
        <h6 align="center">Muhammad Alwi Shihab - 20050974072</h6>
        <br />
        <div class="table-responsive">
            <span id="message"></span>
            <form method="post" id="load_excel_data" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td width="25%" align="right">Choose File</td>
                        <td width="50%"><input type="file" id="select_excel" name="select_excel" /></td>
                        <td width="25%"><input type="submit" id="load" name="load" class="btn btn-primary" /></td>
                    </tr>
                </table>
            </form>
            <br />
            <table class="table" id="show_excel_data">
                <!-- // Loading data  -->

            </table>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>


</html>

<script>
$(document).ready(function() {
    $('#load_excel_data').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: "fetch_rquest.php",
            method: "POST",
            data: new FormData(this), // It automatically capture form data 
            contentType: false, // contentType When sending data to the server, use this content type.
            cache: false,
            processData: false,
            success: function(data) {
                $('#show_excel_data').html(data);
                $('table').css('width', '100%');
            }
        })
    });
});
</script>