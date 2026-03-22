<?php

namespace App\solid\SRP\Demo3\solution;

class OrderService
{
    protected $calculator = null;
    protected $repository = null;
    protected $invoiceService = null;

   public function __construct(){

       if(!$this->calculator)
           $this->calculator = new OrderCalculator();

       if(!$this->repository)
           $this->repository = new OrderRepository();

       if(!$this->invoiceService)
           $this->invoiceService = new InvoiceService();

   }

    /**
     * @param int $customer
     * @param string $email
     * @param array $items
     * @return void
     */
   public function createOrder(int $customer, string $email, array $items): void
   {
       $total = $this->calculator->calculateTotal($items);

       $order = new Order();
       $order->setCustomer($customer);
       $order->setTotal($total);

       $this->repository->save($order);

       $this->invoiceService->sendInvoice($email, $total);
   }
}