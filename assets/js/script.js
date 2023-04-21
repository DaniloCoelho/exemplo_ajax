
$('#form1').submit(function(e){// submit
    e.preventDefault(); //nao carrega a pagina

    var u_name = $('#name').val();
    var u_comment = $('#comment').val();

    $.ajax({
        url: 'http://localhost/teste%20ajax/inserir.php',
        method: 'POST',
        data: {name: u_name, comment:u_comment}, //$_POST['name'] , $_POST['comment']
        dataType: 'json'
    }).done(function(result){
        $('#name').val('');
        $('#comment').val('');
        console.log(result);
        
        getCommentsUltimate();
    });
});

function getComments() { //todos registros
    $.ajax({
        url: 'http://localhost/teste%20ajax/selecionar.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){ //recebe um resultado da requisicao
        console.log(result);
        if(result != 0){
            for (var i = 0; i < result.length; i++) {
                $('.box_comment').prepend('<div class="b_comm"><h4>' + result[i].name + '</h4><p>' + result[i].comment + '</p></div>');
            }
        }
        
    });
}

function getCommentsUltimate() { //ultimo registro
    $.ajax({
        url: 'http://localhost/teste%20ajax/selecionar_ultimo.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
        console.log(result);

        if(result != 0){
            for (var i = 0; i < result.length; i++) {
                $('.box_comment').prepend('<div class="b_comm"><h4>' + result[i].name + '</h4><p>' + result[i].comment + '</p></div>');
            }
        }
        
    });
}

getComments();