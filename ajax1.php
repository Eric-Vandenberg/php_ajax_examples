<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Example 1, straight html</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
function loaddiv()
{
    console.log("Initiating file load of target1.html");
    var url_var = 'targets/target1.html'; //the url that will be loaded from
    var data_var = {id: 3}; //some data to send to the server.  Not always needed.  Must be passed as an object with key:value pairs if you do it this way
    var datatype_var = 'text'; //will be used to tell our ajax call to expect the RESPONSE in a particular format. 
    $.ajax({
        url: url_var, 
        data: data_var, 
        dataType: datatype_var, 
        success: function(response){
            //this function is called when the ajax call succeeds and the information from the server is retrieved.
            console.log("response = ",response);
            $("#target_div").html(response);
        }
    });
}
    </script>
</head>
<body>
<div id="target_div">
    The content will be loaded here
</div>
<button type="button" onclick="loaddiv()">Load contents</button>


</body>
</html>