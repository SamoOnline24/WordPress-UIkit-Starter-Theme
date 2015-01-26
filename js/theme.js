$(document).ready(function() {
    console.log($('#thegrid'));
    $('#thegrid').on('afterupdate', function(e){
        alert('afterupdate.uk.grid');
    });
});