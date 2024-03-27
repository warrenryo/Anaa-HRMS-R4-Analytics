<x-app-layout>


    <div class="panel">
        <div class="flex justify-end">
            <form action=""></form>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Room Number</th>
                        <th>Name</th>
                        <th>Room Ratings</th>
                        <th>Service Ratings</th>
                        <th>Reviews</th>
                        <th>Status</th>
                        <th>Action </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reviews as $review)
                        <tr>
                            <td>{{ $review['room_no'] }}</td>
                            <td>{{ $review['name'] }}</td>
                            <td>{{ $review['how_room'] }}</td>
                            <td>{{ $review['how_service'] }}</td>
                            <td>{{ $review['reviews'] }}</td>
                            <td>
                                @if($review['status'] == 'Pending')
                                    <span class="badge bg-danger">{{$review['status']}}</span>
                                    @else
                                    <span class="badge bg-success">{{$review['status']}}</span>
                                @endif
                            </td>
                            <td>
                                @if($review['status'] == 'Pending')
                                    <form method="POST" action="{{ url('update-rev-status/'.$review['id']) }}">
                                        @csrf
                                        <button  type="submit" class="btn btn-primary"><i class="fa-solid fa-check mr-2"></i> Approve</button>
                                    </form>
                                  
                                    @else
                                    <button class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                                    @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td></td>
                            <td></td>
                            <td>No Data found</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
