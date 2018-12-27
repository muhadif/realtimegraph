$(document).each(function(){
   loadData();
   loadAverage();
})

function loadData(){
    $.get('controller/data.php',function(data){
        $('#dom-target').html(data);
    })
}

function loadAverage(){
    $.get('controller/average.php',function(data){
        $('#dom-target-avg').html(data);
    })
}

window.setInterval(loadData,1000);
