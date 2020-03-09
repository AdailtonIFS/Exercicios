<div class="container">
    <form action="Controller/lanchonete.php" method="POST">
    
    <h1 id="titulo">Select</h1>

    <select name="prato" class="custom-select">
        <option value="false" selected>
            Escolha seu prato?
        </option>
        <option value="vegetariano">
            Vegetariano
        </option>
        <option value="peixe">
            Peixe
        </option>
        <option value="frango">
            Frango
        </option>
        <option value="carne">
            Carne
        </option>
    </select>
   
    <select name="sobremesa" class="custom-select">
        <option value="false" selected>
            Qual a sua sobremesa?
        </option>
        <option value="abacaxi">
            Abacaxi
        </option>
        <option value="sorvetediet">
            Sorvete Diet
        </option>
        <option value="mousediet">
            Mouse Diet
        </option>
        <option value="mousechocolate">
            Mouse Chocolate
        </option>
    </select>

    <select name="bebida" class="custom-select">
        <option value="false" selected>
            Qual a sua Bebida?
        </option>
        <option value="cha">
            Chá
        </option>
        <option value="sucolaranja">
            Suco de Laranja
        </option>
        <option value="sucomelao">
           Suco de Melão
        </option>
        <option value="refridiet">
            Refri Diet
        </option>
    </select>
            <button type="submit" id="button" class="btn btn-primary">Escolher</button>
    </form>

    <?php if(isset($_GET['result'])){ ?>
        <span id="msg"><?= $_GET['result']?></span>
        <?php } ?>
</div>