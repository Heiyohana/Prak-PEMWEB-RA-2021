<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Member of GBKP Bekasi</title>
        <link rel="stylesheet" type="text/css" href="../css/indexStyle.css">

        <header style="background-image: url(../asset/header-blue.jpg);">
            <a><b>Permata GBKP Bekasi</b></a>
        </header>

        <nav class="navbar"> <!--Ini untuk mengklasifikasikan navigasi yang paling atas-->
            <a href = "../html/home.html"><strong>Beranda</strong> </a>
            <a href = "../php/index.php"><strong>Join Member</strong> </a>
            <a href = ""><strong>History</strong></a>
        </nav>

        <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            loadData();

            $("#contentData").on("click", "#addButton", function() {
                $.ajax({
                    url: 'add.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            $("#contentData").on("click", "#EditButton", function() {
                var id = $(this).attr("value");
                $.ajax({
                    url: 'edit.php',
                    type: 'get',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            $("#contentData").on("click", "#cancelButton", function() {
                loadData();
            });

            $("#contentData").on("submit", "#formAdd", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            $("#contentData").on("submit", "#formEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            $("#contentData").on("click", "#DeleteButton", function() {
                var id = $(this).attr("value");
                $.ajax({
                    url: 'service.php?action=delete',
                    type: 'post',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });
        })

        function loadData() {
            $.ajax({
                url: 'data.php',
                type: 'get',
                success: function(data) {
                    $('#contentData').html(data);
                }
            });
        }
    </script>

    </head>

    <body>
        <div>
            <br>
            <h2>Pendataan Member PERMATA GBKP Bekasi</h2>
            <div id="contentData"></div>
        </div>
    </body>

    <footer class="footer">
        <a href='#top'> Back to Top Page </a>
        <p>Copyright &#169 2021 - Hendamia Yohana Sembiring</p>
    </footer>
</html>