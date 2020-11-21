<!-- Chama a biblioteca jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type = "text/javascript">
jQuery(document).ready(function(){
var param = 10;
    jQuery.ajax({
        url: 'teste2.php',
        ascyn: false,
        data:{
            'param': param
        },
        type: 'POST',
        dataType: 'html',
        success: function (data){
            var dados = [];
            dados.push(JSON.parse(data));
            dados.forEach((elem)=>{
                console.log(elem.idprod);
                console.log(elem.nome);
                console.log(elem.cor);
                console.log(elem.preco);
                document.getElementById("resultado").innerHTML =  elem.idprod + ' ' + elem.nome + ' ' + elem.cor + ' ' + elem.preco;
                jQuery("#resultado2").html(elem.idprod);
            });
        }
    });
});
</script>
<div id = "resultado"></div>
