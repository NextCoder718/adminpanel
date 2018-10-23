<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProducerRequest;
use App\Repositories\ProducerRepository;

class ProducerController extends Controller
{
    protected $producer;

    public function __construct(ProducerRepository $producer)
    {
        $this->producer = $producer;
    }

    public function index()
    {

        $data['producers'] = $this->producer->paginateWithFilters([]);
        $data['title'] = __('Producers');
        return view('admin.producers.index', $data);
    }

    public function create()
    {
        $data['title'] = __('Add producer');
        return view('admin.producers.create', $data);
    }

    public function store(ProducerRequest $request)
    {
        $parameters = $request->only(['name', 'email', 'status']);
        if ($this->producer->create($parameters)) {
            return redirect()->back()->with('success', __('Producer has been added successfully.'));
        }

        return redirect()->back()->withInput()->with('error', __('Failed to add producer.'));
    }

    public function edit($id)
    {
        $data['producer'] = $this->producer->findOrFailById($id);
        $data['title'] = __('Edit producer');
        return view('admin.producers.edit', $data);
    }

    public function update(ProducerRequest $request, $id)
    {
        $parameters = $request->only(['name', 'email', 'status']);
        if ($this->producer->update($parameters, $id)) {
            return redirect()->back()->with('success', __('Producer has been edited successfully.'));
        }

        return redirect()->back()->withInput()->with('error', __('Failed to edit producer.'));
    }

    public function destroy($id)
    {
        if ($this->producer->deleteById($id)) {
            return redirect()->back()->with('success', __('Producer has been deleted successfully.'));
        }

        return redirect()->back()->withInput()->with('error', __('Failed to delete producer.'));
    }
}
