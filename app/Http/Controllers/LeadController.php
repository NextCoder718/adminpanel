<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadRequest;
use App\Repositories\AgentRepository;
use App\Repositories\LeadRepository;
use App\Repositories\ProducerRepository;
use App\Repositories\StateRepository;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    private $lead;

    public function __construct(LeadRepository $lead)
    {
        $this->lead = $lead;
    }

    public function index(Request $request)
    {
        $conditions = [
            'status' => $request->has('filter') ? $request->filter : 1,
            'deleted_at' => null
        ];
        $data['leads'] = $this->lead->paginateWithFilters([], ['id' => 'desc'], $conditions);
        $data['title'] = __('Leads');
        return view('admin.leads.index', $data);
    }

    public function create()
    {
        $data['states'] = app(StateRepository::class)->getAll()->pluck('name', 'id')->toArray();
        return view('admin.leads.create', $data);
    }

    public function store(LeadRequest $request)
    {
        $parameters = $request->only($this->_getFields());
        if ($this->lead->create($parameters)) {
            return redirect()->back()->with('success', __('Lead has been submitted successfully.'));
        }

        return redirect()->back()->withInput()->with('error', __('Failed to submit.'));
    }

    private function _getFields()
    {
        return ['agent_name', 'agent_id', 'producer_id', 'move_in_date', 'building_name', 'property_address',
            'apartment', 'city', 'state_id', 'zip', 'prior_address', 'best_person_to_call_name', 'best_person_to_call_phone', 'email_for_policy_info', 'payment_option', 'notes_to_allstate', 'lessee_1_first_name', 'lessee_1_last_name', 'lessee_1_dob', 'lessee_1_phone', 'lessee_1_occupation', 'lessee_1_marital_status', 'lessee_have_dog', 'lessee_dog_breed', 'lessee_2_first_name', 'lessee_2_last_name', 'lessee_2_dob', 'lessee_2_phone', 'lessee_2_occupation', 'lessee_2_marital_status', 'gift_card_status', 'gift_card_sent_date', 'status'];
    }

    public function edit($id)
    {
        $data['lead'] = $this->lead->findOrFailById($id);
        $data['agents'] = app(AgentRepository::class)->getAll()->pluck('name','id')->toArray();
        $data['producers'] = app(ProducerRepository::class)->getAll()->pluck('name','id')->toArray();
        $data['states'] = app(StateRepository::class)->getAll()->pluck('name', 'id')->toArray();
        $data['title'] = __("Edit Lead");
        return view('admin.leads.edit', $data);
    }

    public function update(LeadRequest $request, $id)
    {
        $parameters = $request->only($this->_getFields());
        if ($this->lead->update($parameters, $id)) {
            return redirect()->back()->with('success', __('Lead has been updated successfully.'));
        }

        return redirect()->back()->withInput()->with('error', __('Failed to update lead.'));
    }

    public function destroy($id)
    {
        if ($this->lead->deleteById($id)) {
            return redirect()->route('admin.leads.index')->with('success', __('Lead has been deleted successfully.'));
        }

        return redirect()->back()->with('error', __('Failed to delete lead.'));
    }
}
