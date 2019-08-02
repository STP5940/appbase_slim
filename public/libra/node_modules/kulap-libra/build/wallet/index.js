"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Accounts_1 = require("./Accounts");
const KeyFactory_1 = require("./KeyFactory");
const Mnemonic_1 = require("./Mnemonic");
class LibraWallet {
    constructor(config) {
        this.lastChild = 0;
        this.accounts = {};
        this.config = config || {};
        const mnemonic = this.config.mnemonic === undefined ? new Mnemonic_1.Mnemonic().toString() : this.config.mnemonic;
        this.config.mnemonic = mnemonic;
        const seed = KeyFactory_1.Seed.fromMnemonic(mnemonic.split(' '), this.config.salt);
        this.keyFactory = new KeyFactory_1.KeyFactory(seed);
    }
    newAccount() {
        const newAccount = this.generateAccount(this.lastChild);
        this.lastChild++;
        return newAccount;
    }
    generateAccount(depth) {
        if (isNaN(depth)) {
            throw new Error(`depth [${depth}] must be a number`);
        }
        const account = new Accounts_1.Account(this.keyFactory.generateKey(depth));
        this.addAccount(account);
        return account;
    }
    addAccount(account) {
        this.accounts[account.getAddress().toHex()] = account;
    }
    getConfig() {
        return this.config;
    }
}
exports.LibraWallet = LibraWallet;
exports.default = LibraWallet;
