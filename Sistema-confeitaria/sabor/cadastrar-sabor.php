<div id="body" class="container-fluid" style="margin-top:12%">
    <section id="menu" class="col-6 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
            <h4 style="text-align: center;">Novo Sabor<h4>
        </div>
        <div class="col-2 justify-content-center mx-auto">
            <img src="../img/liquidificador.png" width="100%" height="100%"/>
        </div>
        <form action="index-admin.php?pageadm=sal-sab&acao=cadastrar" method="POST">

            <div class="form-row">
                <div class="col-6 mx-auto"><br/>
                    <h4>Nome do Sabor:</h4>
                    <input id="validationServer01" type="text" class="form-control" name="nome_sabor" placeholder="Cenoura" required><br/>
                </div>
            </div>
            <div class="form-group">
                <center><button class="btn btn-warning" type="submit" style="margin-top:2%">ENVIAR</a></center>
            </div>
        </form>
    </section>

</div>

<style>
body{
	background: url("../img/fundosab.jpg")no-repeat center top fixed;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

#menu{
    margin-top:10%;
    margin-left:20%;
    margin-right:20%;
    margin-bottom:5%;
    padding:0px, 10px, 0px, 10px;
    background-color: #3c3d41;
    border-style: solid;
    border-width: 2px;
    border-color:#e8b200;
    border-radius: 3px 40px;
}
    
h4{
    color: #e8b200;
    font-family: 'Baloo Bhaijaan', cursive;
}
</style>