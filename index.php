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
<button id="btnBack"> back </button>
<div id="main">
    <table>
        <thead>
            <tr>
                <th>ID</th> <th>Title</th><th> Details </th>
            </tr>
        </thead>
        <tbody id="tblPosts">
        </tbody>
    </table>
</div>
<div id="detail">
    {
        <br>  "postId": 1,</br>
        <br>  "id": 1,</br>
        <br>  "name": "id labore ex et quam laborum",</br>
        <br> "email": "Eliseo@gardner.biz",</br>
        <br> "body": "laudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium"</br>
    }
</div>
    
</body>
<script>
    function showDetails(id){
        $("#main").hide();
        $("#detail").show();
        var url = "https://jsonplaceholder.typicode.com/posts/"+id;
        $.getJSON(url)
            .done((data)=>{
                console.log(data);
            })
            .fail((xhr, status, error)=>{
            })
    }
    function loadPosts(){
        $("#main").show();
        $("#details").hide();
        
        var url = "https://jsonplaceholder.typicode.com/posts";
        $.getJSON(url)
            .done((data)=>{
                $.each(data, (k, item)=>{
                    console.log(item);
                    var line = "<tr>";
                        line += "<td>"+ item.id + "</td>";
                        line += "<td><b>"+ item.title + "</b><br/>";
                        line += item.body + "</td>";
                        line += "<td> <button onClick='showDetails("+ item.id +");' > link </button> </td>";
                        line += "</tr>";
                    $("#tblPosts").append(line);
                });
                $("#main").show();
            })
            .fail((xhr, status, error)=>{
            })
    }
    $(()=>{
        loadPosts();
        $("#btnBack").click(()=>{
            $("#main").show();
        });
    })
</script>
</html>
