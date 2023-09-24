<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction | Basic Banking System</title>
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    
    <link rel="shortcut icon" href="image/a.jpg" type="image/x-icon">
    <style>
        body {
            background-image: url('image/b.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            backg round-attachment: fixed;
        }
        body {
            background-color: #f3f4f6;
            font-family: 'Roboto', sans-serif;
        }

        .navbar {
            background-color: #007bff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-family: 'Sansita Swashed', cursive;
            font-size: 24px;
            color: #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .my-info {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            border-radius: 5px;
            max-width: 400px;
        }

        h2 {
            font-family: 'Sansita Swashed', cursive;
            font-size: 28px;
            color: #007bff;
            margin-bottom: 20px;
        }

        h4 {
            font-size: 20px;
            color: #333;
        }

        .btn-info,
        .btn-success,
        .btn-secondary,
        .btn-danger {
            background-color: #007bff;
            border: none;
        }

        .btn-info:hover,
        .btn-success:hover,
        .btn-secondary:hover,
        .btn-danger:hover {
            background-color: #0056b3;
        }

        .modal-content {
            background-color: #fff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .modal-title {
            font-family: 'Sansita Swashed', cursive;
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }

        .modal-body {
            color: #333;
        }

        .modal-footer {
            justify-content: flex-start;
        }

        #transaction-history-body {
            list-style-type: none;
            padding-left: 0;
        }

        #transaction-history-body li {
            margin-bottom: 10px;
            border-left: 4px solid #007bff;
            padding: 10px;
            background-color: #f8f9fa;
            color: #333;
        }
    </style>
</head>

<body>
    <!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="./index.html">DREAM BANK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./customers.html">SEND MONEY</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar ends here  -->

    <div class="container my-info">
        <h2 class="text-center">Welcome to DREAM BANK!!</h2>
        <div class="text-center">
            <h4>Name: Anushka</h4>
            <h4>Net Bank Balance: ₹<span id="myAccountBalance">50000</span></h4>
            <button class="btn btn-info" data-toggle="modal" data-target="#sendMoneyModal">Send Money</button>
            <button class="btn btn-success" data-toggle="modal" data-target="#transactionsModal">See All Transactions</button>
        </div>
    </div>

    <!-- Modal send money -->
    <div class="modal fade" id="sendMoneyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" id="enterName" class="form-control"
                                placeholder="Recipient's username" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@okdream.com</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">₹</span>
                            </div>
                            <input type="number" id="enterAmount" class="form-control"
                                placeholder=" Enter Amount" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="sendMoney()" class="btn btn-success" data-dismiss="modal">Send Money</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal transaction History-->
    <div class="modal fade" id="transactionsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transaction History</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol id="transaction-history-body">
                        <!-- Transaction history items will be added here -->
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript functions -->
    <script>
        // Initialize an empty array to store transaction history
        var transactionHistory = [];

        // Initialize the user's balance
        var userBalance = 50000;

        // Function to send money
        function sendMoney() {
            // Get values from input fields or perform your transaction logic here
            var enterName = document.getElementById("enterName").value;
            var enterAmount = parseInt(document.getElementById("enterAmount").value);

            if (enterAmount > userBalance) {
                alert("Insufficient Balance.");
            } else {
                // Deduct the transaction amount from the user's balance
                userBalance -= enterAmount;

                // Display the updated balance on the page
                document.getElementById("myAccountBalance").textContent = userBalance;

                // Implement your transaction logic here

                // For now, let's just display a success message
                alert(`Successful Transaction !! ₹${enterAmount} is sent to ${enterName}@okdream.com.`);

                // Add the transaction to the history
                var transactionText = `₹${enterAmount} is sent to ${enterName}@okdream.com on ${new Date()}.`;
                transactionHistory.push(transactionText);

                // Update the transaction history display
                updateTransactionHistory();
            }
        }

        // Function to update the transaction history display
        function updateTransactionHistory() {
            var transactionHistoryList = document.getElementById("transaction-history-body");
            transactionHistoryList.innerHTML = ""; // Clear the list

            // Iterate through the transaction history and add entries to the list
            for (var i = 0; i < transactionHistory.length; i++) {
                var transactionEntry = document.createElement("li");
                transactionEntry.textContent = transactionHistory[i];
                transactionHistoryList.appendChild(transactionEntry);
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
</body>

</html>
