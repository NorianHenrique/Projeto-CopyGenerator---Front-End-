<html>
    <head>
        <title>Bem-vindo, <?php echo $_SESSION['nome']; ?> | CopyGenerator | Inteligência Artificial</title>
        <script src="https://kit.fontawesome.com/5506a4acb1.js" crossorigin="anonymous"></script>
	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
	  <link href="<?php echo INCLUDE_PATH_STATIC ?>css/style.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Norian Henrique - Danki Code">
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="<?php echo INCLUDE_PATH_STATIC ?>imagens/logo.png" />
    </head>
    <body>
    

      <header>
        <div class="center">
            <div class="logo">
                  <img alt="Logomarca" title="logo" src="<?php echo INCLUDE_PATH_STATIC?>imagens/logo_titulo.png">
            </div><!--logo-->

            <div class="btn-menu">
                 <p><i class="fa-solid fa-user"></i> <?php echo $_SESSION['nome'] ?></p>
                 <a href="?loggout">Sair</a>
            </div><!--btn-menu-->
             <div class="clear"></div>
        </div>
      </header>

      <section class="banner-video">
             <div class="banner-destaque">
                     <h2>Crie os Seus Conteúdos usando IA</h2>
                     <p>Com a ajuda da inteligência artificial do CopyGenerator produzir conteúdos se tornou mais simples!
                        Você pode criar textos, legendas, imagens, vídeos e muito mais com nossos modelos treinados e fazer seu negócio decolar.
                      </p>
                      <iframe width="640" height="360" src="https://www.youtube.com/embed/WuG4vZKLQ50" title="CopyGenerator Apresentação Oficial - Brazil 001" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      <a href="#planos">Conhecer planos</a>
             </div><!--banner-destaque-->
      </section><!--banner-video-->

      <section class="servicos">
           <div class="center">
                 <div class="servico-sidebar">
                       <h2>O que oferecemos para você?</h2>
                       <p>O Copy Generator é uma uma ferramenta avançada que permite a produção de conteúdo de forma rápida, eficiente e precisa.</p>
                      </br>
                       <p>Com ela é possível criar conteúdo de alta qualidade sem precisar passar por processos manuais.
                       ⭐<a href="#planos">Conheça</a> todas as funcionalidades.</p>
                 </div><!--servico-sibebar-->

                 <div class="servico-destaque">
                          <div class="servico-single">
                                 <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/seo.png"/>
                                 <h3>Artigos Otimizados para SEO</h3>
                                 <p>Usando nossos modelos super treinados mais o poder do famoso GPT-4 seus artigos gerados serão únicos e bem posicionados nos mecanismos de busca.</p>
                          </div><!--servico-single-->

                           <div class="servico-single">
                                 <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/fb-ia.png"/>
                                 <h3>Anúncios para Venda no Facebook</h3>
                                 <p>Use nosso modelo treinado baseado no GPT-4 para criar anúncios totalmente otimizados para venda na plataforma do Facebook.</p>
                          </div><!--servico-single-->

                           <div class="servico-single">
                                 <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/google-ads.png"/>
                                 <h3>Anúncios para Venda no Google</h3>
                                 <p>Use nosso modelo treinado baseado no GPT-4 para criar anúncios totalmente otimizados para venda na plataforma do Google.</p>
                          </div><!--servico-single-->

                          <div class="servico-single">
                                 <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/videos-ia.png"/>
                                 <h3>Gerador de Vídeos Inteligentes</h3>
                                 <p>Gere seu roteiro ou crie o seu próprio e nosso sistema faz o resto para você! Usamos vozes neurais e legendas inteligentes, bem como imagens para seu vídeo. Crie conteúdo audiovisual infinito!</p>
                          </div><!--servico-single-->

                            <div class="servico-single">
                                 <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/legendas.png"/>
                                 <h3>Legendas Inteligentes</h3>
                                 <p>As legendas são um grande atrativo para qualquer vídeo. Nosso sistema além de gerar vozes neurais (o mais semelhante do humano possível) ainda geramos legendas inteligentes para você.</p>
                          </div><!--servico-single-->

                            <div class="servico-single">
                                 <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/image-ia.png"/>
                                 <h3>Imagens Únicas usando IA</h3>
                                 <p>Gere lindas imagens usando diversos modelos treinados de inteligência artificial (Midjourney, Dall.e). Com nosso próprio fine tune seus resultados serão ainda melhores e mais precisos.</p>
                          </div><!--servico-single-->
                 </div><!--servico-destaque-->
           </div>
      </section><!--servicos-->

      <section class="beneficios">
            <div class="center">
                 <div class="beneficio-list">
                       <h3>Benefícios</h3>
                       <h2>Por que eu devo utilizar o Copy Generator?</h2>
                      </br>
                      <p><i class="fa fa-bolt"></i> Agilidade na hora de produzir conteúdos e materiais</p>
                      <p><i class="fa fa-star"></i> Garantia de consistência e qualidade do que foi gerado</p>
                      <p><i class="fa fa-circle-xmark"></i> Reduza os erros e aumenta a qualidade dos conteúdos</p>
                      <p><i class="fa fa-rocketchat"></i> IA (GPT-4 com Fine Tune) treinada para produzir conteúdos personalizados</p>
                      <p><i class="fa fa-database"></i> Análise e coleta de dados em tempo real</p>
                 </div><!--beneficio-list-->

                 <div class="beneficio-img">
                       <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/mockupapp.jpg"/>
                 </div><!--beneficio-imig-->
            </div>
      </section><!--benefiocios-->

      <section class="planos" id="planos">
            <h2>Nossos Planos</h2>
            <p style="color:white;margin:0 auto;max-width:600px,">Escolha o plano ideal para você e comece a usar nossa plataforma imediatamente e produzir conteúdo infinito com IA, preços flexíveis cancele a hora que quiser.</p>
            <div class="planos-center">

                  <div class="box-plano">
                      <h3>Silver</h3>
                      <h1>R$39/Mês</h1>
                      <a href="">Quero Plano</a>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Artigos Otimizados para SEO</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Facebook</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Google</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Imagens em Alta Qualidade usando Inteligência Artificial</p>
                      <p><i class="fa-regular fa-circle-check"></i> Salvar Conteúdo na Nuvem</p>
                  </div><!--box-plano-->

                  <div class="box-plano">
                      <h3>Smart</h3>
                      <span>RECOMENDADO</span>
                      <h1>R$59/Mês</h1>
                      <a href="">Quero Plano</a>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Artigos Otimizados para SEO</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Vídeos Inteligentes com Base no seu Roteiro</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Posts para Redes Sociais (imagens e textos prontos)</p>
                      <p><i class="fa-regular fa-circle-check"></i> ChatGPT-MAX-DC (Treinado e Próprio) do CopyGenerator para alavancar ainda mais seus resultados.</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Roteiro Inteligente para Vídeos</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Facebook</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Google</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Títulos Magnéticos para seu Canal no Youtube</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Vozes Neurais e Inteligentes para Vídeos com Base no seu Roteiro</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Imagens em Alta Qualidade usando Inteligência Artificial</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Legenda Inteligentes para Vídeos com Base no seu Roteiro</p>
                      <p><i class="fa-regular fa-circle-check"></i> Salvar Conteúdo (texto e mídia) na Nuvem</p>
                      <p>🔥 Suporte Premium para Alavancar ainda mais seu Negócio</p>
                  </div><!--box-plano-->

                  <div class="box-plano">
                      <h3>Basic</h3>
                      <h1>R$29/Mês</h1>
                      <a href="">Quero Plano</a>       
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Facebook</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Google</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Imagens em Alta Qualidade usando Inteligência Artificial</p>
                      <p><i class="fa-regular fa-circle-check"></i> Salvar Conteúdo na Nuvem</p>
                  </div><!--box-plano-->
            </div>

            <div class="box-garantia">
                <div class="img-garantia">
                   <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/garantia.png"/>
                </div><!--img-garantia-->
               
                <div class="texto-garantia">
                     <h2>Risco Zero para Você!</h2>
                     <p>Acreditamos no CopyGenerator e o poder que a inteligência artificial vai ter impacto significativo em seu negócio que se em 30 dias você achar que a ferramenta não é para você devolvemos 100% do seu valor investido.</p>  
                </div><!--texto-grarantia-->
            </div><!--box-garantia-->

            <div class="destaque-plano">
                    <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/destaque_ai.png"/>
            </div><!--destaque-plano-->
      </section><!--planos-->

      <section class="apresentacao">
            <div class="center">
                   <h2>Gere Conteúdo de Qualidade com Nossa Plataforma</h2>
                   <p>Transforme sua criação de conteúdo com tecnologia avançada IA</p>
                   <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/chamada-personagem.png"/>
            </div>
      </section><!--apresentacao-->

      <section class="sessao-bonus">
            <h2>Confira nossa sessão bônus de aulas</h2>
            <p>⭐ Além do app, você irá ganhar video aulas ensinando a usar todo o poder do app e diversas técnicas
             de marketing digital e conteúdo. Para alavancar ainda mais seus resultados!</p>
             <div class="center">

                  <div class="sessao-video">
                       <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/thumb_aula.png"/>
                  </div><!--sessao-video-->

                  <div class="sessao-video">
                       <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/thumb_aula1.png"/>
                  </div><!--sessao-video-->

                  <div class="sessao-video">
                       <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/thumb_aula2.png"/>
                  </div><!--sessao-video-->
                    
             </div>
      </section><!--sessao-bonus-->

      <section class="perguntas">
            <div class="center">
                  <h2>O que os maiores influenciadores e criadores do Brazil falam sobre o CopyGenerator?</h2>
                        <div class="video-apresentar">
                           <iframe width="100%" height="280" src="https://www.youtube.com/embed/WuG4vZKLQ50" title="CopyGenerator Apresentação Oficial - Brazil 001" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div><!--video-parensetar-->
                        <div class="texto-apresentar">
                             <h3>Peter Jordan - Influenciador & Criador</h3>
                             <p>"Eu tenho mais de 10 canais no Youtube e muitos destes eu nem apresento.
                              Com o CopyGenerator foi possível apenas com um roteiro gerar vídeos incríveis, com legenda e vozes. As outras funcionalidades ajudam alavancar ainda mais qualquer tipo de negócio. Além disso faço questão de recomendar para minha audiência e alunos.</p>
                             <a href="">Quero acessar a Ferramenta </a>
                        </div><!--texto-apresentar-->
                  <div class="clear"></div>

                  <div class="perguntas-fqa">
                        <h2>Perguntas Frequentes</h2>

                        <div class="perguntas-single">
                              <h3>O conteúdo gerado possui direito autoral?</h3>
                              <p>Todo conteúdo gerado, incluindo videos, imagens e textos são seus. Por utilizarmos inteligência artificial o conteúdo é único e gerado na hora.</p>
                        </div><!--pweguntas-single-->

                        <div class="perguntas-single">
                              <h3>Posso gerar conteúdo internacional?</h3>
                              <p>Sim, nossa ferramenta suporta todas os idiomas.</p>
                        </div><!--pweguntas-single-->

                          <div class="perguntas-single">
                              <h3>Posso gerar conteúdo internacional?</h3>
                              <p>Sim, nossa ferramenta suporta todas os idiomas.</p>
                        </div><!--pweguntas-single-->

                          <div class="perguntas-single">
                              <h3>Existe limite do que posso gerar em meus planos?</h3>
                              <p>No plano Smart não existe limite, este é um dos grandes diferenciais. Já nos outros planos existe um limite de até 150.000 palavras.</p>
                        </div><!--pweguntas-single-->

                        <div class="perguntas-single">
                              <h3>Como o conteúdo é gerado de forma tão precisa?</h3>
                              <p>Possuímos modelos treinados para texto, bem como imagens. Os modelos do CopyGenerator são evoluidos constantemente por utilizarmos diversas técnicas de Machine Learning, Deep Learning e Fine Tune.
                              Resumindo:<span> Você só se preocupa em gerar conteúdo e nós cuidamos do resto :)</span></p>
                        </div><!--pweguntas-single-->

                         <div class="perguntas-single">
                              <h3>Eu tenho suporte após adquirir o CopyGenerator?</h3>
                              <p>Dentro da ferramenta nossa equipe está sempre disponível para lhe auxiliar no horário comercial. Além disso você, como assinante, pode ficar a vontade para dar sugestões para novas funcionalidades e melhorias.</p>
                        </div><!--pweguntas-single-->

                         <div class="perguntas-single">
                              <h3>Onde assisto as aulas que o CopyGenerator oferece?</h3>
                              <p>Dentro da ferramenta existe uma seção aulas. De fácil acesso, para você estudar e aplicar imediatamente 😄</p>
                        </div><!--pweguntas-single-->
                  </div><!--pergintas-fqa-->

                  <div class="box-pergunta">
                       <h2>Ainda na dúvida? Conheça mais motivos para escolher o CopyGenerator!</h2>
                       <p><i class="fa-solid fa-check"></i> Assinatura única com <span>cota ilimitada </span> para gerar textos, artigos e vídeos, enquanto a concorrência cobra a mensalidade e seu uso.</p>
                           </br>
                       <p><i class="fa-solid fa-check"></i> Capacidade de gerar <span> conteúdo audiovisual </span>, enquanto a concorrência se limita a texto.</p>
                           </br>
                       <p><i class="fa-solid fa-check"></i> Modelos <span> Treinados e Prontos para Melhores Resultados </span>, concorrência usa modelos baratos e prontos que qualquer um tem acesso.</p>   
                  </div><!--box-pergunta-->
            </div>
      </section><!--perguntas-->

      <section class="planos" id="smart">
            <h2>Tráfego Infinito para seu Negócio = Mais Clientes (para a vida toda)</h2>
            <p style="color:white;margin:0 auto;max-width:600px,">🔴 Chega de Gastar Dinheiro e Tempo, Enquanto a Inteligência Artificial do CopyGenerator está aqui!</p>

            <div class="planos-center">

                  <div style="display: none;"  class="box-plano">
                      <h3>Silver</h3>
                      <h1>R$39/Mês</h1>
                      <a href="">Quero Plano</a>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Artigos Otimizados para SEO</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Facebook</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Google</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Imagens em Alta Qualidade usando Inteligência Artificial</p>
                      <p><i class="fa-regular fa-circle-check"></i> Salvar Conteúdo na Nuvem</p>
                  </div><!--box-plano-->

                  <div style="width: 80%;" class="box-plano">
                      <h3>Smart</h3>
                      <span>RECOMENDADO</span>
                      <h1>R$59/Mês</h1>
                      <a href="">Quero Plano</a>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Artigos Otimizados para SEO</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Vídeos Inteligentes com Base no seu Roteiro</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Posts para Redes Sociais (imagens e textos prontos)</p>
                      <p><i class="fa-regular fa-circle-check"></i> ChatGPT-MAX-DC (Treinado e Próprio) do CopyGenerator para alavancar ainda mais seus resultados.</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Roteiro Inteligente para Vídeos</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Facebook</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Google</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Títulos Magnéticos para seu Canal no Youtube</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Vozes Neurais e Inteligentes para Vídeos com Base no seu Roteiro</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Imagens em Alta Qualidade usando Inteligência Artificial</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Legenda Inteligentes para Vídeos com Base no seu Roteiro</p>
                      <p><i class="fa-regular fa-circle-check"></i> Salvar Conteúdo (texto e mídia) na Nuvem</p>
                      <p>🔥 Suporte Premium para Alavancar ainda mais seu Negócio</p>
                  </div><!--box-plano-->

                      <div style="display: none;" class="box-plano">
                      <h3>Basic</h3>
                      <h1>R$29/Mês</h1>
                      <a href="">Quero Plano</a>       
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Facebook</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Anúncios para Google</p>
                      <p><i class="fa-regular fa-circle-check"></i> Gerador de Imagens em Alta Qualidade usando Inteligência Artificial</p>
                      <p><i class="fa-regular fa-circle-check"></i> Salvar Conteúdo na Nuvem</p>
                  </div><!--box-plano-->
            </div>

            <div class="box-garantia">
                <div class="img-garantia">
                   <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/garantia.png"/>
                </div><!--img-garantia-->
               
                <div class="texto-garantia">
                     <h2>Risco Zero para Você!</h2>
                     <p>Acreditamos no CopyGenerator e o poder que a inteligência artificial vai ter impacto significativo em seu negócio que se em 30 dias você achar que a ferramenta não é para você devolvemos 100% do seu valor investido.</p>  
                </div><!--texto-grarantia-->
            </div><!--box-garantia-->

            <div class="destaque-plano">
                    <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/destaque_ai.png"/>
            </div><!--destaque-plano-->
      </section><!--planos-->

      <section class="duvida">
           <div class="center">
               <h2>Ainda na Dúvida?</h2>
               <p>Vamos lhe mostrar ainda mais o poder do CopyGenerator! Clique no Play e Assista a Apresentação</p>
               <iframe width="640" height="360" src="https://www.youtube.com/embed/WuG4vZKLQ50" title="CopyGenerator Apresentação Oficial - Brazil 001" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
               <a href="#smart">ACESSO IMEDIATO AO COPYGENERATOR NO PLANO SMART!</a>
           </div>
      </section><!--duvida-->

      <footer>
             <div class="footer-end-left">
                  <p><b>Florianópolis, SC</b></p>
                        </br>
                  <p><b>New York, NY</b></p>
                        </br>
                  <p>CNPJ: 25.162.666/0001-77</p>
             </div><!--footer-end-left-->

             <div class="footer-end-right">
                    <p>Grupo Danki Code © 2016-2023</p>
                       </br>
                    <a href="">Volta ao topo</a>
             </div><!--footer-end-right-->
             <div class="clear"></div>
      </footer>

    </body>
</html>