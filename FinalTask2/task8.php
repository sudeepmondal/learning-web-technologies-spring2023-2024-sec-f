<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Profile</title>
</head>
<body>
    <form id="personProfileForm">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male"> Male
        <input type="radio" id="female" name="gender" value="Female"> Female
        <input type="radio" id="other" name="gender" value="Other"> Other<br>

        <label for="dob">Date of Birth:</label><br>
        <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy"><br>

        <label for="bloodGroup">Blood Group:</label><br>
        <select id="bloodGroup" name="bloodGroup">
            <option value="">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br>

        <label for="degree">Degree:</label><br>
        <input type="checkbox" id="ssc" name="degree" value="SSC"> SSC
        <input type="checkbox" id="hsc" name="degree" value="HSC"> HSC
        <input type="checkbox" id="bsc" name="degree" value="BSc."> BSc.
        <input type="checkbox" id="msc" name="degree" value="MSc."> MSc.<br>

        <label for="photo">Photo:</label><br>
        <input type="file" id="photo" name="photo"><br>

        <span id="error" style="color: red;"></span><br>

        <input type="button" value="Submit" onclick="validateForm()">
        <input type="reset" value="Reset">
    </form>

    <script>
        function validateForm() {
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let gender = document.querySelector('input[name="gender"]:checked');
            let dob = document.getElementById("dob").value.trim();
            let bloodGroup = document.getElementById("bloodGroup").value;
            let degrees = document.querySelectorAll('input[name="degree"]:checked');
            let photo = document.getElementById("photo").value.trim();

            let errorSpan = document.getElementById("error");
            errorSpan.innerHTML = "";

            if (!name || name.split(' ').length < 2) {
                errorSpan.innerHTML = "Name cannot be empty and must contain at least two words";
                return;
            }

            if (!email) {
                errorSpan.innerHTML = "Email cannot be empty";
                return;
            }

            if (!gender) {
                errorSpan.innerHTML = "Gender must be selected";
                return;
            }

            if (!dob || !isValidDate(dob)) {
                errorSpan.innerHTML = "Invalid date of birth format. Please use dd/mm/yyyy";
                return;
            }

            if (!bloodGroup) {
                errorSpan.innerHTML = "Blood Group must be selected";
                return;
            }

            if (degrees.length === 0) {
                errorSpan.innerHTML = "At least one degree must be selected";
                return;
            }

            if (!photo) {
                errorSpan.innerHTML = "Photo must be selected";
                return;
            }

            // If all validation passed, you can submit the form or perform other actions
            document.getElementById("personProfileForm").submit();
        }

        function isValidDate(dateString) {
            // Check if the date string is in the format dd/mm/yyyy
            let parts = dateString.split("/");
            if (parts.length !== 3) return false;
            let day = parseInt(parts[0], 10);
            let month = parseInt(parts[1], 10);
            let year = parseInt(parts[2], 10);
            if (isNaN(day) || isNaN(month) || isNaN(year)) return false;
            if (day < 1 || day > 31 || month < 1 || month > 12) return false;
            return true;
        }
    </script>
</body>
</html>
