<?php
namespace App\classes;
class Series
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user = [
            0 => [
                'name'      => 'Ripon',
                'mobile'    => '123213213',
                'location'  => 'Lalbagh'
            ],
            1 => [
              'name'        => 'Shakil',
              'mobile'        => '45454565',
              'location'        => 'Lalmonirhat',
            ],
        ];
        return $this->user;
    }
}