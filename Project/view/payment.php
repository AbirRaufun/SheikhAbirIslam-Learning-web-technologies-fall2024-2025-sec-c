<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <h2>Payment</h2>

    <h3>Select Payment Method</h3>
    
    <form action="/processPayment" method="POST">
        <fieldset>
            <legend>Payment Details</legend>

            <label for="paymentMethod">Choose Payment Method:</label><br>
            <input type="radio" id="creditCard" name="paymentMethod" value="creditCard" required>
            <label for="creditCard">Credit/Debit Card</label><br>

            <input type="radio" id="nagad" name="paymentMethod" value="nagad" required>
            <label for="nagad">Nagad</label><br>

            <input type="radio" id="bkash" name="paymentMethod" value="bkash" required>
            <label for="bkash">Bkash</label><br>

            <input type="radio" id="bitcoin" name="paymentMethod" value="bitcoin" required>
            <label for="bitcoin">Bitcoin</label><br><br>

            <label for="amount">Amount to Pay:</label>
            <input type="text" id="amount" name="amount" value="৳100" readonly>
            <br><br>

            <div id="creditCardDetails" style="display:none;">
                <label for="cardNumber">Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter Card Number" required>
                <br><br>

                <label for="expiryDate">Expiry Date:</label>
                <input type="month" id="expiryDate" name="expiryDate" required>
                <br><br>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
                <br><br>
            </div>

            <div id="nagadDetails" style="display:none;">
                <label for="nagadNumber">Nagad Number:</label>
                <input type="text" id="nagadNumber" name="nagadNumber" placeholder="Enter Nagad Number" required>
                <br><br>
            </div>

            <div id="bkashDetails" style="display:none;">
                <label for="bkashNumber">Bkash Number:</label>
                <input type="text" id="bkashNumber" name="bkashNumber" placeholder="Enter Bkash Number" required>
                <br><br>
            </div>

            <div id="bitcoinDetails" style="display:none;">
                <label for="bitcoinAddress">Bitcoin Address:</label>
                <input type="text" id="bitcoinAddress" name="bitcoinAddress" placeholder="Enter Bitcoin Address" required>
                <br><br>
            </div>

            <button type="submit">Proceed to Payment</button>
        </fieldset>
    </form>

    <br>
    <a href="/dashboard">Back to Dashboard</a>

    <script>
        const paymentMethods = document.getElementsByName('paymentMethod');
        paymentMethods.forEach(method => {
            method.addEventListener('change', function() {
                // Hide all payment method details
                document.getElementById('creditCardDetails').style.display = 'none';
                document.getElementById('nagadDetails').style.display = 'none';
                document.getElementById('bkashDetails').style.display = 'none';
                document.getElementById('bitcoinDetails').style.display = 'none';

                // Show relevant payment method details based on selection
                if (this.value === 'creditCard') {
                    document.getElementById('creditCardDetails').style.display = 'block';
                } else if (this.value === 'nagad') {
                    document.getElementById('nagadDetails').style.display = 'block';
                } else if (this.value === 'bkash') {
                    document.getElementById('bkashDetails').style.display = 'block';
                } else if (this.value === 'bitcoin') {
                    document.getElementById('bitcoinDetails').style.display = 'block';
                }
            });
        });
    </script>
</body>
</html>
