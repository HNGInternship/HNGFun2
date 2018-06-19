
  //var address = document.getElementById('address').value;
//  var address = "0xa105721347F229f0d7bbBD3E10D72d14E2Ba3961";
    function checkBalance() {

    var balancetokens = web3.fromWei(tokenContract.balanceOf(address).toNumber(), 'ether');//var tokenContract = web3.eth.contract(contractABI).at(contractAddress)
    var supply = web3.fromWei(tokenContract.totalSupply().toNumber(), 'ether');
    var balance = web3.fromWei( web3.eth.getBalance(address).toNumber(), 'ether');
    var symbol = tokenContract.symbol();
    //transactions = web3.eth.getTransaction();
    var decimal = tokenContract.decimals();
    var tokenName = tokenContract.name();
    document.getElementById('pre').innerHTML = 'Total TegTokens Balance: ' + balancetokens + '&nbsp;' + symbol;
    document.getElementById('supply').innerHTML = 'Total supply: ' + supply + '&nbsp;' + symbol;
    document.getElementById('balance').innerHTML = 'Total Ethereum Balance: ' + balance + ' ETH';
    document.getElementById('symbol').innerHTML = tokenName;
  }
  console.log(tokenContract.balanceOf(address).toNumber());
