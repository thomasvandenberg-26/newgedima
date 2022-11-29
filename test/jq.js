$(function(){
    $("#formcom").submit(function(){
     titre_rea = $(this).find("input[name=titre_rea]").val();
     description_rea = $(this).find("textarea[name=description_rea]").val();
     date_rea = $(this).find("input[name=date_rea]").val();
     date_participation = $(this).find("input[name=date_participation]").val(); 
     upfile = $(this).find("input[name=upfile").val(); 
     $.post("jqphp.php", {titre_rea: titre_rea,description_rea: description_rea,date_rea: 
        date_rea, date_participation: date_participation, upfile: upfile,
        function(data) {
            alert(data);
        }
    })

    });

}); 