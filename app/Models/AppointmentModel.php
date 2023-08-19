<?php

namespace App\Models;

use CodeIgniter\Model;

class AppointmentModel extends Model
{
    protected $table      = 'rendezvous';
    protected $primaryKey = 'id';
    protected $allowedFields = ['surname', 'name', 'email','gender', 'day', 'hour'];

}
