  const { LibraWallet, LibraClient, LibraNetwork } = require('kulap-libra')
  const Bignumber = require('Bignumber.js')
  const client = new LibraClient({ network: LibraNetwork.Testnet })


  async function getwallet(){
    const wallet = new LibraWallet({
      mnemonic: 'popular nothing shed aunt milk inform flower park wage post idle boat order soldier alter hidden bleak laugh merry lucky genuine riot glass rent'
    })

    const account = wallet.newAccount()

    return {
      account: account,
      address: account.getAddress().toHex(),
      mnemonic: wallet.config.mnemonic
    }
  }

  async function getbalance(address){

    const accountState = await client.getAccountState(address)

    const balanceInMicroLibras = Bignumber(accountState.balance.toString())

    const balance = balanceInMicroLibras.dividedBy(Bignumber(1e6))

    return {
      // accountState: accountState,
      balanceInMicroLibras: balanceInMicroLibras,
      balance: balance.toString(10)
    }
  }

  async function transfer(account, toaddress, amount) {

    const data = await client.transferCoins( account, toaddress, Bignumber(amount).times(1e6) )

    return data
  }

  (async () =>{
    // getwallet
    const wallet = await getwallet()
    console.log('Wallet', wallet.address)
    console.log('Wallet', wallet.mnemonic)

    // // getbalance
    const balance = await getbalance(wallet.address)
    console.log('balance', balance.balance)

    // // transfer
    const transferResult = await transfer(wallet.account, 'c0ec90ba3c594ff057c48d7aa15609cc77dc02017b0276da14584bf3c81cb01d', 5000000)
    console.log('transferResult', transferResult)

  })()
