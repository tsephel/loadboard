@extends('layouts.admin')


@section('content')

    <h1>Google Map</h1>

    <div id="map"></div>
    

@endsection


@section('scripts')

<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu5jmEfu5ZGU54Bkr1i7_1_TJVl42vV74&callback=initMap">
</script>

<script>

    function initMap(){

       map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });


    }

</script>

@stop




