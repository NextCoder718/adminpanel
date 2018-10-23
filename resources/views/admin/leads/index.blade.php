@extends('layouts.admin')


@section('content')

    <h1 class="mt-4">Leads</h1>
    <div class="row mb-1">
        <div class="col-auto mr-auto"><p class="text-align-bottom mt-2 h5">{{ $leads->total() }} <span
                        class="text-info">{{ lead_status(request()->get('filter',1)) }}</span>
                Leads</p></div>
        <div class="col-auto">
            <form action="{{ route('admin.leads.index') }}" method="get" id="lead-filter">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-5 col-form-label">Filter by Status</label>
                    <div class="col-sm-7">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="filter"
                                onchange="this.form.submit()">
                            @foreach(lead_status() as $value => $item)
                                <option {{ request()->get('filter') == $value ? 'selected' : '' }} value="{{ $value }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <table class="table table-hover table-striped table-responsive">
        <thead class="thead-light">
        <tr>
            <th scope="col"><a href="">Date Created</a></th>
            <th scope="col"><a href="">Lead Status</a></th>
            <th scope="col"><a href="">Producer Assigned</a></th>
            <th scope="col"><a href="">Leasing Agent Name</a></th>
            <th scope="col"><a href="">Leasing Agent</a></th>
            <th scope="col"><a href="">Move In Date</a></th>
            <th scope="col"><a href="">Building Name</a></th>
            <th scope="col"><a href="">Apt #</a></th>
            <th scope="col"><a href="">Notes</a></th>
            <th scope="col"><a href="">GC Status</a></th>
            <th scope="col"><a href="">GC Sent Date</a></th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($leads as $lead)
            <tr>
                <td>{{ $lead->created_at->format('m/d/y') }}</td>
                <td>{{ lead_status($lead->status) }}</td>
                <td>{{ optional($lead->producer)->name ?: '-' }}</td>
                <td>{{ $lead->agent_name }}</td>
                <td>{{ optional($lead->agent)->name ?: 'Unassigned' }}</td>
                <td>{{ date('m/d/y', strtotime($lead->move_in_date)) }}</td>
                <td>{{ $lead->building_name }}</td>
                <td>{{ $lead->apartment }}</td>
                <td>
                    <small><a href="" data-toggle="popover" data-trigger="focus"
                              data-content="{{ $lead->notes_to_allstate }}">NOTES</a>
                    </small>
                </td>
                <td><span class="text-danger">{{ gift_card_status($lead->gift_card_status) ?: '-' }}</span></td>
                <td>{{ $lead->gift_card_sent_date ? date('m/d/y', strtotime($lead->gift_card_sent_date)) : 'n/a' }}</td>
                <td class="nowrap">
                    <a href="{{ route('admin.leads.edit',$lead->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('admin.leads.delete',$lead->id) }}" class="btn btn-sm btn-danger" data-token="{{ csrf_token() }}" data-method="delete" data-confirm="Are you sure?">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <div class="row">
        <div class="col-auto mr-auto">
            <nav aria-label="...">
                {{ $leads->appends(['filter' => request()->get('filter')])->links() }}
            </nav>
        </div>
        <div class="col-auto"><a href="leads_download.csv" class="btn btn-success">Download CSV</a></div>
    </div>

@endsection



