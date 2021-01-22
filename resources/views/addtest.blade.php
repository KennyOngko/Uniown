@extends('layouts.layadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/addtest" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Schedule ID</label>
                            <select class="form-control" id="schedule_id" name="schedule_id">
                            <option value="">Select Schedule ID</option>
                                @foreach($schedule as $s)
                                <option value="{{ $s->id }}" {{ old('schedule_id') == $s->id ? 'selected' : null }}>{{ $s->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Result</label>
                            <select class="form-control" id="result" name="result">
                            <option value="">Select Result</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Result</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection