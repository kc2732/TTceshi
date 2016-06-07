<div class="index-footer" id = "all-footer">
    <table class="footer-table">
        <tr>
            <td style="min-width: 150px;">团队介绍</td>
            <td> Email:guoshacao@gmail.com</td>
        </tr>
        <tr><td>加入我们</td></tr>
        <tr><td style="min-width: 150px;">联系我们</td><td>Tel:+1(203)502-9540</td></tr>
    </table>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        var currentLangCode = 'zh-cn';

        // build the language selector's options
        $.each($.fullCalendar.langs, function(langCode) {
            $('#lang-selector').append(
                $('<option/>')
                    .attr('value', langCode)
                    .prop('selected', langCode == currentLangCode)
                    .text(langCode)
            );
        });

        // rerender the calendar when the selected option changes
        $('#lang-selector').on('change', function() {
            if (this.value) {
                currentLangCode = this.value;
                $('#calendar').fullCalendar('destroy');
                renderCalendar();
            }
        });

        function renderCalendar() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
//				defaultDate: '2016-05-12',
                lang: currentLangCode,
                buttonIcons: false, // show the prev/next text
                weekNumbers: true,
                editable: true,
                eventLimit: true,// allow "more" link when too many events
                dayClick: function(date, jsEvent, view) {
                    console.log(date.format());
                    var day = new Date(date.format());
                    var day_right = day.getDay()+1;
                    window.location.assign('index.php?date='+ day_right);
//                        alert('Clicked on: ' + date.format());
//
//                        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
//
//                        alert('Current view: ' + view.name);

                    // change the day's background color just for fun
                    $(this).css('background-color', 'grey');

                }
            });
        }

        renderCalendar();
    });

    $('#calendar').fullCalendar({

    });
</script>

</body>
</html>