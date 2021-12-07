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

    <table>
        <thead>
            <tr>
                <th>ID</th><th>First Name</th><th>Last Name</th>
            </tr>
        </thead>
        <tbody id="tblStudent">
        </tbody>
    </table>
</body>
<script>
    function loadJSON(){
        var url = "https://cj-android-demon.herokuapp.com/json2.php";
        
        $.getJSON(url)
            .done((data)=>{
                console.log(data)
                $.each(data, (k, item)=>{
                    console.log(k);
                    console.log(item);
                    var line = "<tr>";
                        line += "<td>" + (k+1) + "</td>"
                        line += "<td>" + item.fname + "</td>"
                        line += "<td>" + item.lname + "</td>"
                        line += "</tr>";
                    $("#tdlData").append(line);
                });
            })
            .fail((xhr, status, err)=>{

            });
    }

    $(()=>{
        loadJSON();
    });
</script>
