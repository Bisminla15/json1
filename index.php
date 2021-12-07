<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
    <button id="btnJSON1"> JSON 1</button>
    Name : <span id="fname"></span> <br/>
    Sname : <span id="lname"></span>
</body>
<script>
    function loadJSOn(){
        var url = "https://cj-android-demon.herokuapp.com/json1.php";
        
        $.getJSON(url)
            .done((data)=>{
                console.log(data);
                $("#fname").text(data.fname);
            })
            .fail((xhr, status, err)=>{

            });
    }
    
    $(()=>{
        $("#btnJSON1").click(loadJSON);
    });
</script>
</html>
