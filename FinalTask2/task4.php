<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Of Birth</title>
</head>
<body>
    <fieldset>
        <legend>Date of Birth</legend>
        dd &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;mm &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;yyyy <br>
        <input id="day" type="text"size="2px">/<input id="month" type="text"size="2px">/<input id="year" type="text"size="2px">
        <hr>
        <button onclick="checkdate()">Submit</button>
    </fieldset>
    <h4 id="message"></h4>
    <script>
            function checkdate(){
            
            let day = document.getElementById("day").value;
            let month = document.getElementById("month").value;
            let year = document.getElementById("year").value;

			if (!day|| !month|| !year)
			{
			    document.getElementById('message').innerHTML = "Date can not be empty";
			
            for (let i = 0; i < day.length; i++) {
                if (!checkChar(day[i])) {
                    document.getElementById('message').innerHTML = "Day can only contain digits.";
                    return;
                }
            }
            for (let i = 0; i < month.length; i++) {
                if (!checkChar(month[i])) {
                    document.getElementById('message').innerHTML = "Month can only contain digits.";
                    return;
                }
            }
            for (let i = 0; i < year.length; i++) {
                if (!checkChar(year[i])) {
                    document.getElementById('message').innerHTML = "Year can only contain digits.";
                    return;
                }
            }
            }

            else if (day > 31 || day < 1 || day === "") {
                document.getElementById('message').innerHTML = "Invalid day";
                return;
            }

           else if (month > 12 || month < 1 || month === "") {
            document.getElementById('message').innerHTML = "Invalid Month";
                return;
            }

           else if (year.length !== 4 || year === "") {
            document.getElementById('message').innerHTML = "Invalid Year";
                return;
            }else{
                document.getElementById('message').innerHTML = "Form Submitted Successfully";  
            }

           
        }
        function checkChar(ch) {
            if(ch >= '0' && ch <= '9'){
                return true;
            }
            
        }
    
    </script>
</body>
</html>