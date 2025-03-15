<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetaMask Payment</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.5/web3.min.js"></script>
</head>
<body>

    <h2>Pay with MetaMask</h2>
    <button onclick="connectWallet()">Connect Wallet</button>
    <button onclick="sendTransaction()">Pay 0.01 ETH</button>

    <script>
        let userAccount;

        async function connectWallet() {
            if (window.ethereum) {
                try {
                    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                    userAccount = accounts[0];
                    alert("Connected: " + userAccount);
                } catch (error) {
                    console.error("Wallet connection failed", error);
                }
            } else {
                alert("MetaMask not detected! Please install it.");
            }
        }

        async function sendTransaction() {
            if (!userAccount) {
                alert("Please connect your MetaMask wallet first!");
                return;
            }

            const web3 = new Web3(window.ethereum);
            const amount = web3.utils.toWei('0.01', 'ether'); // Convert ETH to Wei

            try {
                const tx = await ethereum.request({
                    method: 'eth_sendTransaction',
                    params: [{
                        from: userAccount,
                        to: '0xYourEthereumAddressHere',  // Replace with your receiving ETH address
                        value: web3.utils.toHex(amount),
                        gas: '21000'
                    }]
                });

                alert("Transaction sent! TxHash: " + tx);
                saveTransaction(tx, userAccount, '0.01 ETH');
            } catch (error) {
                console.error("Transaction failed", error);
            }
        }

        function saveTransaction(txHash, sender, amount) {
            fetch("{{ route('save.transaction') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ txHash, sender, amount })
            })
            .then(response => response.json())
            .then(data => console.log("Transaction saved:", data))
            .catch(error => console.error("Error saving transaction:", error));
        }
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.5/web3.min.js"></script>

</body>
</html>
