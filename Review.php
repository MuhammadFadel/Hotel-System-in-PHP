<?php



class Review {
    public $Text;
    public $reviewSubject;
    public $reviewId;
    function __construct($Text, $reviewSubject, $reviewId) {
        $this->Text = $Text;
        $this->reviewSubject = $reviewSubject;
       
    }

    public function addreview()
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $list = (array) $this;
        unset($list['reviewId']);
return $connection->insert("Review", $list);    
    }
    public function deletereview()
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $list = (array) $this;
        unset($list['reviewId']);
        return $connection->Delete("Review", "text", $reviewId);
    }
    public function editreview()
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $list = (array) $this;
        unset($list['reviewId']);
        return $connection->edit("Review", "text", $reviewId, $this);
    }
    
        
}
