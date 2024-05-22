@extends('layouts.app')

@section('content')
    <div class="showHistoryId">
        @foreach ($OrderHistoryIDs as $OrderHistoryID)
            <input type="hidden" value="{{ $OrderHistoryID->product }}" name="id">
            <input type="hidden" value="{{ $OrderHistoryID->quantity }}" name="id">
            <p style="position: relative;margin-top:10%;left:5%;margin-bottom: 6%;" > {{$OrderHistoryID->product}} {{$OrderHistoryID->quantity}}</p>
        @endforeach
    </div>
@endsection
