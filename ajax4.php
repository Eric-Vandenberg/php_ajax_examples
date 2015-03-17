<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Example 4, straight html</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
function loaddiv()
{
    console.log("Initiating file load of target4.php");
    var url_var = 'targets/target4.php'; //the url that will be loaded from
    var data_var = {location: $("#location").val()}; //some data to send to the server.  Not always needed.  Must be passed as an object with key:value pairs if you do it this way
    var dataType_var = 'json'; //will be used to tell our ajax call to expect the RESPONSE in a particular format.  Note we have changed it to json so that AJAX will know to expect that type.
    $.ajax({
        //enter appropriate data for ajax call, including the url, the dataType, and outgoing data
        method: 'post', //specify that the data will be sent via POST rather than GET
        success: function(response){
            //this function is called when the ajax call succeeds and the information from the server is retrieved.
            console.log("response = ",response);
            console.log('response.success = ',response.success);
            if(response.success==true)
            {
                alert(response.message);
                $("#target_div").html(response.html);
            }
        }
    });
}
    </script>
</head>
<body>
<div id="target_div">
    The content will be loaded here
</div>
<select id="location">
    <option value="Irvine, Ca">Irvine, Ca</option>
    <option value="Woodland Hills, Ca">Woodland Hills, Ca</option>
    <option value="San Diego, Ca">San Diego, Ca</option>
</select>
<button type="button" onclick="loaddiv()">Load contents</button>


</body>
</html>