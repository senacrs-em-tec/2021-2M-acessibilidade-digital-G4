<footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="https://twitter.com/Aces_Web" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/groups/desenvolvimentoweb" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Desenvolvido por Leonardo Campos, Vitor Prates, Fábio Schenkel e Leonardo José.</div>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Grupo 4 - 2021</div>
                    </div>
                </div>
            </div>
        </footer>

        </div>

        <div class="menu-acessibilidade">
            <img src="assets/img/acessibilidade.png" style="font-size:30px;cursor:pointer" onclick="openNav()">
        </div>

        <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a href="#" onclick="aumentarTexto()">Aumentar Fonte</a>
                <a href="#" onclick="diminuirTexto()">Diminuir Fonte</a>
                <a href="javascript:void(0)" onclick="trocarFiltro()">Trocar Filtro</a>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script>
            const tipos = [
                "protanopia",
                "protanomaly",
                "deuteranopia",
                "deuteranomaly",
                "tritanopia",
                "tritanomaly",
                "achromatopsia",
                "achromatomaly"
            ];

            var counter = 0;

            function openNav() {
                document.getElementById("myNav").style.width = "15%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }

            function trocarFiltro() {
                const filtro = `url('filters.svg#${tipos[counter]}')`;
                document.getElementById("overlay").style.filter = filtro;


                if (counter == tipos.length) {
                    counter = 0;
                } else {
                    counter++;
                }
            }

            var txt = document.getElementsByTagName("body");

            function aumentarTexto() {
                style = window.getComputedStyle(txt[0], null).getPropertyValue('font-size');
                currentSize = parseFloat(style);
                document.body.style.fontSize = (currentSize + 2) + 'px';
            }

            function diminuirTexto() {
                style = window.getComputedStyle(txt[0], null).getPropertyValue('font-size');
                currentSize = parseFloat(style);
                document.body.style.fontSize = (currentSize - 2) + 'px';
            }
            
        </script>
    </body>
</html>
