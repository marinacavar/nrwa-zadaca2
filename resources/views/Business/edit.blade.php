@extends('layouts/app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Business Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('business.update', $Product->cust_id ) }}">
        @csrf
          @method('PATCH')
          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $Product->name }}"/>
          </div>
          <div class="form-group">
              <label for="state_id">State Id:</label>
              <input type="text" class="form-control" name="state_id" value="{{ $Product->state_id }}"/>
          </div>
          <div class="form-group" style="margin-bottom: 15px;">
              <label for="incorp_date">Incorp Date:</label>
              <input type="date" class="form-control" name="incorp_date" value="{{ $Product->incorp_date }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection
