<?php
// Step 1: Define custom exception
class InsufficientBalanceException extends Exception {}

// Step 2: Define class BankAccount
class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            throw new InsufficientBalanceException("Withdrawal failed: Insufficient balance.");
        }

        $this->balance -= $amount;
        return "Withdrawal successful. Remaining balance: Rs. " . $this->balance;
    }
}

// Step 3: Use try-catch to handle the withdrawal
try {
    $account = new BankAccount(5000); // Initial balance: Rs. 5000
    echo $account->withdraw(6000);    // Try with different amounts
} catch (InsufficientBalanceException $e) {
    echo "Error: " . $e->getMessage();
}
?>
