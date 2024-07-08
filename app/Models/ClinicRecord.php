<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicRecord extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function physician()
    {
        return $this->belongsTo(Physician::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function finding(string $name)
    {
        $finding = Finding::firstOrCreate(['name' => $name]);
        $this->findings()->attach($finding);
    }

    public function findings()
    {
        return $this->belongsToMany(Finding::class);
    }
}
