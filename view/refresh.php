        
        <div class="container">
    
    <h1 id="titulo">Gerar números aleatórios</h1>
    <script>
                function sorteioNumero(){
                    msg.innerHTML = Math.floor(Math.random() * 100);
                }
                window.onload = sorteioNumero;
            </script>


        <p id="msg"></p>
    
</div>