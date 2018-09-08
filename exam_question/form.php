<!DOCTYPE html>
<html>
    <head>
        <title>Board Question</title>
        <style>
            h1{
                text-align: center;
            }
            form{
                border: 1px solid black;
                padding: 40px;
                width: 30%;
                margin-top: 20px;
                margin-left: 450px;
            }
            input[type=submit],input[type=reset]{
                margin-left: 20px;
                padding: 10px;
            }
        </style>
    </head>
    
    <body>
        <form method="post" action="confirm.php" enctype="multipart/form-data">
            <h1>Soobway Online Order Form</h1>
            <h3>Step 1: Delivery Information</h3>
            
            <table>
                <tr>
                    <td>Customer Name:</td>
                    <td><input type="text" name="name" minlength="4" maxlength="30" required></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" name="phone" minlength="9" maxlength="10" required></td>
                </tr>
                <tr>
                    <td>Delivery Address:</td>
                    <td><textarea name="address" rows="10" cols="30" placeholder="(Enter Address Here)"></textarea></td>
                </tr>
            </table>
            
            <h3>Step 2: Your menu choice</h3>
            <table border="1px solid black" style="border-collapse: collapse;" cellpadding=10 cellspacing=10>
                <tr>
                    <th>Menu</th>
                    <th>Price</th>
                    <th>Quantity	</th>
                </tr>
                <tr>
                    <td>Chicken Tandoori</td>
                    <td>RM 11.55</td>
                    <td><input type="text" name="chickensupplier"></td>
                </tr>
                <tr>
                    <td>Italian BMT</td>
                    <td>RM 13.25</td>
                    <td><input type="text" name="bmtsupplier"></td>
                </tr>
                <tr>
                    <td>Veggie Donuts</td>
                    <td>RM 9.90</td>
                    <td><input type="text" name="donutsupplier"></td>
                </tr>
            </table>
            <p>
                Dear valued customer, please be informed that price stated above is included 6% GST. Thank you.
            </p>
            <input type="submit" name="confirm" value="Confirm Order">
            <input type="reset" name="cancel" value="Cancel Order">
        </form>
    </body>
</html>