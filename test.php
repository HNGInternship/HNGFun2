<html>
<head>
    <title>Test</title>
</head>
<body>

<!-- <script src="./bower_components/stellar-sdk/stellar-sdk.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/stellar-sdk/0.8.0/stellar-sdk.js"></script>
<script src="./bower_components/axios/dist/axios.js"></script>
<script>
    //generate keypair
    // var pair = StellarSdk.Keypair.random();

    // console.log("Secret: ",pair.secret());
    // console.log("Public: ", pair.publicKey());

    // var secretKey = "SBF4VIXZCAYTYAZOAI2ZTFQLJ4TYL7RLNRQCV5ICEZH2C24C7VA4GFE3";
    // var publicKey = "GC75VKAYW54DNGNNMJFLQ2IIFJ2CNKNCGB7TZLC4EBMDDMAZOC54KFNJ";

    // // use public key to create account
    // axios
    //     .get('https://friendbot.stellar.org?addr='+"GBX67TKHM73AR477NOLYJK7UUM4WASGR42BHHT2CI7C4FXPM6PUJLQRU")
    //     .then(function(response){
    //         console.log(response);
    //     }).catch(function(error){
    //         console.error(error);
    //     });

    // get account balance of account
    // var server = new StellarSdk.Server('https://horizon-testnet.stellar.org');

    // // the JS SDK uses promises for most actions, such as retrieving an account
    // server.loadAccount("GBX67TKHM73AR477NOLYJK7UUM4WASGR42BHHT2CI7C4FXPM6PUJLQRU").then(function(account) {
    //     console.log('Balances for account: ' + "GBX67TKHM73AR477NOLYJK7UUM4WASGR42BHHT2CI7C4FXPM6PUJLQRU");
    //     account.balances.forEach(function(balance) {
    //         console.log('Type:', balance.asset_type, ', Balance:', balance.balance);
    //     });
    // });

    // //transfer from one account to another
    var StellarSdk = require('stellar-sdk');
    StellarSdk.Network.useTestNetwork();
    var server = new StellarSdk.Server('https://horizon-testnet.stellar.org');
    var sourceKeys = StellarSdk.Keypair
    .fromSecret('SBF4VIXZCAYTYAZOAI2ZTFQLJ4TYL7RLNRQCV5ICEZH2C24C7VA4GFE3');
    var destinationId = 'GBX67TKHM73AR477NOLYJK7UUM4WASGR42BHHT2CI7C4FXPM6PUJLQRU';
    // Transaction will hold a built transaction we can resubmit if the result is unknown.
    var transaction;

    // First, check to make sure that the destination account exists.
    // You could skip this, but if the account does not exist, you will be charged
    // the transaction fee when the transaction fails.
    server
        .loadAccount(destinationId)
        // If the account is not found, surface a nicer error message for logging.
        .catch(StellarSdk.NotFoundError, function (error) {
            throw new Error('The destination account does not exist!');
        })
        // If there was no error, load up-to-date information on your account.
        .then(function() {
            return server.loadAccount(sourceKeys.publicKey());
        })
        .then(function(sourceAccount) {
            // Start building the transaction.
            transaction = new StellarSdk.TransactionBuilder(sourceAccount)
            .addOperation(StellarSdk.Operation.payment({
                destination: destinationId,
                // Because Stellar allows transaction in many currencies, you must
                // specify the asset type. The special "native" asset represents Lumens.
                asset: StellarSdk.Asset.native(),
                amount: "10"
            }))
            // A memo allows you to add your own metadata to a transaction. It's
            // optional and does not affect how Stellar treats the transaction.
            .addMemo(StellarSdk.Memo.text('Test Transaction'))
            .build();
            // Sign the transaction to prove you are actually the person sending it.
            transaction.sign(sourceKeys);
            // And finally, send it off to Stellar!
            return server.submitTransaction(transaction);
        })
        .then(function(result) {
            console.log('Success! Results:', result);
        })
        .catch(function(error) {
            console.error('Something went wrong!', error);
            // If the result is unknown (no response body, timeout etc.) we simply resubmit
            // already built transaction:
            // server.submitTransaction(transaction);
        });
</script>
</body>
</html>