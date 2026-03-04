/*Mohammad Abdelkareem Taihr 
25/27588*/
/*Waad Abdalla 
25/30501*/
<!DOCTYPE html>
<html>
<head>
    <title>Musanze Digital Service Desk</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="card">
    <h2>Musanze Digital Service Desk</h2>

    <form method="POST" action="">
        
        <label>Service</label>
        <select name="service" id="service">
            <option value="Potato Order">Potato Order</option>
            <option value="Event Ticket">Event Ticket</option>
            <option value="Home-stay Booking">Home-stay Booking</option>
        </select>

        <label>Client Name</label>
        <input type="text" name="client_name" required>

        <label>Quantity</label>
        <input type="number" id="quantity" name="quantity" required>

        <label>Price</label>
        <input type="number" id="price" name="price" required>

        <h3>Total: <span id="totalDisplay">0</span> RWF</h3>

        <input type="hidden" name="total" id="total">

        <button type="submit">Save Record</button>
    </form>

    <div id="message"></div>

    <hr>
    <h3>Saved Records</h3>

    <table>
        <tr>
            <th>Client</th>
            <th>Service</th>
            <th>Total</th>
            <th>Date</th>
        </tr>

        <?php if(!empty($records)): ?>
    <?php foreach($records as $row): ?>
        <tr>
            <td><?= $row['client_name']; ?></td>
            <td><?= $row['service']; ?></td>
            <td><?= $row['total']; ?></td>
            <td><?= $row['created_at']; ?></td>
        </tr>
    <?php endforeach; ?>
<?php endif; ?>

    </table>

</div>

<script src="/testAppb/assets/js/app.js"></script>
</body>
</html>