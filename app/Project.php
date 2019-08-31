<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    public $timestamps = false;

    public $fillable = ['name', 'img', 'location', 'roi', 'url', 'total_investment', 'cee_shares'];

    // Accessors
    public function getAvailableInvestmentAttribute() {
        $intSoldShares = OrderTDO::sum('shares');

        return $this->total_investment - $intSoldShares * $this->per_share;
    }

    // Relations
    public function orderTDO() {
        return $this->hasMany(OrderTDO::class);
    }
}
