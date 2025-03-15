<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet Transactions</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.5/web3.min.js"></script>
</head>
<body>

    <h2>Deposit Funds</h2>
    <button onclick="depositFunds()">Deposit 0.01 ETH</button>
    <p id="depositStatus"></p>

    <h2>Withdraw Funds</h2>
    <input type="text" id="withdrawAmount" placeholder="Amount (ETH)">
    <button onclick="requestWithdraw()">Request Withdrawal</button>
    <p id="withdrawStatus"></p>

    <script>
        async function depositFunds() {
            if (typeof window.ethereum !== 'undefined') {
                const web3 = new Web3(window.ethereum);
                try {
                    await window.ethereum.request({ method: 'eth_requestAccounts' });
                    const accounts = await web3.eth.getAccounts();
                    const receiverAddress = "YOUR_WALLET_ADDRESS"; // Replace with your wallet
                    const amount = web3.utils.toWei("0.01", "ether");

                    web3.eth.sendTransaction({
                        from: accounts[0],
                        to: receiverAddress,
                        value: amount
                    })
                    .on("transactionHash", function(hash) {
                        document.getElementById("depositStatus").innerText = "Transaction Pending: " + hash;
                        saveDeposit(hash, "0.01");
                    })
                    .on("receipt", function(receipt) {
                        document.getElementById("depositStatus").innerText = "Deposit Successful!";
                    })
                    .on("error", function(error) {
                        document.getElementById("depositStatus").innerText = "Transaction Failed!";
                    });

                } catch (error) {
                    console.error("MetaMask connection failed", error);
                }
            } else {
                alert("MetaMask not detected!");
            }
        }

        function saveDeposit(hash, amount) {
            fetch("{{ route('wallet.deposit') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    transactionHash: hash,
                    amount: amount
                })
            })
            .then(response => response.json())
            .then(data => console.log("Deposit saved:", data))
            .catch(error => console.error("Error saving deposit:", error));
        }

        function requestWithdraw() {
    let amount = document.getElementById("withdrawAmount").value;
    if (!amount || isNaN(amount) || amount <= 0) {
        document.getElementById("withdrawStatus").innerText = "Invalid withdrawal amount!";
        return;
    }

    fetch("{{ route('wallet.withdraw') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ amount: amount })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById("withdrawStatus").innerText = "Withdrawal request submitted!";
        } else {
            document.getElementById("withdrawStatus").innerText = "Withdrawal request failed!";
        }
    })
    .catch(error => console.error("Error processing withdrawal:", error));
}
