<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
</head>
<body>
    <table>
        <tr>
            <td>Name</td>
        </tr>
        <tr>
            <td><input id="name" type="text"></td>
        </tr>
        <tr><td><button onclick="checkName()">Submit</button></td></tr>
        <tr><td><h1 id="message"></h1></td></tr>
    </table>
    <script>
        function checkName(){
            let name=document.getElementById('name').value;
            let nameLength=name.split(' ');
            if(!name){
                document.getElementById('message').innerHTML="name should not be null";
            }else if(!checkFirstChar(name[0])){
                document.getElementById('message').innerHTML = "name must start with a letter";
            }
            else if(nameLength.length <2){
                document.getElementById('message').innerHTML="Name should have 2 word";
            }
            for(let i=0; i<name.length; i++){
                if(checkChar(name[i])){}
                else document.getElementById('message').innerHTML = "name can only contain a-z or A-Z or dot or dash";
            }  
            
            function checkChar(ch){
            if(ch >= 'A' && ch <= 'Z' || ch >= 'a' && ch <= 'z' || ch == '.' || ch == '_' || ch == ' ') return true;
            }
            function checkFirstChar(ch){
            if(ch >= 'A' && ch <= 'Z' || ch >= 'a' && ch <= 'z') return true;
            }
        }
        
    </script>
</body>
</html>