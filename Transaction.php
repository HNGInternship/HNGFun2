<?php
if(!isset($_SESSION)) { session_start(); }
class Transaction
{
    
    public $timee;
    public $table;
    
    public function __construct()
    {
        
        $this->buy_table = "buy_transactions";
        $this->sell_table = "sell_transactions";
        $this->sell_requests_table = "sell_requests";
        $this->buy_requests_table = "buy_requests";
        date_default_timezone_set('Africa/Lagos');
        
    }
    
    

    public function postSellRequest($intern_id, $amount, $trade_limit=2, $price_per_coin, $account, $preferred_buyer=0, $status="Open", $db)
    {        
            
        $sql = "insert into ".$this->sell_table." (intern_id, amount, trade_limit, price_per_coin, account, status) values (:intern_id, :amount, :trade_limit, :price_per_coin, :account, :preferred_buyer, :status)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':intern_id', $intern_id);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':trade_limit', $trade_limit);
        $stmt->bindParam(':price_per_coin', $price_per_coin);
        $stmt->bindParam(':account', $account);
        $stmt->bindParam(':preferred_buyer', $preferred_buyer);
        $stmt->bindParam(':status', $status);
    
        if ($stmt->execute()) {
            
            return true;
        }
        
        else {
            
            return false;
            //echo $db->error;
        }
    }


    public function cancelSellTransaction($id, $db)
    {
       
        $query  = "UPDATE " . $this->sell_requests_table . " SET status = 'Closed' WHERE id = :id LIMIT 1";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        if($stmt->execute()){
            return true;
        }
        else{
        return false;
    }
    
}
  

public function cancelBuyTransaction($id, $db)
{
    echo "Hahahaha";
    $query  = "UPDATE " . $this->buy_requests_table . " SET status = 'Closed' WHERE id = :id LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id);
    if($stmt->execute()){
        return true;
    }
    else{
    return false;
}

}

}
