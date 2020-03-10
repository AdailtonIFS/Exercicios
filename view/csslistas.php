<div class="container">

            <h1 id="titulo">Exemplos de Estilos de listas:</h1>

            <h2>Primeira lista</h2>

            <ul>
                <li style="list-style-type:square">
                    Item 01
                </li>

                <li style="list-style-type:circle">
                    Item 02
                </li>

                <li style="list-style-type:disc">
                    Item 03
                </li>
            </ul>

            <h2>Segunda lista</h2>

            <ul id="segunda">
                <li>
                    Item 01
                </li>

                <li>
                    Item 02
                    <ul id="subsegunda">
                        <li>Sub 2.1</li>
                        <li>Sub 2.2</li>
                        <li>Sub 2.3</li>
                    </ul>
                </li>

                <li>
                    Item 03
                </li>

                <li>
                    Item 04
                </li>
            </ul>


            <style>
                #segunda{
                    list-style-type: upper-latin;
                }
                #subsegunda {
                    list-style-image: url(./img/fundo02.png)
                }
               
            </style>
            
</div>