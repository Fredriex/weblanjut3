<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Aritmatika</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <form>
       Nilai I <input type="number" id="nilai1" name="nilai1"><br>
       Nilai II <input type="number" id="nilai2" name="nilai2"><br>
       <input type="button" id="kirim1" value="+">
       <input type="button" id="kirim2" value="-">
       <input type="button" id="kirim3" value="x">
       <input type="button" id="kirim4" value="/">

       <div id="hasil"></div>

       <script>
        $(document).ready(function(){

        $("#kirim1").click(function(){
            var x = $("#nilai1").val();
            var y = $("#nilai2").val();
            $("#hasil").load("http://localhost/weblanjut3/x/tambah/" + x + "/" + y);
            alert("Sukses");
        });

        $("#kirim2").click(function(){
            var x = $("#nilai1").val();
            var y = $("#nilai2").val();
            $("#hasil").load("http://localhost/weblanjut3/x/kurang/" + x + "/" + y);
            alert("Sukses");
        });

        $("#kirim3").click(function(){
            var x = $("#nilai1").val();
            var y = $("#nilai2").val();
            $("#hasil").load("http://localhost/weblanjut3/x/kali/" + x + "/" + y);
            alert("Sukses");
        });

        $("#kirim4").click(function(){
            var x = $("#nilai1").val();
            var y = $("#nilai2").val();
            $("#hasil").load("http://localhost/weblanjut3/x/bagi/" + x + "/" + y);
            alert("Sukses");
        });
        });
       </script>
    </form>
</body>
</html>