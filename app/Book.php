<?php


namespace App;


class Book
{
    public int $id;
    public mixed $image;
    public string $name;
    public int $publish;
    public int $republish;
    public mixed $ISBN;
    public string $summary;
    public string $publisher;
    public string $license;
    public int $sold;
    public int $amount;

    public function __construct($data)
    {
        $this->image = $data['image'];
        $this->name = $data['name'];
        $this->publish = $data['publish'];
        $this->republish = $data['republish'];
        $this->ISBN = $data['ISBN'];
        $this->summary = $data['summary'];
        $this->publisher = $data['publisher'];
        $this->license = $data['license'];
        $this->sold = $data['sold'];
        $this->amount = $data['amount'];
    }
}