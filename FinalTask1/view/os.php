<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop Management System</title>
</head>
<body>
    <h2>System Admin Panel</h2>
    <h3>Register New Employee</h3>
    <form action="admin.php?action=register" method="post">
        <label for="emp_name">Employee Name:</label>
        <input type="text" id="emp_name" name="emp_name" required><br><br>
        <label for="emp_contact">Contact No:</label>
        <input type="text" id="emp_contact" name="emp_contact" required><br><br>
        <label for="emp_username">Username:</label>
        <input type="text" id="emp_username" name="emp_username" required><br><br>
        <label for="emp_password">Password:</label>
        <input type="password" id="emp_password" name="emp_password" required><br><br>
        <input type="submit" value="Register Employee">
    </form>

    <h3>Update Employee Information</h3>
    <form action="admin.php?action=update" method="post">
        <label for="search_emp_username">Search by Username:</label>
        <input type="text" id="search_emp_username" name="search_emp_username" required>
        <input type="submit" value="Search">
    </form>

    <h3>Delete Employee</h3>
    <form action="admin.php?action=delete" method="post">
        <label for="delete_emp_username">Username:</label>
        <input type="text" id="delete_emp_username" name="delete_emp_username" required>
        <input type="submit" value="Delete">
    </form>

    <hr>

    <h2>Employee Panel</h2>
    <h3>Add New Product</h3>
    <form action="employee.php?action=add_product" method="post">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br><br>
        <input type="submit" value="Add Product">
    </form>

    <h3>Edit Product</h3>
    <form action="employee.php?action=edit_product" method="post">
    <table border="1">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Product 1</td>
                <td>10</td>
                <td>$50.00</td>
                <td><input type="submit" value="Edit"></td>
            </tr>
            <tr>
                <td>Product 2</td>
                <td>20</td>
                <td>$30.00</td>
                <td><input type="submit" value="Edit"></td>
            </tr>
            <tr>
                <td>Product 3</td>
                <td>15</td>
                <td>$40.00</td>
                <td><input type="submit" value="Edit"></td>
            </tr>
        </tbody>
    </table>
</form>

    </form>

    <h3>Delete Product</h3>
    <form action="employee.php?action=delete_product" method="post">
    <table border="1">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Product 1</td>
                <td>10</td>
                <td>$50.00</td>
                <td><input type="submit" value="Delete"></td>
            </tr>
            <tr>
                <td>Product 2</td>
                <td>20</td>
                <td>$30.00</td>
                <td><input type="submit" value="Delete"></td>
            </tr>
            <tr>
                <td>Product 3</td>
                <td>15</td>
                <td>$40.00</td>
                <td><input type="submit" value="Delete"></td>
            </tr>
        </tbody>
    </table>
</form>

    </form>
</body>
</html>
