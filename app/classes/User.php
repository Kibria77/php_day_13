<?php
namespace App\classes;
class User
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;

    public function __construct($data=null)
    {
        $this->startingNumber   = $data['starting_number'];
        $this->endingNumber     = $data['ending_number'];
        $this->oddEven          = $data['odd_even'];
    }

    public function index()
    {
        header('Location: pages/index.php');
    }

    public function makeSeries()
    {
        if($this->startingNumber > $this->endingNumber)
        {
            return $this->bigToSmallSries();
        }
        else
        {
            if($this->oddEven == 'odd')
            {
                return $this->bigToSmallSries();
            }
            elseif ($this->oddEven == 'even')
            {
                return $this->bigToSmallSries();
            }
            else
            {
                return $this->smallToBig();
            }
        }
    }

    protected function bigToSmallOddSries()
    {

    }

    protected function smallToBigEven()
    {

    }

    protected function smallToBig()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.', ';
        }
        return $this->result;
    }

    protected function bigToSmallSries()
    {
        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result .= $this->i.', ';
        }
        return $this->result;
    }
}