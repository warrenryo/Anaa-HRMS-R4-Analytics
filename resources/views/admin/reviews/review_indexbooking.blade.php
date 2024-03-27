<x-app-layout>
    <div class="panel">
    <div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>Rates</th>
                <th>feedback</th>
                <th>Name</th>
                <th class="text-center">Action </th>
            </tr>
        </thead>
     <tbody>
    @php
        $happyFeedback = [];
        $loveFeedback = [];
        $seriousFeedback = [];
        $sadFeedback = [];
        $pissedFeedback = [];
    @endphp

    @foreach($rates as $rate)
        @switch($rate->rating)
            @case('Happy')
                @php $happyFeedback[] = $rate; @endphp
                @break
            @case('Love')
                @php $loveFeedback[] = $rate; @endphp
                @break
            @case('Serious')
                @php $seriousFeedback[] = $rate; @endphp
                @break
            @case('Sad')
                @php $sadFeedback[] = $rate; @endphp
                @break
            @case('Pissed')
                @php $pissedFeedback[] = $rate; @endphp
                @break
        @endswitch
    @endforeach

    @foreach($happyFeedback as $rate)
        <tr>
            <td class="whitespace-nowrap">&#9733;&#9733;&#9733;&#9733;&#9733; 😄 Happy</td>
            <td>{{$rate->comment}}</td>
            <td>{{ $rate->name }}</td> 
            <td class="text-center"> 
                
        </tr>
    @endforeach

    @foreach($loveFeedback as $rate)
        <tr>
            <td class="whitespace-nowrap">&#9733;&#9733;&#9733;&#9733; 😍 Love</td>
            <td>{{$rate->comment}}</td>
            <td>{{ $rate->name }}</td> 
            <td class="text-center"> 
        </tr>
    @endforeach

    @foreach($seriousFeedback as $rate)
        <tr>
            <td class="whitespace-nowrap">&#9733;&#9733;&#9733; 😐 Serious</td>
            <td>{{$rate->comment}}</td>
            <td>{{ $rate->name }}</td> 
                        <td class="text-center">
        </tr>
    @endforeach

    @foreach($sadFeedback as $rate)
        <tr>
            <td class="whitespace-nowrap">&#9733;&#9733; 😢 Sad</td>
            <td>{{$rate->comment}}</td>
            <td>{{ $rate->name }}</td> 
                        <td class="text-center"> 
        </tr>
    @endforeach

    @foreach($pissedFeedback as $rate)
        <tr>
            <td class="whitespace-nowrap">&#9733; 😡 Pissed</td>
            <td>{{$rate->comment}}</td>
            <td>{{ $rate->name }}</td> 
            <td class="text-center"> 
        </tr>
    @endforeach
                </tbody>
            </table>
        </div>
     </div>
</x-app-layout>