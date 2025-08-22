<?php 
class Invoice{

    private $title;
    private $items = array();
    private $total = 0;

    function addTitle($title){
        $this->title = $title;
    }
    function addItem($item, $price){
        $this->items[] = array("name" => $item, "price" => $price);
    }

    function addTotal(){
        // for ($i = 0; $i < count($this->items); $i++) {
        //     $this->total += $this->items[$i]['price'];
        // }
        foreach ($this->items as $item) {
            $this->total += $item['price'];
        }
    }
    function createInvoice(){
        $filePath = "Assingment 2/Invoice/InvoiceBuilder.txt";
        $invoice = $this->title . "\n \n";
        foreach ($this->items as $item) {
            $invoice .= $item['name'] . " - " . $item['price'] . "\n";
        }
        $invoice .= "-----------------\n";
        $invoice .= "Total = " . $this->total . "\n";
        $file = fopen($filePath, "a");
        fwrite($file, $invoice);
        fclose($file);
    }
}

$inv1 = new Invoice();
$inv1->addTitle("My First Invoice");
$inv1->addItem("Item 1", 100);
$inv1->addItem("Item 2", 200);
$inv1->addItem("Item 3", 300);
$inv1->addTotal();
$inv1->createInvoice();

$inv2 = new Invoice();
$inv2->addTitle("My Second Invoice");
$inv2->addItem("Item A", 150);
$inv2->addItem("Item B", 250);
$inv2->addItem("Item C", 350);
$inv2->addTotal();
$inv2->createInvoice();