{{--Chart css --}}
<link href="{{asset('domandas/css/chartist.min.css')}}" rel="stylesheet">

<div class="row">
    <div class="col-md-offset-11 col-md-1">
        <a id="profile_edit"><i class="fa fa-cog fa-3x" aria-hidden="true"></i></a>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-md-offset-4">
            <img class="img-responsive img-circle" width="210px" height="200px" src="data:image/jpeg;base64,{{base64_encode($user->image)}}" alt="">
    </div>
    <div class="col-md-5">
            <h3><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;{{$user->firstname}} {{$user->lastname}}</h3>
            <h5><i class="fa fa-thumbs-up" aria-hidden="true"></i> <b>Skills: {{$user->skills}}</b></h5>
            <h5><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Current Project: {{$user->project}}</h5>
            <h5><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;Position: {{$user->position}}</h5>
            <h5><i class="fa fa-sitemap" aria-hidden="true"></i>&nbsp;Department: {{$user->department}}</h5>
            <h5><i class="fa fa-university" aria-hidden="true"></i> Company: {{$user->company}}</h5>
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Email: <a href="mailto:{{$user->email}}?Subject=Test" target="_top">{{$user->email}}</a></h5>
    </div>
</div>
<hr />
{{--sum of contributor point--}}
<div class="row">
    <div class="col-md-offset-4">
        <h3>Current Contribute Point of 2017: <b><span style="color: #2A3542;">{{$user->credit}} points</span></b></h3>
        <h5 style="color: #0055b3"><u><i class="fa fa-trophy" aria-hidden="true"></i> The best contributor of 2016 with
            <b><span>133 Points</span></b></u></h5>
    </div>
</div>
{{--Contributor Point per month--}}
<div class="row">
    <div class="col-md-offset-4">
        <h3><b>Contribute Points Per Month</b></h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12" id="average_contribute_point"></div>
</div>
<hr />
{{--- Questions and answer per month--}}
    {{--- sum of question(be answered)--}}
    {{--- sum of answer(be accepted)--}}
<div class="row">
    <div class="col-md-offset-1 col-md-5">
        <h3><b>Helpful/Asked Per Month</b></h3>
    </div>
    <div class="col-md-offset-1 col-md-5">
        <h3><b>Answered/Accepted Per Month</b></h3>
    </div>
</div>
<div class="row">
    <div class="col-md-6" id="question_related">

    </div>
    <div class="col-md-6" id="answer_related">

    </div>
</div>
<hr />
{{--- frequent asked theme and frequent answered theme--}}
<div class="row">
    <div class="row">
        <div class="col-md-offset-1 col-md-5">
            <h3><b>Frequently Asked Theme(%)</b></h3>
        </div>
        <div class="col-md-offset-1 col-md-5">
            <h3><b>Frequently Answered Theme(%)</b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" id="question_theme"></div>
        <div class="col-md-6" id="answer_theme"></div>
    </div>
</div>
<hr />
{{--average duration--}}
<div class="row">
    <div class="row">
        <div class="col-md-offset-4">
            <h3><b>Average Answer Duration Per Month(Min.)</b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" id="average_duration"></div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#dashboard_path li.tmp_path").remove();
        $("#dashboard_path").append(
            "<li class='tmp_path'><i class='fa fa-user' aria-hidden='true'></i>Profile</li>"
        );
    });
</script>
{{--chart js--}}
<script src="{{asset('domandas/js/chartist.min.js')}}"></script>
{{--js for dynamic points chart --}}
<script>
    var chart = new Chartist.Line('#average_contribute_point', {
        labels: ['Jan.(23 Points)', 'Feb.(10 Points)', 'Mar.(30 Points)', 'Apr.(3 Points)', 'May(10 Points)', 'Jun.(7 Points)'],
        series: [
            [23, 10, 30, 3, 10, 7]
        ]
    }, {
        low: 0,
        height: 300,
    });

    // Let's put a sequence number aside so we can use it in the event callbacks
    var seq = 0,
            delays = 80,
            durations = 500;

    // Once the chart is fully created we reset the sequence
    chart.on('created', function() {
        seq = 0;
    });

    // On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
    chart.on('draw', function(data) {
        seq++;

        if(data.type === 'line') {
            // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
            data.element.animate({
                opacity: {
                    // The delay when we like to start the animation
                    begin: seq * delays + 1000,
                    // Duration of the animation
                    dur: durations,
                    // The value where the animation should start
                    from: 0,
                    // The value where it should end
                    to: 1
                }
            });
        } else if(data.type === 'label' && data.axis === 'x') {
            data.element.animate({
                y: {
                    begin: seq * delays,
                    dur: durations,
                    from: data.y + 100,
                    to: data.y,
                    // We can specify an easing function from Chartist.Svg.Easing
                    easing: 'easeOutQuart'
                }
            });
        } else if(data.type === 'label' && data.axis === 'y') {
            data.element.animate({
                x: {
                    begin: seq * delays,
                    dur: durations,
                    from: data.x - 100,
                    to: data.x,
                    easing: 'easeOutQuart'
                }
            });
        } else if(data.type === 'point') {
            data.element.animate({
                x1: {
                    begin: seq * delays,
                    dur: durations,
                    from: data.x - 10,
                    to: data.x,
                    easing: 'easeOutQuart'
                },
                x2: {
                    begin: seq * delays,
                    dur: durations,
                    from: data.x - 10,
                    to: data.x,
                    easing: 'easeOutQuart'
                },
                opacity: {
                    begin: seq * delays,
                    dur: durations,
                    from: 0,
                    to: 1,
                    easing: 'easeOutQuart'
                }
            });
        } else if(data.type === 'grid') {
            // Using data.axis we get x or y which we can use to construct our animation definition objects
            var pos1Animation = {
                begin: seq * delays,
                dur: durations,
                from: data[data.axis.units.pos + '1'] - 30,
                to: data[data.axis.units.pos + '1'],
                easing: 'easeOutQuart'
            };

            var pos2Animation = {
                begin: seq * delays,
                dur: durations,
                from: data[data.axis.units.pos + '2'] - 100,
                to: data[data.axis.units.pos + '2'],
                easing: 'easeOutQuart'
            };

            var animations = {};
            animations[data.axis.units.pos + '1'] = pos1Animation;
            animations[data.axis.units.pos + '2'] = pos2Animation;
            animations['opacity'] = {
                begin: seq * delays,
                dur: durations,
                from: 0,
                to: 1,
                easing: 'easeOutQuart'
            };

            data.element.animate(animations);
        }
    });

    // For the sake of the example we update the chart every time it's created with a delay of 10 seconds
    chart.on('created', function() {
        if(window.__exampleAnimateTimeout) {
            clearTimeout(window.__exampleAnimateTimeout);
            window.__exampleAnimateTimeout = null;
        }
        window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
    });
