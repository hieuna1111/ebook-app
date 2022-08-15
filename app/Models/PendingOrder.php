<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class PendingOrder extends Eloquent
{
  protected $connection = 'mongodb';
  protected $collection = 'pending_orders';
}
