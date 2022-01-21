@extends('layouts.app')

@section('content')


    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="card card-default">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                {{ isset($bank) ? 'Edit '.$bank->name: 'Create Bank' }}
                @if(isset($bank))
                    <div class="d-flex align-items-center">
                        <span class="mr-2" >status in website:</span>
                        <span class="dot {{$bank->status ? 'active':'deactive'}}"></span>
                        <span class="badge {{$bank->status ? 'badge-success':'badge-danger'}} ml-1">{{$bank->status ? 'Active':'Deactive'}}</span>
                    </div>
                @endif
            </div>

        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item text-danger">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{isset($bank) ? route('banks.update', $bank->slug) : route('banks.store')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                @if(isset($bank))
                    @method('PUT')
                @endif
                <div class="form-row">
                    <div class="form-group  col-md-6">
                        <label for="title">Bank Name</label>
                        <input type="text" id="name" class="form-control" name="name"
                               value="{{ isset($bank) ? $bank->name: '' }}" placeholder="Enter Bank Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">Bank Registered Name</label>
                        <input type="text" id="registered_name" class="form-control" name="registered_name"
                               value="{{ isset($bank) ? $bank->registered_name: '' }}"
                               placeholder="Example: VISA FUND MANAGEMENT for Visa Bank" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">Bank Slug - Use in link of bank in website</label>
                    <br>
                    <small id="passwordHelpInline" class="text-muted">
                        <strong>Note:</strong> don't use <strong>space</strong> in slug. you can use (- or _)
                    </small>
                    <input type="text" id="slug" class="form-control" name="slug"
                           value="{{ isset($bank) ? $bank->slug: '' }}" placeholder="Example: visa-bank , mjc-bank" required>
                </div>

                <div class="form-group">
                    <label for="title">Bank BIC</label>
                    <input type="text" id="bic" class="form-control" name="bic"
                           value="{{ isset($bank) ? $bank->bic: '' }}" placeholder="Bank BIC (Swift Code), Example: VIEXHKH1" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Bank Website</label>
                        <input type="text" id="website" class="form-control" name="website"
                               value="{{ isset($bank) ? $bank->website: '' }}" placeholder="Enter Bank Website" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Bank Email</label>
                        <input type="email" id="email" class="form-control" name="email"
                               value="{{ isset($bank) ? $bank->email: '' }}" placeholder="Enter Bank Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">Bank Address</label>
                    <input type="text" id="address" class="form-control" name="address"
                           value="{{ isset($bank) ? $bank->address: '' }}" placeholder="Enter Bank Address">
                </div>
                <div class="form-group">
                    <p for="title">Need Presence ?</p>
                    <label class="radio-inline">
                        <input type="radio" name="presence"  {{isset($bank) ? $bank->presence ? 'checked':  '':''}} value="1"> Yes
                    </label>
                    <label class="radio-inline ml-4">
                        <input type="radio" name="presence" {{isset($bank) ? $bank->presence ? '':  'checked': 'checked'}} value="0"> No
                    </label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="category">Bank Type</label>
                        <select name="type" id="type" class="form-control">
                            <option value="private" {{isset($bank)? $bank->type == 'private'? 'selected': '':''}}>Private</option>
                            <option value="retail" {{isset($bank)?$bank->type == 'retail'? 'selected': '':''}}>Retail</option>
                            <option value="commercial" {{isset($bank)?$bank->type == 'commercial'? 'selected': '':''}}>Commercial</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="category">Bank Certification</label>
                        <select name="certification" id="certification" class="form-control">
                            <option value="advanced" {{isset($bank)?$bank->certification == 'advanced'? 'selected': '':''}}>Advanced</option>
                            <option value="not_certified" {{isset($bank)?$bank->certification == 'not_certified'? 'selected': '':''}}>Not Certified</option>
                            <option value="entry" {{isset($bank)?$bank->certification == 'entry'? 'selected': '':''}}>Entry</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="title">Total Income</label>
                        <input type="number" id="total_income" class="form-control" name="total_income"
                               value="{{ isset($bank) ? $bank->total_income: '' }}"
                               placeholder="Enter Bank Total Income" >
                    </div>
                    <div class="form-group col-md-5">
                        <label for="title">Total Assets</label>
                        <input type="number" id="total_assets" class="form-control" name="total_assets"
                               value="{{ isset($bank) ? $bank->total_assets: '' }}"
                               placeholder="Enter Bank Total Assets">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="category">Currency</label>
                        <select name="currency" id="currency" class="form-control">
                            <option value="HKD">HKD</option>
                            <option value="USD">USD</option>
                            <option value="GBP">GBP</option>
                            <option value="EUR">EUR</option>
                            <option value="CNY">CNY</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">

                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="title">Total Bank Employee</label>
                        <input type="number" id="employee" class="form-control" name="employee"
                               value="{{ isset($bank) ? $bank->employee: '' }}"
                               placeholder="Enter Bank Employee Number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <small id="short_description" class="form-text text-muted">Note: max 145  words</small>
                    <textarea name="short_description" id="short_description" rows="5" cols="5" maxlength="200"
                              class="form-control" required>{{ isset($bank) ? $bank->short_description : '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input id="description" type="hidden" name="description"
                           value="{{isset($bank)? $bank->description: ''}}">
                    <trix-editor input="description"></trix-editor>
                    {{--                    <textarea name="content" id="content" rows="5" cols="5" class="form-control"></textarea>--}}
                </div>
                <div class="form-group">
                    <label for="title">Bank Blockquote - short or bold sentence about bank (Optional)</label>
                    <input type="text" id="blockquote" class="form-control" name="blockquote"
                           value="{{ isset($bank) ? $bank->blockquote: '' }}" placeholder="Enter Bank Blockquote">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="category">Headquarters</label>
                        <select name="headquarter" id="headquarter" class="form-control">
                            @foreach($countries as $country)
                                <option value="{{$country}}"  {{isset($bank)? $bank->headquarter == $country ? 'selected':'':'' }}>{{$country}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="founded">Founded At</label>
                        <input type="text" id="founded" class="form-control flat" name="founded"
                               value="{{ isset($bank) ? $bank->founded : '' }}">
                    </div>
                </div>
                <div class="form-group">
                    <p for="title">Bank Status in Website ? bank currently  is {{isset($bank)? $bank->status?'Active':'Deactive':''}}</p>
                    <label class="radio-inline">
                        <input type="radio" name="status"  {{isset($bank)? $bank->status ? 'checked':  '':'checked'}} value="1"> Active
                    </label>
                    <label class="radio-inline ml-4">
                        <input type="radio" name="status" {{isset($bank)?$bank->status ? '':  'checked':''}} value="0"> Deactive
                    </label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="image">Main Image</label>
                        <input type="file" id="img_1" class="form-control" name="img_1" >
                    </div>
                </div>
                @if(isset($bank))
                    <div class="form-group">
                        <img src="{{ asset($bank->img_1) }}" alt="" style="width: 300px">
                    </div>
                @endif
                <div class="form-row mt-5">
                    <div class="form-group col-md-5">
                        <label for="image">Second Image - used for description picture (optional)</label>
                        <input type="file" id="img_2" class="form-control" name="img_2">
                    </div>
                </div>
                @if(isset($bank))
                    <div class="form-group">
                        <img src="{{ asset($bank->img_2) }}" alt="" style="width: 300px">
                    </div>
                @endif

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        {{ isset($bank) ? 'Update Bank': 'Create Bank' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $("#founded").flatpickr({
            dateFormat: "Y-m-d",
        });
    </script>
    <script>
        $("input#slug").on({
            keydown: function(e) {
                if (e.which === 32)
                    return false;
            },
            change: function() {
                this.value = this.value.replace(/\s/g, "");
            }
        });
    </script>
@endsection

