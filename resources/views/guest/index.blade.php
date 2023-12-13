@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($trains as $train)
        <div class="d-flex gap-2">
            <p><span class="text-primary">Società:</span> {{$train->company}}</p>
            <p><span class="text-primary">Stazione di Partenza:</span> {{$train->departure_station}}</p>
            <p><span class="text-primary">Stazione di Arrivo:</span> {{$train->arrival_station}}</p>
            <p><span class="text-primary">Orario di Partenza:</span> {{$train->departure_time}}</p>
            <p><span class="text-primary">Orario di Arrivo:</span> {{$train->arrival_time}}</p>
            <p><span class="text-primary">Codice Treno:</span> {{$train->train_code}}</p>
            <p><span class="text-primary">Numero Carrozze:</span> {{$train->number_of_carriages}}</p>
            @if ($train->on_time === 1) 
             <p><span class="text-primary">In Orario:</span> Yes</p>      
                
            @else 
             <p><span class="text-primary">In Orario:</span> No</p>
            
                
            @endif
            @if ($train->cancelled === 1) 
             <p><span class="text-primary">Cancellato:</span> Yes</p>      
                
            @else 
             <p><span class="text-primary">Cancellato:</span> No</p>
            
                
            @endif
        
            
         </div>
        @endforeach

    </div>
</div>

@endsection