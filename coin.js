  var web3 = new Web3(new Web3.providers.HttpProvider("https://ropsten.infura.io/DVsIB0gd4UcfWBtZtjfn"));

  //address = "0xa105721347F229f0d7bbBD3E10D72d14E2Ba3961" //From Etherscan
  contractAddress = "0x03e4e8416660cF66940B00dE63331fC7F4A97ad9" //OMG
  contractABI = human_standard_token_abi;

  tokenContract = web3.eth.contract(contractABI).at(contractAddress);

  //console.log(tokenContract.version())
//  console.log(tokenContract.balanceOf(address).toNumber())
