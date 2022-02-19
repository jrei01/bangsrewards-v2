<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Activity;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Member;


class Activities extends Component
{   

    use WithPagination;

    public $cardNumber = null;
    public $points = null;
    public $sortField = 'activities.updated_at';
    public $sortDirection = 'desc';
    

    private function getPoints()
    {
        $member_points = Member::select('points')->where('cardNumber', '=', $this->cardNumber)->get();

        foreach ($member_points as $point) {
           return $point->points;
        }
    }


    public function sortBy($field)
    {

        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'desc' ? 'asc' : 'desc';
        } else {
            $this->sortDirection = 'desc';
        }

        $this->sortField = $field;

    }

    public function render()
    {
  
        return view('livewire.transactions', [
    
        
            $activities = DB::table('activities')
                            ->select('activities.transactionId', 'activities.referenceNumber', 'activities.cardNumber', 'activities.branchId', 'activities.transactionType', 'activities.created_at',
                                    'branches.branchId', 'branches.branch_name', 'actredeemdetails.redeemPoints', 'actearndetails.earnPoints', 'actpreloaddetails.preloadPoints')
                            ->leftjoin('branches', 'activities.branchId', '=', 'branches.branch_id')
                            ->leftjoin('actredeemdetails', 'activities.transactionId', '=', 'actredeemdetails.transaction_id')
                            ->leftjoin('actpreloaddetails', 'activities.transactionId', '=', 'actpreloaddetails.transaction_id')
                            ->leftjoin('actearndetails', 'activities.transactionId', '=', 'actearndetails.transaction_id')
                            ->where('activities.cardNumber', '=',  $this->cardNumber)
                            ->orderby($this->sortField, $this->sortDirection)
                            ->paginate(5),
                
                
                'activities' => $activities,
                $this->points = $this->getPoints(),

            
               
                


        ]);
            
    }
}
