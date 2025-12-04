<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'customer_id',
        'vehicle_id',
        'employee_id',
        'scheduled_at',
        'service',
        'price',
        'status',
        'notes',
    ];

    // RELACIONAMENTOS
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
