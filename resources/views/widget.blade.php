<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match live score</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
@foreach($details['response'] as $detail)
    <div class="match-all">
        <div class="match-container">
            <div class="match-top">
                <div class="match-status">{{$detail['fixture']['status']['long']}}</div>
                <div class="match-league"><img src="{{$detail['league']['logo']}}" alt="">{{$detail['league']['name']}}</div>
            </div>
        <div class="match-content">
            <div class="match-column">
                <div class="team">
                    <div class="logo">
                        <img src="{{$detail['teams']['home']['logo']}}" alt="{{$detail['teams']['home']['name']}}">
                    </div>
                    <h2 class="team-name">{{$detail['teams']['home']['name']}}</h2>
                </div>
            </div>
            <div class="match-column">
                <div class="match-details">
                    @php
                        $date = new DateTime($detail['fixture']['date'], new DateTimeZone('UTC'));
                        $location = (new DateTime)->getTimezone();
                        $date->setTimezone($location);
                        $time = $date->format('D-F,Y H:i');
                    @endphp
                    <div class="match-time">
                       {{$time}}
                    </div>
                    <div class="match-stadium">
                       {{$detail['fixture']['venue']['name']}}
                    </div>
                    <div class="match-score">
                        <span class="match-score-number">{{$detail['score']['fulltime']['home']}}</span>
                        <span class="match-score-separation">:</span>
                        <span class="match-score-number">{{$detail['score']['fulltime']['away']}}</span>
                    </div>
                    <div class="match-time-elapsed">
                    {{$detail['fixture']['status']['elapsed']}}'
                    </div>
                    @php 
                        $position = strrpos($detail['fixture']['referee'], ',');
                        $Referee = substr($detail['fixture']['referee'], 0, $position);
                    @endphp
                    <div class="match-referee">
                        <h2>{{$Referee}} </h2>
                    </div>
                </div>
            </div>
            <div class="match-column">
                <div class="team">
                    <div class="logo">
                        <img src="{{$detail['teams']['away']['logo']}}" alt="{{$detail['teams']['away']['name']}}" >
                    </div>
                    <h2 class="team-name">{{$detail['teams']['away']['name']}}</h2>
                </div>
            </div>
        </div>
        </div>
    </div>
@endforeach
</body>
</html>

