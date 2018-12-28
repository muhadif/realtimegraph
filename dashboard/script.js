$(document).each(function(){
   loadData();
   loadAverage();
})

function loadData(){
    $.get('controller/data.php',function(data){
        $('#dom-target').html(data);
    })
    $.get('controller/average.php',function(data){
        $('#dom-target-avg').html(data);
    })
    $.get('controller/time.php',function(data){
        $('#dom-target-time').html(data);
    })
    $.get('controller/min.php',function(data){
        $('#dom-target-max').html(data);
    })
    $.get('controller/max.php',function(data){
        $('#dom-target-min').html(data);
    })
}

function loadAverage(){
    $.get('controller/average.php',function(data){
        $('#dom-target-avg').html(data);
    })
}

window.setInterval(loadData,1000);

