<?php


namespace App;


class Book
{
    public int $id;
    public string $name;
    public int $year;
    public int $republish;
//    public int $ISBN;
//    public string $summary;
    public string $producer;
//    public string $license;
    public int $sold;
    public int $amount;
    public string $image;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->year = $data['year'];
        $this->republish = $data['republish'];
//        $this->ISBN = $data['ISBN'];
//        $this->summary = $data['summary'];
        $this->producer = $data['producer'];
//        $this->license = $data['license'];
        $this->sold = $data['sold'];
        $this->amount = $data['amount'];
        $this->image = $data['image'];
    }
}