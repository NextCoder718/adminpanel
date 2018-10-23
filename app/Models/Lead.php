<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['agent_name', 'agent_id', 'producer_id', 'move_in_date', 'building_name', 'property_address',
'apartment', 'city', 'state_id', 'zip', 'prior_address', 'best_person_to_call_name', 'best_person_to_call_phone', 'email_for_policy_info', 'payment_option', 'notes_to_allstate', 'lessee_1_first_name', 'lessee_1_last_name', 'lessee_1_dob', 'lessee_1_phone', 'lessee_1_occupation', 'lessee_1_marital_status', 'lessee_have_dog', 'lessee_dog_breed', 'lessee_2_first_name', 'lessee_2_last_name', 'lessee_2_dob', 'lessee_2_phone', 'lessee_2_occupation', 'lessee_2_marital_status', 'gift_card_status', 'gift_card_sent_date', 'status'];

    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

}