</script>
{{--js for question and answer related charts--}}
<script>
    new Chartist.Bar('#question_related', {
        labels: ['Jan.(9/21)', 'Feb.(3/11)', 'Mar.(13/33)', 'Apr.(1/1)', 'May(16/21)', 'Jun.(7/13)'],
        series: [
            [9, 3, 13, 1, 16, 7],
            [21, 11, 33, 1, 21, 13]
        ]
    }, {
        height: 230,
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return value;
            }
        }
    }).on('draw', function(data) {
        if(data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 30px'
            });
        }
    });

    new Chartist.Bar('#answer_related', {
        labels: ['Jan.(23/31)', 'Feb.(10/22)', 'Mar.(30/43)', 'Apr.(3/11)', 'May(10/17)', 'Jun.(7/13)'],
        series: [
            [23, 10, 30, 3, 10, 7],
            [31, 22, 43, 11, 17, 13]
        ]
    }, {
        height: 230,
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return value;
            }
        }
    }).on('draw', function(data) {
        if(data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 30px'
            });
        }
    });

</script>
{{--js for frequently theme--}}
<script>
    var data_question_theme = {
        labels: ['#Design(40%)', '#HR(15%)', '#Innovation(15%)', '#Golang(30%)'],
        series: [40, 15, 15, 30]
    };

    var data_answer_theme = {
        labels: ['#React(15%)', '#PHP(30%)', '#Laravel(15%)', '#HTML(40%)'],
        series: [15, 30, 15, 40]
    };

    var options = {
        labelInterpolationFnc: function(value) {
            return value[0]
        }
    };

    var responsiveOptions = [
        ['screen and (min-width: 640px)', {
            chartPadding: 30,
            labelOffset: 100,
            labelDirection: 'explode',
            labelInterpolationFnc: function(value) {
                return value;
            }
        }],
        ['screen and (min-width: 1024px)', {
            labelOffset: 80,
            chartPadding: 20,
            height: 290
        }]
    ];
    new Chartist.Pie('#answer_theme', data_answer_theme, options, responsiveOptions);
    new Chartist.Pie('#question_theme', data_question_theme, options, responsiveOptions);
</script>
{{--average Duration--}}
<script>
    var chart = new Chartist.Line('#average_duration', {
        labels: ['Jan.(13 Min.)', 'Feb.(7 Min.)', 'Mar.(22 Min.)', 'Apr.(5 Min.)', 'May(12 Min.)', 'Jun.(15 Min.)'],
        series: [
            [13, 7, 22, 5, 12, 15]
        ]
    },{
        height: 300,
    });

    // Listening for draw events that get emitted by the Chartist chart
    chart.on('draw', function(data) {
        // If the draw event was triggered from drawing a point on the line chart
        if(data.type === 'point') {
            // We are creating a new path SVG element that draws a triangle around the point coordinates
            var triangle = new Chartist.Svg('path', {
                d: ['M',
                    data.x,
                    data.y - 15,
                    'L',
                    data.x - 15,
                    data.y + 8,
                    'L',
                    data.x + 15,
                    data.y + 8,
                    'z'].join(' '),
                style: 'fill-opacity: 1'
            }, 'ct-area');

            // With data.element we get the Chartist SVG wrapper and we can replace the original point drawn by Chartist with our newly created triangle
            data.element.replace(triangle);
        }
    });

</script>