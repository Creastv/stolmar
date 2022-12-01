jQuery(document).ready(function ($) {
var oldStart = 0;
    var $range = $(".flat_area_range"),
        $from = $(".min-from"),
        $to = $(".min-to"),
        range,
        from,
        to;

    var updateValues = function () {
        $from.prop("value", from);
        $to.prop("value", to);
    };

    $range.ionRangeSlider({
        type: "double",
        min: $('.min-from').val(),
        max: $('.min-to').val(),
        prettify_enabled: false,
        postfix: " m<sup>2</sup>",
        grid: false,
        onChange: function (data) {
            from = data.from;
            to = data.to;

            updateValues();
        },
        onFinish: function (data) {
            table.draw();
        }
    });

    range = $range.data("ionRangeSlider");

    $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = parseFloat($('#min').val(), 10);
            var max = parseFloat($('#max').val(), 10);
            var size = parseFloat(data[4]) || 0;

            if (
                (isNaN(min) && isNaN(max)) ||
                (isNaN(min) && size <= max) ||
                (min <= size && isNaN(max)) ||
                (min <= size && size <= max)) {
                return true;
            }
            return false;
        }
    );

    var table = $('#table').DataTable({

        language: {
            'url': '//cdn.datatables.net/plug-ins/1.10.13/i18n/Polish.json',
        },
         fnDrawCallback: function (o) {
        if (o._iDisplayStart != oldStart) {
            var targetOffset = jQuery("#table").offset().top;
            jQuery("html,body").animate({ scrollTop: targetOffset - 100 }, 500);
            oldStart = o._iDisplayStart;
        }
        },
        // "bStateSave": true,
        // "stateSave": true,
        "bInfo": false,
        "sDom": 'Rfrtlip',
        "fixedColumns": true,
        "scrollCollapse": true,
        "responsive": true,
        "aLengthMenu": [[15, 30, 45, -1], [15, 30, 45, "All"]],
        "pageLength": 15,
        "iDisplayLength": 15,
        "initComplete": function () {
            // formModal();
        },
        columns: [
            {data: 'name', className: "flat_name"},
            {data: 'building', className: "flat_building"},
            {data: 'floor', className: "flat_floor"},
            {data: 'rooms', className: "flat_rooms"},
            {data: 'area', className: "flat_area"},
            {data: 'sold_status', className: "flat_sold_status"},
            {data: 'price', className: "flat_price"},
            {data: 'pdf', className: "flat_pdf"},
            {data: 'answer', className: "flat_answer"},
        ],
        columnDefs: [
            {
                orderable: false,
                targets: [7, 8]
            },
            {
                // "targets": [ 9, 10, 11 ],
                "visible": false,
                "searchable": true
            },
        ],
        "order": [[5, "desc"]]
    });

    $('#flat_rooms').on('change', function () {
        table.columns(3).search(this.value).draw();
    });

    $('#flat_floor').on('change', function () {
        table.columns(2).search(this.value).draw();
    });

     $('#building-id').on( 'keydown', function () {
    //    $('#building-id').val(this.value).change();
        table.columns(1).search( this.value ).draw();
    } );

    const dataFloor = $('[data-floor]');

    dataFloor.on("click", function () {
        // table.columns(2).search($(this).data('floor')).draw();
        $('#building-id').val($(this).data('floor')).change();
        table.columns(1).search( $(this).data('floor') ).draw();
    });

    dataFloor.on("mouseover", function () {
        let floor = $(this).data('floor');
        // let status = $(this).data('status');
        let apartOne = $(this).data('apartone');
        let apartTwo = $(this).data('aparttwo');
        let apartOneStat = $(this).data('apartonestat');
        let apartTwoStat = $(this).data('aparttwostat');
        const tooltip = $('.tooltip-content');

        tooltip.css("display", "flex");
        
        tooltip.html(`<div class="floor-item other">
         <div class="bud"> <span>Budynek: </span>${floor}</div>
         <div class="apart ${apartOneStat}"> ${apartOne} <span >${apartOneStat}</span></div>
         <div class="apart ${apartTwoStat}">${apartTwo} <span >${apartTwoStat}</span></div>
         </div>`);
    });

   

    
});

