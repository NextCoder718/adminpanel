<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentRequest;
use App\Repositories\AgentRepository;

class AgentController extends Controller
{
    protected $agent;

    public function __construct(AgentRepository $agent)
    {
        $this->agent = $agent;
    }

    public function index()
    {

        $data['agents'] = $this->agent->paginateWithFilters([]);
        $data['title'] = __('Agents');
        return view('admin.agents.index', $data);
    }

    public function create()
    {
        $data['title'] = __('Add agent');
        return view('admin.agents.create', $data);
    }

    public function store(AgentRequest $request)
    {
        $parameters = $request->only(['name', 'email']);
        if ($this->agent->create($parameters)) {
            return redirect()->back()->with('success', __('Agent has been added successfully.'));
        }

        return redirect()->back()->withInput()->with('error', __('Failed to add agent.'));
    }

    public function edit($id)
    {
        $data['producer'] = $this->agent->findOrFailById($id);
        $data['title'] = __('Edit agent');
        return view('admin.agents.edit', $data);
    }

    public function update(AgentRequest $request, $id)
    {
        $parameters = $request->only(['name', 'email']);
        if ($this->agent->update($parameters, $id)) {
            return redirect()->back()->with('success', __('Agent has been edited successfully.'));
        }

        return redirect()->back()->withInput()->with('error', __('Failed to edit agent.'));
    }

    public function destroy($id)
    {
        if ($this->agent->deleteById($id)) {
            return redirect()->back()->with('success', __('Agent has been deleted successfully.'));
        }

        return redirect()->back()->withInput()->with('error', __('Failed to delete agent.'));
    }
}
