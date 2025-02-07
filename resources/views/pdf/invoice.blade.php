<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .invoice-box {
            max-width: 800px;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="invoice-box">
        <h2>Invoice</h2>
        <p><strong>Invoice No:</strong> #12345</p>
        <p><strong>Date:</strong> February 7, 2025</p>
        <p><strong>Bill To:</strong> John Doe</p>

        <table>
            <tr>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Product A</td>
                <td>2</td>
                <td>$50</td>
                <td>$100</td>
            </tr>
            <tr>
                <td>Product B</td>
                <td>1</td>
                <td>$75</td>
                <td>$75</td>
            </tr>
            <tr>
                <td colspan="3" class="total">Grand Total</td>
                <td class="total">$175</td>
            </tr>
        </table>

        <p><strong>Payment Method:</strong> Credit Card</p>
        <p><em>Thank you for your business!</em></p>
    </div>

</body>
</html>
