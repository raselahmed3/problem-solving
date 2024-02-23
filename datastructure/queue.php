<?php 


class Queue{
    public $queue_data = [];
    public $count;


    public function __construct($data_count){
       $this->count = $data_count;
    }

    public function enqueue($data){
        if(count($this->queue_data) + 1 == $this->count){
          throw new Exception('Queue is filled');
        }
      $this->queue_data = [...$this->queue_data,$data];
      
    }

    public function dequeue(){
       return array_shift($this->queue_data);
    }
}


$queue = new Queue(3);

$queue->enqueue(4);
$queue->enqueue(5);
echo $queue->dequeue();
$queue->enqueue(6);

var_dump($queue->queue_data);

