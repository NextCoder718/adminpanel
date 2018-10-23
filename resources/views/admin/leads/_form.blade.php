<div class="row">
    <div class="col-md-6 order-md-1 mb-4">
        @if(isset($lead))
            <h4 class="d-flex mb-3">Bendeck Admin Fields</h4>
            <div class="card mb-4 bg-warning">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="agent_id">Leasing Agent</label>
                        <select class="custom-select d-block w-100" id="agent_id" name="agent_id" required>
                            <option value="">Choose...</option>
                            @foreach($agents as $id=>$name)
                                <option {{ $lead->agent_id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status">Lead Status</label>
                        <select class="custom-select d-block w-100" id="status" name="status" required>
                            <option value="">Choose...</option>
                            @foreach(lead_status() as $id=>$name)
                                <option {{ $lead->status == $id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="producer_id">Producer</label>
                        <select class="custom-select d-block w-100" id="producer_id" name="producer_id" required>
                            <option value="">Choose...</option>
                            @foreach($producers as $id=>$name)
                                <option {{ $lead->producer_id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gift_card_status">Gift Card Status</label>
                        <select class="custom-select d-block w-100" id="gift_card_status" name="gift_card_status" required>
                            <option value="">Choose...</option>
                            @foreach(gift_card_status() as $id=>$name)
                                <option {{ $lead->gift_card_status == $id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gift_card_sent_date">Gift Card Sent Date</label>
                        <input type="text" class="form-control" id="gift_card_sent_date" name="gift_card_sent_date" value="{{ old('agent_name', isset($lead) ? $lead->gift_card_sent_date : null) }}" required>
                    </div>

                </div>
            </div>
        @endif
        <h4 class="d-flex mb-3">Lead Information</h4>

        <div class="mb-3">
            <label for="agent_name">Leasing agent you are working with <span
                        class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('agent_name') ? 'form-control is-invalid' : 'form-control' }}"
                   id="agent_name" name="agent_name" value="{{ old('agent_name', isset($lead) ? $lead->agent_name : null) }}">
            <div class="invalid-feedback">{{ $errors->first('agent_name') }}</div>
        </div>

        <div class="mb-3">
            <label for="move_in_date">Move-In Date <span class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('move_in_date') ? 'form-control is-invalid' : 'form-control' }}"
                   id="move_in_date" name="move_in_date" value="{{ old('move_in_date', isset($lead) ? $lead->move_in_date : null) }}"
                   placeholder="YYYY/MM/DD">
            <div class="invalid-feedback">{{ $errors->first('move_in_date') }}</div>
        </div>

        <div class="mb-3">
            <label for="building_name">Building Name <span class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('building_name') ? 'form-control is-invalid' : 'form-control' }}"
                   id="building_name" name="building_name" value="{{ old('building_name', isset($lead) ? $lead->building_name : null) }}">
            <div class="invalid-feedback">{{ $errors->first('building_name') }}</div>
        </div>


        <div class="mb-3">
            <label for="property_address">Address <span class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('property_address') ? 'form-control is-invalid' : 'form-control' }}"
                   id="property_address" name="property_address" value="{{ old('property_address', isset($lead) ? $lead->property_address : null) }}" required>
            <div class="invalid-feedback">{{ $errors->first('property_address') }}</div>
        </div>

        <div class="mb-3">
            <label for="apartment">Apt #</label>
            <input type="text"
                   class="{{ $errors->has('apartment') ? 'form-control is-invalid' : 'form-control' }}"
                   id="apartment" name="apartment" value="{{ old('apartment', isset($lead) ? $lead->apartment : null) }}">
            <div class="invalid-feedback">{{ $errors->first('apartment') }}</div>
        </div>

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="city">City <span class="text-muted">*</span></label>
                <input type="text"
                       class="{{ $errors->has('city') ? 'form-control is-invalid' : 'form-control' }}" id="city"
                       name="city" value="{{ old('city', isset($lead) ? $lead->city : null) }}">
                <div class="invalid-feedback">{{ $errors->first('city') }}</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="state_id">State <span class="text-muted">*</span></label>
                <select class="custom-select d-block w-100 {{ $errors->has('state_id') ? ' is-invalid' : '' }}"
                        id="state_id" name="state_id" required>
                    <option value="">Choose...</option>
                    @foreach($states as $id=> $name)
                        <option {{ old('state_id', isset($lead) ? $lead->state_id : null) == $id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">{{ $errors->first('state_id') }}</div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Zip <span class="text-muted">*</span></label>
                <input type="text"
                       class="{{ $errors->has('zip') ? 'form-control is-invalid' : 'form-control' }}" id="zip"
                       name="zip" value="{{ old('zip', isset($lead) ? $lead->zip : null) }}" placeholder="" required>
                <div class="invalid-feedback">{{ $errors->first('zip') }}</div>
            </div>
        </div>
        <div class="mb-5">
            <label for="prior_address">Prior Address <span class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('prior_address') ? 'form-control is-invalid' : 'form-control' }}"
                   id="prior_address" name="prior_address" value="{{ old('prior_address', isset($lead) ? $lead->prior_address : null) }}" required>
            <div class="invalid-feedback">{{ $errors->first('prior_address') }}</div>
        </div>

        <hr class="mb-4">
        <h4 class="d-flex mb-3">Contact Information</h4>

        <div class="mb-3">
            <label for="best_person_to_call_name">Best person to call and confirm payment (name) <span
                        class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('best_person_to_call_name') ? 'form-control is-invalid' : 'form-control' }}"
                   id="best_person_to_call_name"
                   name="best_person_to_call_name" value="{{ old('best_person_to_call_name', isset($lead) ? $lead->best_person_to_call_name : null) }}" required>
            <div class="invalid-feedback">{{ $errors->first('best_person_to_call_name') }}</div>
        </div>

        <div class="mb-3">
            <label for="best_person_to_call_phone">Best person to call and confirm payment (Phone) <span
                        class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('best_person_to_call_phone') ? 'form-control is-invalid' : 'form-control' }}"
                   id="best_person_to_call_phone"
                   name="best_person_to_call_phone" value="{{ old('best_person_to_call_phone', isset($lead) ? $lead->best_person_to_call_phone : null) }}" required>
            <div class="invalid-feedback">{{ $errors->first('best_person_to_call_phone') }}</div>
        </div>

        <div class="mb-5">
            <label for="email_for_policy_info">Best email to send policy information to <span
                        class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('email_for_policy_info') ? 'form-control is-invalid' : 'form-control' }}"
                   id="email_for_policy_info" name="email_for_policy_info"
                   value="{{ old('email_for_policy_info', isset($lead) ? $lead->email_for_policy_info : null) }}"
                   required>
            <div class="invalid-feedback">{{ $errors->first('email_for_policy_info') }}</div>
        </div>

        <hr class="mb-4">
        <h4 class="d-flex mb-3">Payment Information</h4>

        <p>For security reasons we will reach out directly to get your payment information.</p>
        <p><strong>Would you like to:</strong></p>

        <div class="d-block my-3">
            @foreach(payment_option() as $item => $value)
                <div class="">
                    <input id="payment_option{{ $item }}" name="payment_option"
                           type="radio"
                           value="{{ $item }}" {{ old('payment_option', isset($lead) ? $lead->payment_option : null) == $item ? 'checked required' : '' }}>
                    <label class="" for="payment_option{{ $item }}">{{ $value }}</label>
                </div>
            @endforeach
        </div>

        <hr class="mb-4">
        <h4 class="d-flex mb-3">Please note only 2 non-related residents can be listed on a policy. An
            additional quote can be provided if more than 2 residents need a policy.</h4>


        <div class="mb-3">
            <label for="notes_to_allstate">Important Notes to Allstate</label>
            <textarea class="form-control" id="notes_to_allstate" name="notes_to_allstate"
                      rows="3">{{ old('notes_to_allstate', isset($lead) ? $lead->notes_to_allstate : null) }}</textarea>
        </div>

    </div>

    <div class="col-md-6 order-md-2">
        <h4 class="d-flex mb-3">First Person on Lease</h4>

        <div class="mb-3">
            <label for="lessee_1_first_name">First Name <span class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('lessee_1_first_name') ? 'form-control is-invalid' : 'form-control' }}"
                   id="lessee_1_first_name" name="lessee_1_first_name" value="{{ old('lessee_1_first_name', isset($lead) ? $lead->lessee_1_first_name : null) }}">
            <div class="invalid-feedback">{{ $errors->first('lessee_1_first_name') }}</div>
        </div>

        <div class="mb-3">
            <label for="lessee_1_last_name">Last Name <span class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('lessee_1_last_name') ? 'form-control is-invalid' : 'form-control' }}"
                   id="lessee_1_last_name" name="lessee_1_last_name" value="{{ old('lessee_1_last_name', isset($lead) ? $lead->lessee_1_last_name : null) }}">
            <div class="invalid-feedback">{{ $errors->first('lessee_1_last_name') }}</div>
        </div>

        <div class="mb-3">
            <label for="lessee_1_dob">Date of Birth<span class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('lessee_1_dob') ? 'form-control is-invalid' : 'form-control' }}"
                   id="lessee_1_dob" name="lessee_1_dob" value="{{ old('lessee_1_dob', isset($lead) ? $lead->lessee_1_dob : null) }}"
                   placeholder="YYYY/MM/DD">
            <div class="invalid-feedback">{{ $errors->first('lessee_1_dob') }}</div>
        </div>

        <div class="mb-3">
            <label for="lessee_1_phone">Phone<span class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('lessee_1_phone') ? 'form-control is-invalid' : 'form-control' }}"
                   id="lessee_1_phone" name="lessee_1_phone" value="{{ old('lessee_1_phone', isset($lead) ? $lead->lessee_1_phone : null) }}">
            <div class="invalid-feedback">{{ $errors->first('lessee_1_phone') }}</div>
        </div>

        <div class="mb-3">
            <label for="lessee_1_occupation">Occupation<span class="text-muted">*</span></label>
            <input type="text"
                   class="{{ $errors->has('lessee_1_occupation') ? 'form-control is-invalid' : 'form-control' }}"
                   id="lessee_1_occupation" name="lessee_1_occupation" value="{{ old('lessee_1_occupation', isset($lead) ? $lead->lessee_1_occupation : null) }}">
            <div class="invalid-feedback">{{ $errors->first('lessee_1_occupation') }}</div>
        </div>

        <div class="d-block my-3">
            @foreach(marital_status() as $item => $value)
                <div class="">
                    <input id="lessee_1_marital_status{{ $item }}" class="" name="lessee_1_marital_status"
                           type="radio"
                           value="{{ $item }}" {{ old('lessee_1_marital_status', isset($lead) ? $lead->lessee_1_marital_status : null) == $item ? 'checked required' : ($loop->first ? 'checked required' : '') }}>
                    <label class="" for="lessee_1_marital_status{{ $item }}">{{ $value }}</label>
                </div>
                <div class="invalid-feedback">{{ $errors->first('lessee_1_marital_status') }}</div>
            @endforeach
        </div>

        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="hasdogs" name="lessee_have_dog"
                   value="1" {{ old('lessee_have_dog', isset($lead) ? $lead->lessee_have_dog : null) ? 'checked' : '' }}>
            <label class="custom-control-label" for="hasdogs">Have dogs?</label>
        </div>

        <div class="mb-5">
            <label for="lessee_dog_breed">What breed of dogs (if you have dogs)?</label>
            <input type="text"
                   class="{{ $errors->has('lessee_dog_breed') ? 'form-control is-invalid' : 'form-control' }}"
                   id="lessee_dog_breed" name="lessee_dog_breed" value="{{ old('lessee_dog_breed', isset($lead) ? $lead->lessee_dog_breed : null) }}">
            <div class="invalid-feedback">{{ $errors->first('lessee_dog_breed') }}</div>
        </div>

        <hr class="mb-4">
        <h4 class="d-flex mb-3">Second Person on Lease <span class="text-muted">(if needed)</span></h4>

        <div class="mb-3">
            <label for="lessee_2_first_name">First Name </label>
            <input type="text" class="form-control" id="lessee_2_first_name" name="lessee_2_first_name"
                   value="{{ old('lessee_2_first_name', isset($lead) ? $lead->lessee_2_first_name : null) }}">
        </div>

        <div class="mb-3">
            <label for="lessee_2_last_name">Last Name </label>
            <input type="text" class="form-control" id="lessee_2_last_name" name="lessee_2_last_name"
                   value="{{ old('lessee_2_last_name', isset($lead) ? $lead->lessee_2_last_name : null) }}">
        </div>

        <div class="mb-3">
            <label for="lessee_2_dob">Date of Birth</label>
            <input type="text" class="form-control" id="lessee_2_dob" name="lessee_2_dob"
                   value="{{ old('lessee_2_dob', isset($lead) ? $lead->lessee_2_dob : null) }}" placeholder="YYYY/MM/DD">
        </div>

        <div class="mb-3">
            <label for="lessee_2_phone">Phone</label>
            <input type="text" class="form-control" id="lessee_2_phone" name="lessee_2_phone"
                   value="{{ old('lessee_2_phone', isset($lead) ? $lead->lessee_2_phone : null) }}">
        </div>

        <div class="mb-3">
            <label for="lessee_2_occupation">Occupation</label>
            <input type="text" class="form-control" id="lessee_2_occupation" name="lessee_2_occupation"
                   value="{{ old('lessee_2_occupation', isset($lead) ? $lead->lessee_2_occupation : null) }}">
        </div>

        <div class="d-block my-3">
            @foreach(marital_status() as $item => $value)
                <div class="">
                    <input id="lessee_2_marital_status{{ $item }}" name="lessee_2_marital_status"
                           type="radio"
                           value="{{ $item }}" {{ old('lessee_2_marital_status', isset($lead) ? $lead->lessee_2_marital_status : null) == $item ? 'checked required' : ($loop->first ? 'checked required' : '') }}>
                    <label class="" for="lessee_2_marital_status{{ $item }}">{{ $value }}</label>
                </div>
            @endforeach
        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

    </div>
</div>