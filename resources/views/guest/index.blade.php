@extends('layouts.app')

@section('content')
<div class="container-md">
    <div class="row">      

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Società</th>
                    <th scope="col">Stazione di Partenza</th>
                    <th scope="col">Stazione di Arrivo</th>
                    <th scope="col">Orario di Partenza</th>
                    <th scope="col">Orario di Arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Numero Carrozze</th>
                    <th scope="col">In Orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>                        
                        <td>{{$train->company}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                        <td>{{$train->train_code}}</td>
                        <td>{{$train->number_of_carriages}}</td>
                        <td>@if ($train->on_time === 1) 
                            <p><span class="text-primary"></span> Yes</p>      
                            
                        @else 
                            <p><span class="text-primary"></span> No</p>
                        
                            
                        @endif</td>
                        <td>@if ($train->cancelled === 1) 
                            <p><span class="text-primary"></span> Yes</p>      
                            
                        @else 
                            <p><span class="text-primary"></span> No</p>
                        
                            
                        @endif</td>
                        
                    </tr>
                    @endforeach
            
            </tbody>
          </table>

    </div>
</div>




@foreach ($trains as $train)

@endforeach